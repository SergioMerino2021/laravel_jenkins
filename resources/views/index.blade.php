<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="login-box"> 
        <img src="https://images.unsplash.com/photo-1635492491273-455af7728453?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=660&q=80" class="avatar" alt="Avatar Image"> 
        <h1>Login</h1> 
        <form class="form"> 
            <label for="username">Username</label> 
            <input type="text" placeholder="Enter Username"> 
            <label for="password">Password</label> 
            <input type="password" placeholder="Enter Password"> 
            <input type="submit" value="Log In">
            <br/>
            <a href="#">Registrar</a>
            
        </form> 
    </div> 
    
    <style>
    @import url('https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap');
    *{
        
        padding: 0;
        margin: 0;
        box-sizing: border-box;
    }
    body{
        font-family: 'Roboto', sans-serif;
        width: 100vw;
        height: 100vh;
        display: flex;
        justify-content: center;
        align-items: center;
        background: linear-gradient(60deg ,rgba(51,108,240,1) ,rgba(36,192,245,1) ,rgba(31,255,158,1) );
    }
    .form{ text-align: left; }
    .login-box { width: 320px; height: 420px; background: #000000; color: #ffffff; top: 50%; left: 50%; position: absolute; transform: translate(-50%, -50%); box-sizing: border-box; padding: 70px 30px; border-radius: 15px; } 
    .login-box .avatar { width: 100px; height: 100px; border-radius: 45% 55% 29% 71% / 67% 37% 63% 33%; position: absolute; top: -50px; left: calc(50% - 50px); } 
    .login-box h1 { margin: 0; padding: 0 0 20px; text-align: center; font-size: 22px; } 
    .login-box label { margin: 0; padding: 0; font-weight: bold; display: block; } 
    .login-box input { width: 100%; margin-bottom: 20px; } .login-box input[type="text"], 
    .login-box input[type="password"] { border: none; border-bottom: 1px solid #fff; background: transparent; outline: none; height: 40px; color: #fff; font-size: 16px; } 
    .login-box input[type="submit"] { border: none; outline: none; height: 40px; background: #3742fa; color: #ffffff; font-size: 18px; border-radius: 20px; } 
    .login-box input[type="submit"]:hover { cursor: pointer; background: #ffc107; color: #000000; } 
    .login-box a { text-decoration: none; font-size: 12px; line-height: 20px; color: darkgrey; } 
    .login-box a:hover { color: #fff; } </style>
</body>
</html>