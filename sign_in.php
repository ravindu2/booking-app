<?php
 session_start();

  include_once('inc/conn.php');

  if(isset($_POST['submit'])){

    $email = "";
    $password = "";
    $providedPassword = "";
    $msg = "";

    $email = input_varify($_POST['email']);
    $providedPassword = input_varify($_POST['password']);
    $password = hashPassword($providedPassword);


    $query1 = "SELECT * FROM user WHERE pwd = '{$password}' AND email = '{$email}' LIMIT 1";

    $showResult = mysqli_query($conn, $query1);

    if($showResult){

      if(mysqli_num_rows($showResult) == 1){

        $user = mysqli_fetch_assoc($showResult);
        $_SESSION['User_Fname'] = $user['fullname'];
        $_SESSION['User_email'] = $user['email'];

        
        header("Location: index.php");
       
      }
      else{

        header("Location: index.php");

      }
    }


  }

  function input_varify($data){
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);

    return $data;

  }

  function hashPassword($password) {
    // Use a proper password hashing library like password_hash()
    return md5($password); // This is a simple example; use a better hashing method
}
?>

?>