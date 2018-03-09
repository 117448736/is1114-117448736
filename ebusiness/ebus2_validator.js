/* global $ */

function validateDetails(){
    
    var pin;
    var email;
    var name;
    
    pin = document.getElementById("user_pin").value;
    email=document.getElementById("Email").value;
    name=document.getElementById("name").value
    
     if (pin == ""){
        alert("Please enter your PIN");
    }
    
    else if (String(pin).length < 4){
        alert("Please make sure your PIN is accurate");
    }
    
   else if (Email==""){
        alert("Please enter your email");
   }
   
   else if (name==""){
        alert("Please enter your name");
    }
   
    
    else{
        enablebtnPurchase();
    }
    
}

function enablebtnPurchase(){
    $('#btnPurchase').prop('disabled', false);
}

function disablebtnPurchase() {
    $('#btnPurchase').prop('disabled', true);
}