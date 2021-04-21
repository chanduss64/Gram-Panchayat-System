<?php

	$db = mysqli_connect('localhost', 'root', '', 'sample');
	if (isset($_POST['push'])) {
		$username = mysqli_real_escape_string($db, $_POST['username']);
		$pass = mysqli_real_escape_string($db, $_POST['pass_1']);
		$aid = mysqli_real_escape_string($db, $_POST['aid']);
		$email_1 = mysqli_real_escape_string($db, $_POST['email_1']);
		$adr_1 = mysqli_real_escape_string($db, $_POST['adr_1']);
		$state = mysqli_real_escape_string($db, $_POST['state']);
		$city = mysqli_real_escape_string($db, $_POST['city']);
		$zip = mysqli_real_escape_string($db, $_POST['zipcode']);

		//$query = "INSERT INTO test (username,pass,aid,email,adr_1,state,city,zip) VALUES('username', 'pass', 'aid', 'email_1','adr_1','state','city','zip')";
		

		$query = "INSERT INTO test (username,pass,aid,email,adr_1,state,city,zip) VALUES('username', 'pass', '4544', 'email_1','adr_1','state','city','45345')";

			mysqli_query($db, $query);
			
			/*$query = "INSERT INTO register (username,aid,email,pass,adr,city,state,zip) VALUES('username','aid','email_1','password','adr_1', 'city', 'state', 'zipcode')";

			mysqli_query($db, $query);*/

	}


?>	


<form action="abc.php" method="post">
	<!--
	<label>Name:</label> <input type="text" name="username" required="">
	<label>Pass:</label> <input type="password" name="pass" required="">
    <button type="submit" name="push">Register Now</button> -->

    <div class="form-row">

                  <div class="form-group col-md-12">
                    <label>Username</label>
                    <input type="text" class="form-control" placeholder="Enter Username" name="username">
                  </div> <!-- ./ form-group -->

                  <div class="form-group  col-md-12">
                    <label for="cs-adhaar">Aadhaar ID</label>
                    <input type="text" class="form-control" placeholder="Enter Username" name="aid">
                   
                  </div> <!-- ./ form-group -->

                  <div class="form-group col-md-6">
                    <label for="cs-email">Email</label>
                    <input type="email" class="form-control" placeholder="Enter Your Email " name="email_1" >
                  </div> <!-- ./ form-group -->

                  <div class="form-group col-md-6">
                    <label for="cs-cnf-email">Confirm Email</label>
                    <input type="email" class="form-control" placeholder="Confirm Your Email " name="email_2" >

                  </div> <!-- ./ form-group -->

                  
                  <div class="form-group col-md-6">
                    <label for="inputPassword4">Password</label>
                    <input type="password" class="form-control" placeholder="Password" name="pass_1" >
                  </div> <!-- ./ form-group -->

                   <div class="form-group col-md-6">
                    <label for="inputPassword4">Confirm Password</label>
                    <input type="password" class="form-control" placeholder="Password"  name="pass_2" >
                  </div> <!-- ./ form-group -->

                </div> <!-- ./ form-row -->

                <div class="form-group">
                  <label for="cs-add">Address</label>
                    <input type="text" class="form-control" placeholder="Enter Your Email " name="adr_1" >
                  
                </div> <!-- ./ form-group -->

                <div class="form-group">
                  <label for="inputAddress2">Address 2</label>
                  <input type="text" class="form-control" name="adr_2" placeholder="Apartment, studio, or floor" >
                </div> <!-- ./ form-group -->

                <div class="form-row">

                  <div class="form-group col-md-6">
                    <label>City</label>
                    <input type="text" class="form-control" name="city" >
                  </div> <!-- ./ form-group -->

                  <div class="form-group col-md-4">
                    <label>State</label>
                    <select class="form-control" name="state" >
                      <option selected>Select...</option>
                      <option>Andhra Pradesh</option>
                      <option>Telangana</option>
                      <option>Bangalore</option>
                    </select>
                  </div> <!-- ./ form-group -->

                  <div class="form-group col-md-2">
                    <label for="inputZip">Zip</label>
                    <input type="text" class="form-control" name="zipcode" >
                  </div> <!-- ./ form-group -->
                
                </div> <!-- ./ form-row -->

                <button type="submit" name="push" class="btn btn-primary cs-btn-color">Register Now</button>


</form>