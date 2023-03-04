<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<title>Calculator</title>
		<meta name="author" content="" />
        
        <link rel="stylesheet" href="style.css">
        <style>
            body {
                margin-left:1500px;
                margin-right:1500px;
            }
            .heading {
                font-family: cursive;
                color: black;
                text-align: center;
            }

            .calculator {
                font-family: cursive;
                font-size: 110%;
                color: black;
                text-align: center;
                margin-top: 10vh;
                
                border: 1px solid gray;
                border-radius: 10px;
                box-shadow: 5px 10px grey;
                transition: transform .2s;
            }

            input {
                margin-bottom:15px;
                color: black;
                text-align: center;
                font-weight: bold; 
                font-family: cursive;
                border-left: gray;
                border-right: gray;
                border-style: groove; 
                font-size: 110%;
                box-shadow: 4px 6px grey;
                transition: transform .2s;
            }

            input:hover{
                transform: scale(1.3);
            }

            select {
                color: black;
                text-align: center;
                font-weight: bold; 
                font-family: cursive;
                border-left: gray;
                border-right: #gray;
                border-style: groove;
                font-size: 95%;
                box-shadow: 4px 6px grey;
            }

            option {
                color: Black;
                text-align: center;
                font-weight: bold; 
                font-family: cursive;
                border-left: #gray;
                border-right: #gray;
                border-style: groove; 
                font-size: 95%;
            }

            input[type=number]::-webkit-inner-spin-button, 
            input[type=number]::-webkit-outer-spin-button { 
                -webkit-appearance: none; 
                margin: 10px;
            }

            @media only screen and (max-width: 2600px){
  	    
                body{
                    margin-left:600px;
                    margin-right:600px;
                }
            }
            
        </style>
	</head>
	<body>
		<div class="calculator">
            <div class="heading">
			    <h3>CALCULATOR</h3>
		    </div>
			<form action="" method="POST">
				<input type="number" name="first_input" placeholder="First Number Here" size="20" />&nbsp;&nbsp;&nbsp; <br><br>
				<input type="number" name="second_input" placeholder="Second Number Here" size="20" />&nbsp;&nbsp;&nbsp; <br><br>
				<select name="function">
					<option>Add</option>
					<option>Subtract</option>
					<option>Multiply</option>
					<option>Divide</option>
					<option>Square</option>
					<option>Square Root</option>
				</select><br><br><input type="reset" value="Reset">
				<input type="submit" name="submit" value="Submit" />
			</form>
			<?php include_once 'configuration.php' ?>
		</div>
	</body>
</html>