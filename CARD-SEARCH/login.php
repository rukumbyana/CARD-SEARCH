

<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <style>
    body{
  background-color: rgb(255, 255, 128);
  font-family: Verdana, Geneva, Tahoma, sans-serif;
  font-size: medium;
  color:black;
  display: flex;
}
.container{
  background-color:aliceblue;
  margin-left: 400px;
  margin-top: 50px;
  margin-bottom: 50px;
  color:brown;
  width:600px;
  border-radius: 15px;
 }
 label{
  color:black;
 }
 input{
  padding-top: 8px;
  padding-bottom: 10px;
  margin-left: 10px;
  border-radius: 10px;
  border-color:maroon;
  width:70%;
 }
 .sub{
  width: 20%;
  margin-top: 5%;
  margin-left: 40%;
 }
.mail{
  margin-left:8%;
  margin-top:10%;
}

  </style>
</head>
<body>
  <div class="container">
  <form action="login_session_connect.php"method="POST">
    <label for="email">E Mail*</label>
    <input type="mail" name="email"class="mail" id="email"placeholder="E Mail"required><br><br>
    <label for="Password">Password*:</label>
    <input type="password"name="password"id="password"placeholder="Enter Password" required><br><br>
    <input type="submit"name="submit"class="sub"id="submit"value="Login"> <p>If you dont have an account </p><br>
    <a href="create_account.php">Register</a>
  </form>
  </div>
</body>
</html>