<!DOCTYPE html>
<html>
    <head>
        
        <title> Enter Details</title>
        
        
        <!--jQuery-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <style>
            .txt{
                font-family: Arial, Helvetica, sans-serif;
                margin-right: 150px;
                margin-left: 150px;
                font-size: 30px;
            }
            
            .txt{
                background-image:url("http://backgroundcheckall.com/wp-content/uploads/2017/12/background-image-for-login-page-4.jpg");
                background-size:cover;
                background-repeat:no-repeat;
            }
            
               .btn{
          background:#00ff00;
          border:0;
          padding-left: 20px;
          padding-right:20px;
          color:#ffffff;
          cursor: pointer;
          height:30px;
            }
            
            .validate{
          background:#ffff80;
          border:0;
          padding-left: 20px;
          padding-right:20px;
          color:#0000ff;
          cursor: pointer;
          height:30px;
            }
        </style>
    </head>
    
    <body class="txt">
        <div align="center">
        <h4>Please enter your payment details.</h4>
        
            <br />
            
            <form method = "POST" action = "Ebus3.php">
                
                 <label for="Name"> Name</label>
                
                <input type="text" id="name" name="name" maxlength="25">
                
                <br/>
                <br/>
                
                <label for "Email"> Email Address</label>
                
                <input type="email" id="Email" name="Email" maxlength="30">
                
                <br/>
                <br/>
                
                <label for="user_pin">PIN </label>
                
                <input type="password" id="user_pin" placeholder="Card Pin" maxlength="4">
                <br/>
                    
               
                
            </form>
            
            <br />
            
            <button onClick="validateDetails()" class="validate"> Validate </button>
        <script type="text/javascript" src="ebus2_validator.js"></script>
        </div>
        
         <button type="Submit" id="btnPurchase" class="btn" style="float:right" disabled > 
                    Proceed with Purchase 
                </button>
        
        <?php
        $SESSION["Subtotal"]=$_POST["Subtotal"];
        $_SESSION["Discount"] =$_POST["Discount"];
        $_SESSION["Vat"] = $_POST["Vat"];
        $_SESSION["Total"] = $_POST["Total"];
        $_SESSION["Name"] = $_POST["name"];
        $_SESSION["Email"] = $_POST["Email"];
        ?>
        
