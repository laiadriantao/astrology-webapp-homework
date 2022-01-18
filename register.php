<?php
  session_start();
  include ("dbconfig.php");
  include ("functions.php");

  if($_SERVER['REQUEST_METHOD']=="POST"){
    //something was posted

    //variables defining a user
    $email= $_POST['email'];
    $password = $_POST['password'];
    $birthdate = $_POST['birthdate'];
    $lastname = $_POST['lastname'];
    $firstname = $_POST['firstname'];

    if(!empty($email) && !empty($password) && !empty($birthdate) && !empty($firstname) && !empty($lastname) && !is_numeric($email) && !is_numeric($firstname) && !is_numeric($lastname)){
      //save to db

      $query = "insert into users (email,password,lastname,firstname,birthdate) values ('$email','$password','$lastname','$firstname','$birthdate');";

      mysqli_query($con, $query);

      header("Location: login.php");
      die;

    } else{
      echo "Please enter valid information";
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

  <!-- Form for register-->
  <center>
    <div>
      <table>

      <form action="" method="post">
        <tr>
  				<td
  					align = "CENTER"
  					valign = "BOTTOM">
<!-- email -->
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
<!-- password -->
        <tr>
          <td
            align = "CENTER"
            valign = "BOTTOM">
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
<!-- FIRST NAME -->
        <tr>
          <td
            align = "CENTER"
            valign = "BOTTOM">
            <tr>
              <td>
              <label for = "firstname">
                <font color = "#FFFFFF">
                  First name:
                </font>
              </label>
              </td>
            </tr>

            <tr>
              <td>
              <input type = "text" id = "firstname" name = "firstname">
              </td>
            </tr>
          </td>
        </tr>
<!-- LAST NAME -->
        <tr>
          <td
            align = "CENTER"
            valign = "BOTTOM">
            <tr>
              <td>
              <label for = "lastname">
                <font color = "#FFFFFF">
                  Last name:
                </font>
              </label>
              </td>
            </tr>

            <tr>
              <td>
              <input type = "text" id = "lastname" name = "lastname">
              </td>
            </tr>
          </td>
        </tr>

<!-- birthdate -->
        <tr>
          <td
            align = "CENTER"
            valign = "BOTTOM">
            <tr>
              <td>
              <label for = "birthdate">
                <font color = "#FFFFFF">
                  Birthdate:
                </font>
              </label>
              </td>
            </tr>

            <tr>
              <td>
              <input type = "date" id = "birthdate" name = "birthdate">
              </td>
            </tr>
          </td>
        </tr>

<!-- register -->
        <tr>
          <td
            align = "CENTER"
            valign = "BOTTOM">
            <button type="submit">Register</button>

            <!-- end of form-->
            </form>

            <button>
            <a href = "login.php">click to login</a>
            </button>

          </td>
        </tr>
      </form>

    </table>
  </div>
</center>

</body>

</html>
