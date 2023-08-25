<?php 
  include_once('inc/conn.php');
?>
<?php
  if(isset($_POST['submit'])){

    $fullname = "";
    $email = "";
    $phone = "";
    $password = "";
    $msg = "";

    $fullname = input_varify($_POST['fullname']);
    $email = input_varify($_POST['email']);
    $phone = input_varify($_POST['phone']);
    $password = input_varify($_POST['password']);

    $query1 = "SELECT * FROM user WHERE phone = '{$phone}' AND email = '{$email}'";

    $showResult = mysqli_query($conn, $query1);

    if($showResult){

      if(mysqli_num_rows($showResult) == 1){
        $msg = "<div class='alert alert-danger alert-dismissible fade show' role='alert'>
      <strong>Sorry!</strong> This user already have in this system.Please try another email account.
      <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
        <span aria-hidden='true'>&times;</span>
      </button>
    </div>";
      }
      else{

        $query = "INSERT INTO user(fullname,email,phone,pwd) VALUES(
          '{$fullname}','{$email}','{$phone}','{$password}'
        )";
    
        $result = mysqli_query($conn, $query);
    
        if($result){ 

          $msg = "<div class='alert alert-primary alert-dismissible fade show' role='alert'>
          <strong>User Registration Success!</strong>Welcome to the BlogApp.
          <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
            <span aria-hidden='true'>&times;</span>
          </button>
        </div>";
        }
    
        else{
          echo mysqli_error($conn);
        }

      }
    }


  }

  function input_varify($data){
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);

    return $data;

  }

?>