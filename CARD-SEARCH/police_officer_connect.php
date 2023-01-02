<?php
if(isset($_POST['submit']));
$conn=mysqli_connect('localhost','root','','police_lost_items');
$force_number=$_POST['force_number'];
$s_name=$_POST['s_name'];
$o_names=$_POST['o_names'];
$contact=$_POST['contact'];
$query= "INSERT INTO police_officer (force_number,s_name,o_names,contact)VALUES('$force_number','$s_name','$o_names','$contact')";
$k=mysqli_query($conn,$query);
if($k){
    echo'record saved';
}
   else {
    echo'You have an error iin your code';
  }


?>