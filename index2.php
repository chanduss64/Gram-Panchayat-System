<?php include('post.php'); ?>
<?php include('header.php'); ?>

        <div class="col-md-6 cs-main-links cs-pull-right">
          
          <a href="#">Register<span>|</span></a>
          <a href="#">Login</a>

        </div> <!-- ./ col-md-6 -->

        </div> <!-- ./ row -->

      </div> <!-- ./ container -->

    </div> <!-- ./ cs-headers  -->

 <section>
      

      <div class="cs-body-section">
        
        <div class="container">

           <div class="row col-md-10">

            <div class="cs-alert alert alert-primary alert-dismissible fade show" role="alert">
              Welcome to the <strong>Gram Panchayat Service.</strong> Register or Login for services
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div> <!-- ./ cs-alert -->

          </div> <!-- ./ row & col-md-10 -->

          <!-- ======================== REGISTRATION FORM ===========================  -->


          <div class="row">
          
          <div class="col-md-7 cs-reg-area">
              
             <h3>Register <b>Now</b></h3>

             <hr class="cs-hr" />

            <div class="cs-clearfix"></div>

             <form method="post" action="index.php">

              <?php //include('errors.php'); ?> 


                <div class="form-row">

                  <div class="form-group col-md-12">
                    <label for="cs-username">Username</label>
                    <input type="text" class="form-control" id="inputAddress2" placeholder="Enter Username" name="username" required>
                  </div> <!-- ./ form-group -->

                  <div class="form-group  col-md-12">
                    <label for="cs-username">Aadhaar ID</label>
                    <input type="text" class="form-control" id="inputAddress2" placeholder="Enter Aadhar ID" name="aid" >
                  </div> <!-- ./ form-group -->

                  <div class="form-group col-md-6">
                    <label for="cs-email">Email</label>
                    <input type="email" class="form-control" id="inputEmail4" placeholder="Enter Your Email " name="email_1" >
                  </div> <!-- ./ form-group -->

                  <div class="form-group col-md-6">
                    <label for="cs-cnf-email">Confirm Email</label>
                    <input type="email" class="form-control" id="inputEmail4" placeholder="Confirm Your Email " name="email_2" >

                  </div> <!-- ./ form-group -->

                  
                

                </div> <!-- ./ form-row -->
              
                <button type="submit" name="push" class="btn btn-primary cs-btn-color">Register Now</button>
               

            </form> <!-- ./ register-form -->
       

          </div> <!-- ./ col-md-7 -->


          <!-- ======================== REGISTRATION FORM ===========================  -->



          <div class="cs-login-area col-md-5">

       
              
             <h3>Login <b>Area</b></h3>

             <hr class="cs-hr" />

             <div class="cs-clearfix"></div>

             <p>If already registered , then Login here !</p>

             <hr />



             <!-- ======================== LOGIN FORM ===========================  -->


             <form action="login.php" method="POST" >

              <div class="form-row">

                  <div class="form-group col-md-12">
                    <label for="cs-email">Email</label>
                    <input type="email" class="form-control" id="inputEmail4" placeholder="Enter Your Email " >
                  </div>

                  <div class="form-group col-md-12">
                    <label for="inputPassword4">Password</label>
                    <input type="password" class="form-control" id="inputPassword4" placeholder="Password" >
                  </div>

              
              
                <button type="submit" class="btn btn-primary cs-btn-color">Login Here</button>
               




              </div> <!-- ./ form-row -->

            </form> <!-- ./ form -->

             <!-- ======================== ./ LOGIN FORM ===========================  -->


          </div> <!-- ./ col-md-5 -->


        </div> <!--  ./ row -->

        </div> <!-- ./ container -->

      </div> <!-- ./ cs-body-section -->



    </section>


<?php include('footer.php'); ?>