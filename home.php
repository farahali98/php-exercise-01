<!DOCTYPE html>
<html lang="en">

<head>
    <style>
        html {
            height: 100%;
        }
        
        body {
            margin: 0;
            padding: 0;
            font-family: sans-serif;
            background: linear-gradient(#141e30, #243b55);
        }
        
        .registration-box {
            position: absolute;
            top: 50%;
            left: 20%;
            width: 400px;
            padding: 40px;
            transform: translate(-50%, -50%);
            background: rgba(0, 0, 0, .5);
            box-sizing: border-box;
            box-shadow: 0 15px 25px rgba(0, 0, 0, .6);
            border-radius: 10px;
        }
        
        .registration-box h2 {
            margin: 0 0 30px;
            padding: 0;
            color: #fff;
            text-align: center;
        }
        
        .registration-box .user-box {
            position: relative;
        }
        
        .registration-box .user-box input {
            width: 100%;
            padding: 10px 0;
            font-size: 16px;
            color: #fff;
            margin-bottom: 30px;
            border: none;
            border-bottom: 1px solid #fff;
            outline: none;
            background: transparent;
        }
        
        .registration-box .user-box label {
            position: absolute;
            top: 0;
            left: 0;
            padding: 10px 0;
            font-size: 16px;
            color: #fff;
            pointer-events: none;
            transition: .5s;
        }
        
        .registration-box .user-box input:focus~label,
        .registration-box .user-box input:valid~label {
            top: -20px;
            left: 0;
            color: #03e9f4;
            font-size: 12px;
        }
        
        .registration-box form a {
            position: absolute;
            display: inline-block;
            padding: 10px 20px;
            color: #03e9f4;
            font-size: 16px;
            text-decoration: none;
            text-transform: uppercase;
            overflow: hidden;
            transition: .5s;
            margin-top: 40px;
            letter-spacing: 4px;
            right: 5%;
            bottom: 4%;
        }
        
        .registration-box a:hover {
            background: #03e9f4;
            color: #fff;
            border-radius: 5px;
            box-shadow: 0 0 5px #03e9f4, 0 0 25px #03e9f4, 0 0 50px #03e9f4, 0 0 100px #03e9f4;
        }
        
        .registration-box a span {
            position: absolute;
            display: block;
        }
        
        .registration-box a span:nth-child(1) {
            top: 0;
            left: -100%;
            width: 100%;
            height: 2px;
            background: linear-gradient(90deg, transparent, #03e9f4);
            animation: btn-anim1 1s linear infinite;
        }
        
        .registration-box a span:nth-child(2) {
            top: -100%;
            right: 0;
            width: 2px;
            height: 100%;
            background: linear-gradient(180deg, transparent, #03e9f4);
            animation: btn-anim2 1s linear infinite;
            animation-delay: .25s
        }
        
        .registration-box a span:nth-child(3) {
            bottom: 0;
            right: -100%;
            width: 100%;
            height: 2px;
            background: linear-gradient(270deg, transparent, #03e9f4);
            animation: btn-anim3 1s linear infinite;
            animation-delay: .5s
        }
        
        .registration-box a span:nth-child(4) {
            bottom: -100%;
            left: 0;
            width: 2px;
            height: 100%;
            background: linear-gradient(360deg, transparent, #03e9f4);
            animation: btn-anim4 1s linear infinite;
            animation-delay: .75s
        }
        
        .login-box {
            position: absolute;
            top: 50%;
            left: 70%;
            width: 400px;
            padding: 40px;
            transform: translate(-50%, -50%);
            background: rgba(0, 0, 0, .5);
            box-sizing: border-box;
            box-shadow: 0 15px 25px rgba(0, 0, 0, .6);
            border-radius: 10px;
        }
        
        .login-box h2 {
            margin: 0 0 30px;
            padding: 0;
            color: #fff;
            text-align: center;
        }
        
        .login-box .user-box {
            position: relative;
        }
        
        .login-box .user-box input {
            width: 100%;
            padding: 10px 0;
            font-size: 16px;
            color: #fff;
            margin-bottom: 30px;
            border: none;
            border-bottom: 1px solid #fff;
            outline: none;
            background: transparent;
        }
        
        .login-box .user-box label {
            position: absolute;
            top: 0;
            left: 0;
            padding: 10px 0;
            font-size: 16px;
            color: #fff;
            pointer-events: none;
            transition: .5s;
        }
        
        .login-box .user-box input:focus~label,
        .login-box .user-box input:valid~label {
            top: -20px;
            left: 0;
            color: #03e9f4;
            font-size: 12px;
        }
        
        .login-box form a {
            position: absolute;
            display: inline-block;
            padding: 10px 20px;
            color: #03e9f4;
            font-size: 16px;
            text-decoration: none;
            text-transform: uppercase;
            overflow: hidden;
            transition: .5s;
            margin-top: 40px;
            letter-spacing: 4px;
            right: 5%;
            bottom: 4%;
        }
        
        .login-box a:hover {
            background: #03e9f4;
            color: #fff;
            border-radius: 5px;
            box-shadow: 0 0 5px #03e9f4, 0 0 25px #03e9f4, 0 0 50px #03e9f4, 0 0 100px #03e9f4;
        }
        
        .login-box a span {
            position: absolute;
            display: block;
        }
        
        .login-box a span:nth-child(1) {
            top: 0;
            left: -100%;
            width: 100%;
            height: 2px;
            background: linear-gradient(90deg, transparent, #03e9f4);
            animation: btn-anim1 1s linear infinite;
        }
        
        @keyframes btn-anim1 {
            0% {
                left: -100%;
            }
            50%,
            100% {
                left: 100%;
            }
        }
        
        .login-box a span:nth-child(2) {
            top: -100%;
            right: 0;
            width: 2px;
            height: 100%;
            background: linear-gradient(180deg, transparent, #03e9f4);
            animation: btn-anim2 1s linear infinite;
            animation-delay: .25s
        }
        
        @keyframes btn-anim2 {
            0% {
                top: -100%;
            }
            50%,
            100% {
                top: 100%;
            }
        }
        
        .login-box a span:nth-child(3) {
            bottom: 0;
            right: -100%;
            width: 100%;
            height: 2px;
            background: linear-gradient(270deg, transparent, #03e9f4);
            animation: btn-anim3 1s linear infinite;
            animation-delay: .5s
        }
        
        @keyframes btn-anim3 {
            0% {
                right: -100%;
            }
            50%,
            100% {
                right: 100%;
            }
        }
        
        .login-box a span:nth-child(4) {
            bottom: -100%;
            left: 0;
            width: 2px;
            height: 100%;
            background: linear-gradient(360deg, transparent, #03e9f4);
            animation: btn-anim4 1s linear infinite;
            animation-delay: .75s
        }
        
        @keyframes btn-anim4 {
            0% {
                bottom: -100%;
            }
            50%,
            100% {
                bottom: 100%;
            }
        }
    </style>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>

    <body>

        <div class="registration-box">
            <h2>Register</h2>
            <form name="registration">
                <div class="user-box">
                    <input type="text" name="name" required="">
                    <label>Username</label>
                </div>
                <div class="user-box">
                    <input type="text" name="" required="">
                    <label>Full Name</label></form>
            </div>

            <div class="user-box">
                <input type="password" name="" required="">
                <label>Password</label>

            </div>
            <div class="user-box">
                <input type="password" name="" required="">
                <label>Confirm Password</label>

            </div>
            <div class="user-box">
                <input type="email" name="" required="">
                <label>E-mail</label>

            </div>
            <div class="user-box">
                <input type="tel" name="" required="">
                <label>Phone number</label>

            </div>
            <div class="user-box">
                <input type="date" name="" required="">
                <label>Date of birth</label>

            </div>


            <a href="#">
                <span></span>
                <span></span>
                <span></span>
                <span></span> Submit
            </a>
</head>
</div>
<div class="login-box">
    <h2>Login</h2>
    <form name="login">
        <div class="user-box">
            <input type="text" name="name" required="">
            <label>Username</label>
        </div>
        <div class="user-box">
            <input type="password" name="password" required="">
            <label>Password</label>
        </div>
        <a href="#">
            <span></span>
            <span></span>
            <span></span>
            <span></span> Submit
        </a>
    </form>
</div>



<?php
		if (isset($_POST['name']) && isset($_POST['password'])) {
			$user = $_POST['username'];
			$pass = $_POST['password'];

			if ($user == "admin"&& $pass = "123") {
				echo "Success!";
			}
			else{
				echo "Error!";
			}
		}
		else{
			echo "please fill all fields!";
		}
		
	?>

</body>

</html>