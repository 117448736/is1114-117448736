<?php
session_start()
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Receipt</title>
        
        <style>
            .txt{
                font-family: Arial, Helvetica, sans-serif;
                margin-right: 150px;
                margin-left: 150px;
                font-size: 30px;
            }
            
            .txt{
                background-image:url("http://blog.visme.co/wp-content/uploads/2017/07/50-Beautiful-and-Minimalist-Presentation-Backgrounds-040.jpg");
                background-size:cover;
                background-repeat:no-repeat;
            }
            
            
            
        </style>
    </head>
    
 <body align="center" class="txt">
          
          <h3>Reciept </h3>
 
          <?php
          
        echo "Name: " . $_POST["name"] . "<br /> <br />";
        echo "Email: " . $_POST["Email"] . "<br /> <br />";
        echo "Subtotal: " . $_SESSION["Subtotal"] . " Euro.<br /> ";
        echo "Discount: " . $_SESSION["Discount"] . " Euro.<br /> ";
        echo "Vat: " . $_SESSION["Vat"] . " Euro.<br /> ";
        echo "Total: " . $_SESSION["Total"] . " Euro.<br /> ";
        
        ?>
        
        <a href="../cloudhomepage">Home</a>
