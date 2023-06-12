<?php
session_start();
include 'connect.php';
?>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Font Awesome Icons  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"
        integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA=="
        crossorigin="anonymous" />

    <!-- Google Fonts  -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">

     <!-- PHP CONNECTION FILE -->
	 <?php include 'connect.php' ?>

    <!-- Font Awesome Icons  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"
        integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA=="
        crossorigin="anonymous" />

    <!-- Google Fonts  -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">

     <!-- PHP CONNECTION FILE -->
	 <?php include 'connect.php' ?>
     <!-- css style-->
     <style>
        /* Import Google font - Poppins */
@import url("https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap");
* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: "Poppins", sans-serif;
}
a {
  text-decoration: none;
}
.header {
  position: fixed;
  height: 80px;
  width: 100%;
  z-index: 100;
  padding: 0 20px;
}
.nav {
  max-width: 1100px;
  width: 100%;
  margin: 0 auto;
}
.nav,
.nav_item {
  display: flex;
  height: 100%;
  align-items: center;
  justify-content: space-between;
}
.nav_logo,
.nav_link,
.button {
  color: #fff;
}
.nav_logo {
  font-size: 25px;
}
.nav_item {
  column-gap: 25px;
}
.nav_link:hover {
  color: #d9d9d9;
}
.button {
  padding: 6px 24px;
  border: 2px solid #fff;
  background: transparent;
  border-radius: 6px;
  cursor: pointer;
}
.button:active {
  transform: scale(0.98);
}

/* Home */
.home {
  position: relative;
  height: 100vh;
  width: 100%;
  background-image: url("bg.jpg");
  background-size: cover;
  background-position: center;
}
.home::before {
  content: "";
  position: absolute;
  height: 100%;
  width: 100%;
  background-color: rgba(0, 0, 0, 0.6);
  z-index: 100;
  opacity: 0;
  pointer-events: none;
  transition: all 0.5s ease-out;
}
.home.show::before {
  opacity: 1;
  pointer-events: auto;
}
/* From */
.form_container {
  position: fixed;
  max-width: 320px;
  width: 100%;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%) scale(1.2);
  z-index: 101;
  background: #fff;
  padding: 25px;
  border-radius: 12px;
  box-shadow: rgba(0, 0, 0, 0.1);
  opacity: 0;
  pointer-events: none;
  transition: all 0.4s ease-out;
}
.home.show .form_container {
  opacity: 1;
  pointer-events: auto;
  transform: translate(-50%, -50%) scale(1);
}
.signup_form {
  display: none;
}
.form_container.active .signup_form {
  display: block;
}
.form_container.active .login_form {
  display: none;
}
.form_close {
  position: absolute;
  top: 10px;
  right: 20px;
  color: #0b0217;
  font-size: 22px;
  opacity: 0.7;
  cursor: pointer;
}
.form_container h2 {
  font-size: 22px;
  color: #0b0217;
  text-align: center;
}
.input_box {
  position: relative;
  margin-top: 30px;
  width: 100%;
  height: 40px;
}
.input_box input {
  height: 100%;
  width: 100%;
  border: none;
  outline: none;
  padding: 0 30px;
  color: #333;
  transition: all 0.2s ease;
  border-bottom: 1.5px solid #aaaaaa;
}
.input_box input:focus {
  border-color: #7d2ae8;
}
.input_box i {
  position: absolute;
  top: 50%;
  transform: translateY(-50%);
  font-size: 20px;
  color: #707070;
}
.input_box i.email,
.input_box i.password {
  left: 0;
}
.input_box input:focus ~ i.email,
.input_box input:focus ~ i.password {
  color: #7d2ae8;
}
.input_box i.pw_hide {
  right: 0;
  font-size: 18px;
  cursor: pointer;
}
.option_field {
  margin-top: 14px;
  display: flex;
  align-items: center;
  justify-content: space-between;
}
.form_container a {
  color: #7d2ae8;
  font-size: 12px;
}
.form_container a:hover {
  text-decoration: underline;
}
.checkbox {
  display: flex;
  column-gap: 8px;
  white-space: nowrap;
}
.checkbox input {
  accent-color: #7d2ae8;
}
.checkbox label {
  font-size: 12px;
  cursor: pointer;
  user-select: none;
  color: #0b0217;
}
.form_container .button {
  background: #7d2ae8;
  margin-top: 30px;
  width: 100%;
  padding: 10px 0;
  border-radius: 10px;
}
.login_signup {
  font-size: 12px;
  text-align: center;
  margin-top: 15px;
}
</style>
     
</head>
<body>
     <?php
     if(isset($_POST['submit'])) {
        $email = $_POST['email'];
        $password = $_POST['password'];

        $email_search="select * from signup where email = '$email'";
        $query = mysqli_query($conn,$email_search);
        $email_count = mysqli_num_rows($query);
        if($email_count){
            $pass = mysqli_fetch_assoc($query);
            if (md5($password) === $pass["password"]) {
                ?>
                <script>
                    alert("Successful")
                    </script>
                    <?php
            }
            else{
                ?>
                <script>
                    alert("invalid password")
                    </script>
                    <?php
            }
            }
            else{
                ?>
                <script>
                    alert("Invalid email")
                    </script>
                    <?php
            }
        }
     ?>
     <!DOCTYPE html>
     <html>
        <head>
            <tittle>Login</title>
    </head>
    <body>
        <div>
            <h1>Login</h1>
            <Form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
            <label for="email">email:</label>
            <input type="text" name="email" required>
            <br></br>
            <label for="password">password:</label>
            <input type="password" name="password" required>
            <br><br>
            <input type="submit" value="login" name="submit">
            <div>
                <a href = "change.php"> Change Password </a>
    </div>
    <div>
        <a href = "forgot.php"> Forgot password </a>
    </div>
    </Form>
    </body>
    </html>
    </div>
    </html>
     