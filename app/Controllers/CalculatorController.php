<?php 
namespace App\Controllers;
use App\Models\CalculatorModel;
use App\Models\TestModel;
class CalculatorController extends BaseController{

	/* Shows calculator default page */
	public function index(){
		return view('calculator');
	}

	/* Executes unit tests */
	public function calcTests(){
		$test = new TestModel();
		$results[] = $test->unit($this->calc('1+2*3'),9);
		$results[] = $test->unit($this->calc('1-1*1+3'),3);
		$results[] = $test->unit($this->calc('2/2*3+1-1'),3);
		$results[] = $test->unit($this->calc('5+3*5'),40);
		$results[] = $test->unit($this->calc('5+1%2'),0);
		$results[] = $test->unit($this->calc('5+1%5/0'),'ERRO');
		print_r($test->report($results));
	}
	
	/* Process data from calculator panel */
	public function calc($operation){
		try {
			$output['result'] = '';
			$output['rows'] = '';

			/* Check if the request is coming from Ajax Call or test case */
			if ($this->request->isAJAX()){
				$operation = $this->request->getVar('expression');
			}
			$expression = $operation;
			if (strlen($expression)>0){

				/* Stores all (a ? b) expressions from string to array */
				$signals = ['+','-','*','/','%'];
				for ($i=0;$i<strlen($expression);$i++){
					if (stripos(json_encode($signals),$expression[$i]) !== false) {
						$values = explode($expression[$i],$expression);
						$data[] = $values[0];
						$data[] = $expression[$i];
						/* Restart expression until no characters remains */
						$expression = substr($expression, strlen($values[0])+1); 
						$i=0;
					}
				}
				$data[] = $expression;

				/* Fix for first value of calculator panel being negative */
				if ($data[0]==''){
					unset($data[0]);
					unset($data[1]);
					$data[2]=-abs($data[2]);
					$data = array_values($data);
				}

				/* Executes all (a ? b) operations stored on array */
				for ($i=1;$i<count($data);$i++){
					switch ($data[$i]) {
						case '+':
							$result = bcadd($data[$i-1],$data[$i+1],4);
							break;
						case '-':
							$result = bcsub($data[$i-1],$data[$i+1],4);
							break;
						case '*':
							$result = bcmul($data[$i-1],$data[$i+1],4);
							break;
						case '/':
							if ($data[$i+1]==0){

								/* Interrupt script if division by 0 */
								$output['result'] = 'ERRO';
								if ($this->request->isAJAX()){
									return json_encode($output);
								}else{
									return $output['result'];
								}
								exit;
							}else{
								$result = bcdiv($data[$i-1],$data[$i+1],4);
								break;
							}
						case '%':
							if ($data[$i+1]==0){

								/* Interrupt script if mod division by 0 */
								$output['result'] = 'ERRO';
								if ($this->request->isAJAX()){
									return json_encode($output);
								}else{
									return $output['result'];
								}
								exit;
							}else{
								$result = bcmod($data[$i-1],$data[$i+1]);
								break;
							}
					}

					/* Removes processed data from array */
					unset($data[$i-1]);
					unset($data[$i]);
					unset($data[$i+1]);

					/* Stores result to execute (result ? next) operation */
					array_unshift($data,$result);
					$i=0;
				}

				/* Set result data removing extra decimal right zeros */
				$output['result'] = (float)$data[0];
			}
			
			/* If ajax call insert to database and returns also inserted rows */
			if ($this->request->isAJAX()){	

				/* Creates array to insert into database */
				$insert['operation'] = $operation;
				$insert['ip'] = $_SERVER['REMOTE_ADDR'];
				$insert['result'] = $output['result'];

				/* Generate and compares random number between interval -result and +result */
				if (rand(-abs($result),abs($result))==$insert['result']){
					$insert['bonus'] = 1;
				}
				$calculator = new CalculatorModel();
				$calculator->insert($insert);
				$calculator = new CalculatorModel();
				$output['rows'] = $calculator->orderBy('id','desc')->findAll();
				return json_encode($output);
			}else{

				/* If unit tests call just output result */
				return $output['result'];
			}
			
		} catch (Exception $e) {
			
		} catch (Error $e) { 
			
		}
	}
}