<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dash Board</title>
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
  height: 600px;
  border-radius:15px;
 }
 input{
  padding-top: 8px;
  padding-bottom: 10px;
  margin-left: 10px;
  margin-top: 170px;
  border-radius: 10px;
  border-color:maroon;
  width:70%;
 }
 .sub{
  padding-top: 8px;
  padding-bottom: 10px;
  margin-left: 10px;
  margin-top: 5px;
  border-radius: 10px;
  border-color:maroon;
  width:70%;
 }
 .logclass{
margin-bottom:40px;
 }

  </style>
</head>

<div class="container">
  <center><h3>Uganda Police welcomes you to this Portal<br>Where you can search for your lost Nation Identity Card</h3></center>
  <div>
  <form action="search_connect.php"Method="POST">
    <input type="text" name="searchtxt" id="searchtxt"placeholder="search for your ID"required>
    <input type="submit"name="search_4_id"class="sub"value="SEARCH ID">

  </form>
  </div>
  <br><br><br><br>
  
  <a href="login.php" class="logclass">Login In Here</a><br><br><br>
  <a href="create_account.php" class="create">Create Account to be able to register a recieved Card</a><br><br>

</idv>
  
</body>
</html>