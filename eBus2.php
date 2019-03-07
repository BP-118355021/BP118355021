<?php
session_start();
$fullNameValue = "";
$totalValue = "";
/*
 * Creat a session variable for th e mobile number
 */
$totalValue = $_POST['txtTotal'];
$_SESSION['txtName'] = $fullNameValue;
$_SESSION['txtTotal'] = $totalValue;
/**
 * Allocate the mobile number session variable to a text box.
 */

?>

<!DOCTYPE html>
<html>
    <head>
        <title>eBusiness</title>
        <style>
/* Style all input fields */
input {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 16px;
}

/* Style the submit button */
input[type=submit] {
  background-color: #4CAF50;
  color: white;
}

/* Style the container for inputs */
.container {
  background-color: #f1f1f1;
  padding: 20px;
}

/* The message box is shown when the user clicks on the password field */
#message {
  display:none;
  background: #f1f1f1;
  color: #000;
  position: relative;
  padding: 20px;
  margin-top: 10px;
}

#message p {
  padding: 10px 35px;
  font-size: 18px;
}

/* Add a green text color and a checkmark when the requirements are right */
.valid {
  color: green;
}

.valid:before {
  position: relative;
  left: -35px;
  content: "✔";
}

/* Add a red text color and an "x" when the requirements are wrong */
.invalid {
  color: red;
}

.invalid:before {
  position: relative;
  left: -35px;
  content: "✖";
}
</style>
    </head>
    <body>
        <div class="form">
            
            <form name="Details" method="post" action="eBus3.php">
                <center>
                    <table cellspacing="10">
                        <tr>
                            <td><b></b></td>
                            <td><b>Enter in your details below</b></td>
                        </tr>
                        <tr>
                            <td>Name</td>
                            <td><input type="text" id="txtName" name="txtName" value="" /></td>
                        </tr>
                        <tr>
                            <td>Phone Number</td>
                            <td><input type="text" id="txtNum" name="txtNum" value=""
                  pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}"
                  required>
                                <span class="note">Format: 123-456-7890</span>
                  </td>
                        </tr>
                        <tr>
                            <td>Password</td>
                            <td><input type="password" id="psw" name="psw" pattern="[0-9]{4}"
                                       title =" Must contain four digits."required></td>
                            
 
                        </tr>
                        <tr>
                           
                            <td><input type="hidden" id="txtTotal" name="txtTotal" value="<?php echo $totalValue;?>" /></td>
                        </tr>
                    </table>
                </center>
                <center>
                <input type="submit" name="btnContinue" id="btnContinue" onclick="" value="Continue" />
                </center>
        </div>
            </form>
      
    </body>
</html>