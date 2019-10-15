<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Calculator</title>
    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url();?>/assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Calculator Custom CSS -->
    <link href="<?php echo base_url();?>/assets/css/calculator.css" rel="stylesheet">

  </head>
  <body>
    <!-- Calculator Content -->
      <div class="container mt-2">
          <!-- Calculator Panel -->
          <div class="d-flex flex-row justify-content-center mt-2 mb-4">
            <input type="text" class="form-control panel p-3 shadow-none" id="panel" name="panel">
          </div>
          <!-- Numbers, Operations and Decimal Input Buttons -->
          <!-- The buttons id's are the javascript:e.keycode equivalent -->
          <div class="d-flex flex-row justify-content-center">
            <button class="btn btn-dark" id="103" value="7" onClick="setPanel(this.value);">7</button>
            <button class="btn btn-dark" id="104" value="8" onClick="setPanel(this.value);">8</button>
            <button class="btn btn-dark" id="105" value="9" onClick="setPanel(this.value);">9</button>
            <button class="btn btn-danger" id="107" value="+" onClick="setPanel(this.value);">+</button>
          </div>
          <div class="d-flex flex-row justify-content-center">
            <button class="btn btn-dark" id="100" value="4" onClick="setPanel(this.value);">4</button>
            <button class="btn btn-dark" id="101" value="5" onClick="setPanel(this.value);">5</button>
            <button class="btn btn-dark" id="102" value="6" onClick="setPanel(this.value);">6</button>
            <button class="btn btn-danger" id="109" value="-" onClick="setPanel(this.value);">-</button>
          </div>
          <div class="d-flex flex-row justify-content-center">
            <button class="btn btn-dark" value="1" id="97" onClick="setPanel(this.value);">1</button>
            <button class="btn btn-dark" value="2" id="98" onClick="setPanel(this.value);">2</button>
            <button class="btn btn-dark" value="3" id="99" onClick="setPanel(this.value);">3</button>
            <button class="btn btn-danger" id="106" value="*" onClick="setPanel(this.value);">x</button>
          </div>
          <div class="d-flex flex-row justify-content-center">
            <button class="btn btn-dark" id="194" value="." onClick="setPanel(this.value);">.</button>
            <button class="btn btn-dark" id="96" value="0" onClick="setPanel(this.value);">0</button>
            <button class="btn btn-danger" value="%" onClick="setPanel(this.value);">%</button>
            <button class="btn btn-danger" id="111" value="/" onClick="setPanel(this.value);">/</button>
          </div>
          <!-- Reset and Equal Functions -->
          <div class="d-flex flex-row justify-content-center mt-3">
            <button class="btn btn-warning" id="110" value="Reset" onClick="clearPanel();">Reset</button>
            <button class="btn btn-success equal" value="=" id="equal">=</button>
          </div>
      </div>

      <!-- Display all db stored operations -->
      <div class="card mt-2 text-center">
      <div class="card-header">
         <h1>Raw DB Results</h1>
        </div>
        <div class="card-body">
          <div class="card=text" id="rows">
          </div>
        </div>
      </div>         

    <!-- Bootstrap core JavaScript -->
    <script src="<?php echo base_url();?>/assets/jquery/jquery.js"></script>
    <script src="<?php echo base_url();?>/assets/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Calculator Buttons and Functions Javascript -->
    <script src="<?php echo base_url();?>/assets/js/calculator.js"></script>
  </body>
</html>