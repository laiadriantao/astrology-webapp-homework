<?php

session_start();
include ("dbconfig.php");
include ("functions.php");

if($_SERVER['REQUEST_METHOD']=="POST"){
  //something was posted
  $email= $_POST['email'];
  $password = $_POST['password'];

  if(!empty($email) && !empty($password) && !is_numeric($email)){

    //read from db
    $query = "select * from users where email = '$email' limit 1;";

    $result = mysqli_query($con, $query);

    if($result){
      if($result && mysqli_num_rows($result) > 0){
        $user_data = mysqli_fetch_assoc($result);

        if($user_data['password'] === $password){
          $_SESSION['email'] = $user_data['email'];

          //redir to index
          header("Location: personalpage.php");
          die;
        }
      }
    }else{
      echo "Wrong username or password";
    }
  }
}

?>
<html>

<head>

</head>

<body
    bgcolor = "#0e0e0e">

    <!-- LOGO BANNER -->
  <center>
  <div>
  <table
    width = "500"
    cellpadding = "0"
    cellspacing = "0"
    border = "0">
    <tr>

      <td>
        <a href = "homepage.php">
        <img
        src = https://magic-spells-and-potions.com/images/magic-images/pentacles//purple-pentagram-circle.gif>
        </a>
      </td>

      <td
        align = "TOP"
        valign = "CENTER">
        <a href = "homepage.php">
        <img
        src = "/astrosite/astrobanner.png"
        width = "400">
        </a>
      </td>

    </tr>

  </table>
  <div>
  </center>

  <!-- Form for login-->
  <center>
    <div>
      <table>

      <form action="" method="post">
        <tr>
  				<td
  					align = "CENTER"
  					valign = "BOTTOM">
<!-- email input-->
            <tr>
              <td>
              <label for = "email">
                <font color = "#FFFFFF">
                  Email:
                </font>
              </label>
              </td>
            </tr>

            <tr>
              <td>
              <input type = "email" id = "email" name = "email">
              </td>
            </tr>

  				</td>
  			</tr>

        <tr>
          <td
            align = "CENTER"
            valign = "BOTTOM">
<!-- password input-->
            <tr>
              <td>
              <label for = "password">
                <font color = "#FFFFFF">
                  Password:
                </font>
              </label>
              </td>
            </tr>

            <tr>
              <td>
              <input type = "password" id = "password" name = "password">
              </td>
            </tr>
          </td>
        </tr>

<!-- login -->
        <tr>
          <td
            align = "CENTER"
            valign = "BOTTOM">
            <button type="submit" value="Login">Login</button>
            <!-- end of form-->
            </form>
            <button>
            <a href = "register.php">click to Register</a>
            </button>
          </td>
        </tr>

    </table>
  </div>
</center>

</body>

</html>
