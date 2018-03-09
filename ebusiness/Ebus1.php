<html>
    <head>
        <title>Select Product</title>
        
        <!--jQuery-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        
        <script type = "text/javascript" src="cost_calc.js"></script>
        
        <style>
            .txt{
                font-family: Arial, Helvetica, sans-serif;
                margin-right: 150px;
                margin-left: 150px;
                font-size: 30px;
            }
            
            .txt{
                background-image:url("https://static1.squarespace.com/static/5523096fe4b0cc480de16acb/t/56bb6fe4746fb96e6cf3e467/1455124454679/blue+background.jpg?format=1500w");
                background-size:cover;
                background-repeat:no-repeat;
            }
            
            .btn{
  background:#ffcc00;
  border:0;
  padding-left: 20px;
  padding-right:20px;
  color:#ffffff;
  cursor: pointer;
  height:30px;
            }
            
        </style>
        
    </head>
    
    <body class="txt">
        <div align="center">
        <h1>Select Product</h1>
        
        <br/>
        
        <form method = "POST" action = "Ebus2.php">
        
        <label for = "salesforce">
        <input type = "radio" id="salesforce" name="product" checked onClick="disablebtnProceed()"/>
        SalesForce @ $100
        </label>
        
        <br/>
    
        <label for ="cloud9">  
        <input type = "radio" id ="cloud9" name="product" checked onClick = "disablebtnProceed()"/>
        Cloud 9 @ $200
        </label>
        
        <br/>
        
        <label for = "aws">
            <input type = "radio" id="aws" name="product" checked onClick="disablebtnProceed()"/>
            AWS @ $300
        </label>
        
        <br/>
        
        <label for ="gmail">
            <input type ="radio" id="gmail" name="product" checked onclick ="disablebtnProceed()"/>
            Gmail @ $400
        </label>
        
        <br/>
        <br/>
        
        
        <label for= "subtotal">
            Cost before VAT and Discount
            <input type = "text" id = "subtotal" value="0.00" readonly/>
            
        </label>
        
        <br/>
        <br/>    
            
            <label for="Discount">
                Discount @ 5% 
                <input type="text" id="Discount" name="Discount" value="0.00" readonly/>
            </label>
            
            <br /> 
            <br />
            
           
            <label for="Vat">
                Vat @ 10%
                <input type="text" id="Vat" name="Vat" value="0.00" readonly/>
            </label>
            
            <br />
           <button style="font-size:15px;" onClick="calcSub()" class="btn">Calculate cost</button>
            
        </form>
        
        <label for ="total">
        Total
        <input type = "text" id = "total" value="0.00" readonly/>
        </label>
        
        <br/>
        <br/>
        
         <button type="submit" style="font-size:15px;" class="btn" disabled>Add to shopping cart</button>
       
        </form>
        
        <br/>
        <br/>
        
        <a role ="button" href="Ebus1.php" style="font-size:18px;color:white; background-color:red;">Clear Choice</a>
        </div>
    </body>
</html>