<?php
include_once('inc/conn.php');

if(isset($_POST['fullname'], $_POST['email'], $_POST['phone'], $_POST['regpassword'])) {

    $fullname = input_verify($_POST['fullname']);
    $email = input_verify($_POST['email']);
    $phone = input_verify($_POST['phone']);
    $password = input_verify($_POST['regpassword']);

    $query1 = "SELECT * FROM user WHERE phone = '{$phone}' OR email = '{$email}'";
    $showResult = mysqli_query($conn, $query1);

    if($showResult) {
        if(mysqli_num_rows($showResult) > 0) {
            echo "User already exists";
        } else {
            $hashedPassword = hashPassword($password); // Hash the password

            $query = "INSERT INTO user (fullname, email, phone, pwd) VALUES (
                '{$fullname}', '{$email}', '{$phone}', '{$hashedPassword}'
            )";
            
            $result = mysqli_query($conn, $query);
            
            if($result) {
                echo "Success";
            } else {
                echo "Error";
            }
        }
    }
}else{
  echo "not waorking";
}

function input_verify($data) {
    global $conn;
    $data = trim($data);
    $data = mysqli_real_escape_string($conn, $data);
    $data = htmlspecialchars($data);
    return $data;
}

function hashPassword($password) {
    // Use a proper password hashing library like password_hash()
    return md5($password); // This is a simple example; use a better hashing method
}
?>
