<?php session_start(); /* Starts the session */
    /* Check Login form submitted */if(isset($_POST['Submit'])){
    /* Define username and associated password array */
    $logins = array('jai' => 'jai01','abi' => 'abi01','trish' => 'trish01');

    /* Check and assign submitted Username and Password to new variable */
    $Username = isset($_POST['Username']) ? $_POST['Username'] : '';
    $Password = isset($_POST['Password']) ? $_POST['Password'] : '';

    /* Check Username and Password existence in defined array */
    if (isset($logins[$Username]) && $logins[$Username] == $Password){

    /* Success: Set session variables and redirect to Protected page  */
    $_SESSION['Username']=$_POST['Username'];
    $_SESSION['UserData']['Username']=$logins[$Username];
    header("location: gift");
    exit;
    } else {
    /*Unsuccessful attempt: Set error message */
    $msg="<span style='color:red'>Invalid Login Details</span>";
    }
    }
    ?>
    
<form action="" method="post" name="Login_Form" id="form">
        <table width="400" border="0" align="center" cellpadding="5" cellspacing="1" class="Table">
          <?php if(isset($msg)){?>
          <tr>
            <td colspan="2" align="center" valign="top"><?php echo $msg;?></td>
          </tr>
          <?php } ?>
          <tr>
              <div class="wrapper">
                  <div class="input-data">
                      <input name="Username" type="text" class="Input" required>
                      <div class="underline"></div>
                      <label>Username</label>
                  </div>
              </div>
          </tr>
          <tr>
              <div class="wrapper">
                  <div class="input-data">
                      <input name="Password" type="password" class="Input" required>
                      <div class="underline"></div>
                      <label>Password</label>
                  </div>
              </div>
          </tr>
          <tr>
            <td class="login">
              <input  class="input-data submit" name="Submit" type="submit" value="Login" class="Button3">
            </td>
          </tr>
        </table>
      </form>

<?php