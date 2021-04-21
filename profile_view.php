

<?php include('header.php'); ?>
<?php //include('server.php'); ?>

<?php 

    session_start();

    if (!isset($_SESSION['username'])) {
        //$_SESSION['msg'] = "You must log in first";
        header('location: index.php');
    }

    if (isset($_GET['logout'])) {
        session_destroy();
        unset($_SESSION['username']);
        header("location: logout.php");
    }

        $db = mysqli_connect('localhost', 'root', '', 'sample');

?>


        <div class="col-md-6 cs-main-links">
          
          <a href="#"  class="cs-menu-active">Profile<span>|</span></a>
          <a href="#">Services<span>|</span></a>
          <a href="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>?logout='1'">Logout</a>

        </div> <!-- ./ col-md-6 -->

        </div> <!-- ./ row -->

      </div> <!-- ./ container -->

    </div> <!-- ./ cs-headers  -->


<!-- ****************** CS-PROFILE-SECTION ******************* --->


<section class="cs-profle-sec cs-padding-bottom-30">


<div class="container">
	
	<div class="row">
		
		<div class="col-md-8">
			
			<div class="col-md-7 cs-reg-area">
              
             	<h3>Profile <b>View</b></h3>

             	<hr class="cs-hr" />

            	<div class="cs-clearfix"></div>

             </div> <!-- ./ cs-reg-area -->

             <div class="cs-p-list">

             		<div class="row">
             		<div class="col-md-3">
             			<h5>Name :</h5>
             			<h5>Username:</h5>
             			<h5>Aadhar Id :</h5>
             			<h5>Email :</h5>
             			<h5>Address: </h5>
             			<h5>City: </h5>
             			<h5>PinCode: </h5>
                        <h5>House Tax :</h5>
                        <h5>Water Tax :</h5>
                        <h5>Wealth Tax :</h5>
                        <h5>Library  Tax :</h5>
                        <h5>Phone Tax :</h5>
                        <h5>Electricity Tax :</h5>

             		</div>
             			
             		<!--<div class="col-md-9 csss">
             			<h5><b><?php echo $username ?></b></h5>
             			<span class="cs-light-text cs-p-uname">@nbkrishna</span>
             			<h5 class="cs-p-aad"><b>1234 5678 7894</b></h5>
             			<h5>natsimhamnbk@nbk.com</h5>
             			<h5>56-2, 1st Floor, MVP Colony, Viskhpatanam</h5>
             			<h5>Visakhpatnam</h5>
             			<h5>530017</h5>
             		</div> -->

                    <div class="col-md-9 csss">
                        <?php
                            $uname = $_SESSION['username'];
                            
                            
                            $sql = "SELECT * FROM register where username='$uname'";
                            

                            if($result = mysqli_query($db, $sql)){
                                if(mysqli_num_rows($result) > 0){
                                    while($row = mysqli_fetch_array($result)){
                                            $aaid = $row['aid'];
                                            echo "<h5><b>" . $row['name'] . "</b></h5>";
                                            echo "<span class='cs-light-text cs-p-uname'> @" . $row['username'] . "</span>";
                                            echo "<h5 class='cs-p-aad'><b>" . $row['aid'] . "</b></h5>";

                                            echo "<h5>" . $row['email'] . "</h5>";
                                            echo "<h5>" . $row['adr'] . "</h5>";
                                            echo "<h5>" . $row['city'] . "</h5>";
                                            echo "<h5>" . $row['zip'] . "</h5>";
                                    }
                                    // Free result set
                                    mysqli_free_result($result);
                                }
                            }


                            $sql2 = "SELECT * FROM bills where aid='$aaid'";

                            if($result2 = mysqli_query($db, $sql2)){
                                if(mysqli_num_rows($result2) > 0){
                                    while($row2 = mysqli_fetch_array($result2)){
                                            
                                            echo "<h5> &#8377; " . $row2['house'] . "</h5>";
                                            echo "<h5> &#8377; " . $row2['water'] . "</h5>";
                                            echo "<h5> &#8377; " . $row2['wealth'] . "</h5>";
                                            echo "<h5> &#8377; " . $row2['library'] . "</h5>";
                                            echo "<h5> &#8377; " . $row2['phone'] . "</h5>";
                                            echo "<h5> &#8377; " . $row2['elec'] . "</h5>";
                                    }
                                    // Free result set
                                    mysqli_free_result($result2);
                                }else{
                                    echo " <h5>Not Associated </h5>";
                                    echo " <h5>Not Associated </h5>";
                                    echo " <h5>Not Associated </h5>";
                                    echo " <h5>Not Associated </h5>";
                                    echo " <h5>Not Associated </h5>";
                                    echo " <h5>Not Associated </h5>";
                                   
                                    
                                }
                            }

                             $_SESSION['aid'] = $aaid;

                            ?>



                    </div>
             		
             		


             		</div>


             </div> <!-- ./ cs-p-list -->

		</div> <!-- ./ col-md-8 -->

		<div class="col-md-4 cs-sidebar">
			<div class="col-md-7">
              
             	<h5>My <b>Services</b></h5>



            	<div class="cs-clearfix"></div>

             </div> <!-- ./ cs-sidebar -->

             <hr />

             <?php include('sidebar.php'); ?>

		</div>

		
	</div> <!-- ./ row  -->

</div> <!-- ./ container -->


   <div class="cs-padding-bottom-30"></div>

	


</section> <!-- ./ cs-profle-sec -->




<!-- ****************** ./ CS-PROFILE-SECTION ******************* --->


<?php  include('footer.php'); ?>