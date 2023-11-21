<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="style.css"/>
    <title>Diabetes Prediction</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            font-size: 15px;
            color: black;
            background-color:rgb(192, 214, 233);
            margin: 0;
            padding: 0;
        }
        h1 {
        text-align: center;
        margin-top: 50px;
    }

    form {
        width: 450px;
        margin: auto;
        background-color: lightgrey;
        color: black;
        border-radius: 5px;
        padding: 2px;
    }

    label {
        display: block;
        margin-bottom: 10px;
        margin: auto;
    }

    input[type="text"],
    input[type="password"] {
        width: 95%;
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 3px;
        font-size: 16px;
        margin-bottom: 20px;
        margin: auto;
    }

    input[type="submit"] {
        background-color: blue;
        color: whitesmoke;
        padding: 10px 20px;
        border: none;
        border-radius: 3px;
        font-size: 16px;
        cursor: pointer;
    }

    input[type="submit"]:hover {
        background-color: seagreen;
        color: black;
    }


 .back-link{
    align-items: center;
			display: inline-block;
			color: blue;
            text-decoration: underline;
			margin-top: 20px;
        
		}
        
    
        
    </style>

</head>
<body>
    <div class="nav-container">
        <ul>	
            <li>
             <div class="logo-container">
                 <img src="images/logo.jpeg">
             </div>
         </li>	
 
    <li>
       <div class="container">
                 <h2><b>Health Department</b></h2>
                  <h4 style="text-align: center;color: blue"><b><i>Know your health</i></b></h4>
        </div>
    </li>
    </ul>
    </div>

     <h1><span class= student>User</span> Registration Form</h1>
     <form method="post">
        <p>
            <label for="name">Name:</label>
            <input type="text" name="name" required>
        </p>
        <p>
            <label for="email">Email:</label>
            <input type="text" name="email" required>
        </p>
        <p>
            <label for="password">Password:</label>
            <input type="password" name="password" required>
        </p>
        <p>
            <label for="confirm_password">Confirm Password:</label>
            <input type="password" name="confirm_password" required>
        </p>
        <p>
            <input type="submit" name="submit" value="Register">
        </p>
    </form>
    <div><a class="back-link" href="loginpage.html"><b>Already Registered? Click here to login</b></a><div>
    </div>
</body>
</html>
