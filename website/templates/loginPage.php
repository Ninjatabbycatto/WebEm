<!DOCTYPE html>
<html lang="en">
  <head>
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>WebEM User</title>
    <link rel="stylesheet" href="css/login.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">

  </head>
  <body class = "activityFeed roboto-regular">
	<script src="index.js"></script>
    <div class="webEm-logo">
        <h1>WebEm</h1>
        <h3 class="accType roboto-light-italic">User</h3>
        <svg style="margin-top: 3.8vw; margin-left:0.25vw;" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" strokeWidth={1.5} stroke="currentColor" width="30" height="30">
          <path strokeLinecap="round" strokeLinejoin="round" d="m19.5 8.25-7.5 7.5-7.5-7.5" />
        </svg>
    </div>
    <div class="center">
      <div class="loginBox">
        <p id="Login" class="roboto-medium">Login</p>
        <form class="roboto-light" method="POST">
          <div class="formElement">
            <label for="uName">Username</label><br>
            <input type="text" id="uName" name="uName"><br>
          </div>
          <div class="formElement">
            <label for="pass">Password</label><br>
            <input type="password" id="pass" name="pass">
          </div>
          <div class="formElement center">
            <input type="submit" value="log in">
          </div>
        </form> 
      </div>
    </div>
  </body>
</html>