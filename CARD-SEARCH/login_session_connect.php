<?PHP
/*session_start();*/
include'code_to_connect_to_db.php';
$email=mysqli_real_escape_string($conn,$_POST['email']);
$password=md5($_POST['password']);

$select="SELECT * FROM user_account WHERE email='$email' AND pass='$password'";

$result=mysqli_query($conn,$select);
if(mysqli_num_rows($result)>0){
$data_in_arr=mysqli_fetch_array($result);

if($data_in_arr['account']=='Admin'){
 /* $_SESSION['Police_Officer']=$data_in_arr['s_name'];*/
  header('Location:found_card_register.php');
}
else {
  header('Location:search_lost_id.php');
}

}


?>
