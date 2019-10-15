/* Calculator Js */

/* Set values on calculator panel */
var inputs = [];
function setPanel(val){ 

    /* Clears calculator panel to restart operations if error was previous detected */  
    if ($("#panel").val()=='ERRO'){
        $("#panel").val("");
    }

    /* Block inputs of two signals consecutive on calculator panel */
    if ($("#panel").val().length>0){
        if ($.isNumeric($("#panel").val().substr(-1))==true){
            $("#panel").val(($("#panel").val()+val));
        }else{
            if ($.isNumeric(val)==true){
                $("#panel").val(($("#panel").val()+val));
            }else{
                $("#panel").val($("#panel").val().slice(0,-1));
                setPanel(val);
            }
        }
    }else{
        /* First input in calculator panel allows only numbers or minus signal */
        if (($.isNumeric(val))||(val=='-')&&(val!=='0')){
            $("#panel").val(($("#panel").val()+val));
        }
    }

    /* Extracts all (a ? b) expressions from string and set into array */
    inputs = [];
    var signals = ['+','-','*','/','%'];
    var expression = $("#panel").val();
    if (expression.length>0){
        for (i=0;i<expression.length;i++){
            for (j=0;j<signals.length;j++){
                if (expression[i]==signals[j]){
                    var values = expression.split(signals[j]);
                    inputs.push(values[0]);
                    inputs.push(expression[i]);
                    expression = expression.substr(values[0].length+1);
                    i=0;
                }
            }
        }
        inputs.push(expression);

        /* Fix for first value in calculator panel being negative */
        if (inputs[0]==''){
            inputs.splice(0, 1);
            inputs.splice(0, 1);
            inputs[0] = -Math.abs(inputs[0]);
        }

        /* Removes left zeros or numbers with two dots */
        for (i=0;i<inputs.length;i++){
            inputs[i] = inputs[i].replace(/^0+/, '0');
            var str = inputs[i];
            var qdots = 0;
            for (j=0;j<str.length;j++){
                if (str[j]=='.'){
                    qdots++;
                }
            }
            if (qdots>1){
               inputs.pop();
            }
            if (str.length>1){
                if ((str[0]=='0')&&(str[1]!=='.')){
                   inputs[i] = str.substring(1);
                }
            }
        }
    }

    /* Concatens and shows inputs array on calculator panel */
    $("#panel").val(inputs.join(''));
  
}

/* Clears calculator panel */
function clearPanel(){
    $("#panel").val("");
}

$(document).ready(function(){

    /* Prevents enter data directly on calculator panel */
    $('#panel').keydown(function() {
        $("#panel").focus();
        return false;
      });
    
    /* Binds right numeric keyboard keys to work with panel buttons */
    document.onkeyup = function (oEvent){
        if (event.keyCode=='13'){
            $("#equal").trigger("click");
        }else{
            $("#"+event.keyCode).trigger("click");
        }
    }    

    /* Sends calculator panel data to be processed on controller */
    $("#equal").click(function(){
        
        /* Checks if last value in inputs is number */
        if (inputs[inputs.length-1]==''){
            inputs.pop();
        }

        /* Check if there is at least one operation to process on inputs array (a ? b) */
        if (inputs.length>=3){

            /* Disables equal button while processing */
            $("#equal").html("Wait...");
            $("#equal").attr("disabled", true);
            $.ajax({
                url: 'calculatorController/calc/_',
                type: 'post',
                data: {'expression':inputs.join('')},
                success:function(data){
                    inputs = [];
                    var obj = JSON.parse(data);

                    /* Shows operation result on calculator panel */
                    $("#panel").val(obj.result);

                    /* Shows raw operations stored in database */
                    $("#rows").html("");
                    for (var i=0;i<obj.rows.length;i++){
                        $("#rows").append(JSON.stringify(obj.rows[i])+'<hr>');
                    }

                    /* Re-enables equal button */
                    $("#equal").html("=");
                    $("#equal").attr("disabled", false);
                },
                error: function (request, status, error) {
                    inputs = [];
                    $("#equal").html("=");
                    $("#equal").attr("disabled", false);
                }
            })
        }
    })
});
