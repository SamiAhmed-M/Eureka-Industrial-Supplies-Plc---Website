        <!-- Right column -->
<?php
ob_start();
if(!isset($_SESSION))
{
//session_start();
}
?>
<style type="text/css">
<!--
.style1 {font-size: 18px}
-->
</style>


<div id="col" class="noprint">
            <div id="col-in">

                <!-- About Me -->
                <h3><div align="center">Administrators Page</div></h3>

                <div id="about-me">
                    <p class="style1">

			<h3><div align="center">
                      <?php 
			echo $_SESSION['Name'];
			ob_flush();
			?>
			</div></h3>
                    </p>
              </div> 
                <!-- /about-me -->

                <hr class="noscreen" />

                <!-- Category -->
                <h3><div align="center"><u>Operation Telephones</u></div></h3>
              <br/>
                <hr class="noscreen"/>
                <!-- Category -->
                <h3><div align="center"><select name="cmbContact" id="cmbContact"><br>
                        <option>+251114404255</option>
		    </select></div></h3>
                 <br/>

      <hr class="noscreen" />

                <!-- Archive -->
                <h3>&nbsp;&nbsp;</h3>

                <br/>
	<hr class="noscreen" />

                <!-- Links -->
                <h3>&nbsp;&nbsp;</h3><br>


            <br/>

<hr class="noscreen" />
          </div> <!-- /col-in -->
</div> 
<!-- /col -->