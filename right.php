        <!-- Right column -->
<script src="SpryAssets/SpryValidationTextField.js" type="text/javascript"></script>
<link href="SpryAssets/SpryValidationTextField.css" rel="stylesheet" type="text/css">
<div id="col" class="noprint">
            <div id="col-in">

                <h3 ><div align="center">LOGIN</div></h3>
<div class="login">
                <form name="form1" method="post" action="login.php">
                  <table width="100%" border="0">
                    <tr>
                      <td>
			<div align="center">
			<strong>User Name</strong>
			</div>
		      </td>
                    </tr>
                    <tr>
        <td><span id="sprytextfield1">
                        <label>
			<div align="center">
                        <input type="text" name="txtUser" id="txtUser">
			</div>
                        </label>
                      <span class="textfieldRequiredMsg">A value is required!</span></span>
          <label></label></td>
                    </tr>
                    <tr>
                      <td>
		      <div align="center">
			<strong>Password</strong>
                      </div>
		      </td>
                    </tr>
                    <tr>
                <td><span id="sprytextfield2">
                        <label>
			<div align="center">
                        <input type="password" name="txtPass" id="txtPass">
			</div>
                        </label>
                      <span class="textfieldRequiredMsg">A value is required!</span></span></td>
                    </tr>
                    <tr>
                      <td>
		      <div align="center">
		      <strong>User Type</strong>
                      </div>
		      </td>
                    </tr>
                    <tr>
                      <td><label>
			<div align="center">
                        <select name="cmbUser" id="cmbUser">
                          <option value="Administrator" selected="selected">Administrator</option>
		          <option value="Manager">Manager</option>
                          <option value="User">User</option>
			</select>
			</div>
                      </label></td>
                    </tr>
                    <tr>
                      <td><label>
                        <div align="center">
                          <input type="submit" name="button" id="button" value="Login">
                          </div>
                      </label></td>
                    </tr>
                    <tr>
                      <td><div align="center"><a href="Forget.php"><strong>Forgot Password? </strong></a></div></td>
                    </tr>
                    <tr>
                      <td><div align="center">YOU DO NOT HAVE AN ACCOUNT? CLICK ON CREATE ACCOUNT BELOW.</div></td>
                    </tr>
                    <tr>
                      <td><div align="center"><a href="User/signup.php"><strong>Create Account</strong></a></div></td>
                    </tr>
                  </table>
      </form>
              </div>
                <br/>

      <hr class="noscreen" />

                <!-- Archive -->
              

            <hr class="noscreen" />

                <!-- Links -->
              
                <hr class="noscreen" />
          </div> <!-- /col-in -->
</div> <!-- /col -->
        <script type="text/javascript">
<!--
var sprytextfield1 = new Spry.Widget.ValidationTextField("sprytextfield1");
var sprytextfield2 = new Spry.Widget.ValidationTextField("sprytextfield2");
//-->
</script>