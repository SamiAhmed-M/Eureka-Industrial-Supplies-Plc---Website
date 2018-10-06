        <!-- Right column -->
<?php
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
                <h3><div align="center">Please send feedback.</div></h3>

                <div id="about-me">
		<div align="center">
                    <p class="style1">
                      <?php 
			echo $_SESSION['Name'];
		    ?>
                    </p>
		</div>
              </div> 
                <!-- /about-me -->

                <hr class="noscreen" />

                <!-- Category -->
                <h3><div align="center"><u>Operation Telephones</u><div></h3>

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
                <h3>&nbsp;</h3>
<br/>

<hr class="noscreen" />
          </div> <!-- /col-in -->
</div> 
<!-- /col -->