<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>


<div class="container">
    <h2 style="text-align:center;"> Please Login to Your Account</h2><br>

    <!-- Status message -->
    <?php
        if(!empty($success_msg)){
            echo '<p class="status-msg success">'.$success_msg.'</p>';
        }elseif(!empty($error_msg)){
            echo '<p class="status-msg error">'.$error_msg.'</p>';
        }
    ?>

    <!-- Login form -->

            <div class="regisFrm">
            <form action="" method="post">
            <label class="col-md-4 control-label" ></label>
            <div class="col-md-4 inputGroupContainer">
            <div class="input-group">
            <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
        
            <input type="tel" pattern="^\d{10}$" required class="form-control"name="mobile"placeholder="Enter Mobile Number" >
            </div>
          </div>
                <input type="submit" name="loginSubmit" class="btn btn-primary" value="Submit">

          </div>
          <div class="inner-wrapper">
        <div class="container">
          <div class="row">
            <div class="col-sm-4 col-sm-offset-4">
              <p>Don't have an account? <a href="<?php echo base_url('users/registration'); ?>">Register</a></p>

             </div>
            </div>
          </div>


            </form>
         </div>
</div>
