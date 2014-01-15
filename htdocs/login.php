<?php session_start();?>

<?php
 header("Location:profile.php");
// verbatum // -
//Select * from users where email = $post email AND pass = $post pass;

include 'dAl.php';
$email = $_POST['email'];
$password = $_POST['password'];

$sql = (" SELECT * FROM users WHERE email = '".$email."' and password = '".$password."' ;"); 
// sql query
$res = DataAccessProtocol::runQueryWithRes($sql);
 
while($row = mysqli_fetch_array($res)) // fetch results as array and print data
{
    $id = $row['id'];
    $_SESSION['id_num'] = $id;
    //echo "Session : ".$_SESSION['id_num'];
    echo "<meta http-equiv='refresh' content='0;url=http://localhost:8888/profile.php'>";
}     

?>
