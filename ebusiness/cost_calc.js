/* global $ */

function calcSub(){
    
    var argSubTotal;
    
    if(document.getElementById('salesforce').checked) {
      argSubTotal = 100;
    }
    
    if(document.getElementById('cloud9').checked) {
      argSubTotal = 200;
    }
    
    if (document.getElementById('aws').checked) {
     argSubTotal = 300;
    }
    
    if(document.getElementById('gmail').checked) {
    argSubTotal= 400;
    }
    
calcDisVatTotal(argSubTotal);
}

function display(parm1){
  
  document.getElementById("subtotal").value = parm1;
  document.getElementById("total").value = parm1;
  
  function calcDisVatTotal(parmSubTotal){
    
    // declaring our variables
    var Subtotal = parmSubTotal;
    var vatAmt;
    var discountAmt;
    var TotalPrice;
    
    // calculate discount value
    discountAmt = (parmSubTotal * .05);
    
    // calculate vat value
    vatAmt = (parmSubTotal * .1);
    
    // calculate total
    TotalPrice = (parmSubTotal + vatAmt - discountAmt);
    
    //pass all the values
    display(Subtotal , vatAmt , discountAmt , TotalPrice);
}


function display(parm1 , parm2 , parm3 , parm4){

    
     document.getElementById("Subtotal").value = parm1; 
     
     
     document.getElementById("Vat").value = parm2;
     
    
     document.getElementById("Discount").value = parm3; 
     
    
     document.getElementById("Total").value = parm4;
     
      
  enablebtnProceed();
}


function enablebtnProceed(){
    $('#btnProceed').prop('disabled', false);
}

function disablebtnProceed() {
    $('#btnProceed').prop('disabled', true);
}

