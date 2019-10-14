<div class="container">
    <h2 style="text-align: center;">Register a New Account</h2>

    <!-- Status message -->
    <?php
        if(!empty($success_msg)){
            echo '<p class="status-msg success">'.$success_msg.'</p>';
        }elseif(!empty($error_msg)){
            echo '<p class="status-msg error">'.$error_msg.'</p>';
        }
    ?>

    <!-- Registration form -->
    <div class="regisFrm">
        <form action="" method="post">
            <label class="col-md-4 control-label" ></label>
            <div class="col-md-4 inputGroupContainer">
            <div class="input-group">
            <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
            <input type="tel" pattern="^\d{10}$" required class="form-control"name="mobile"placeholder="Enter Mobile Number" >

            </div>
            </div>

            <input type="submit" name="signupSubmit" value="Register" class="btn btn-primary" >

            </div>
            <div class="inner-wrapper">
          <div class="container">
            <div class="row">
              <div class="col-sm-4 col-sm-offset-4">
                <p>Already have an account? <a href="<?php echo base_url('users/login'); ?>">Login here</a></p>
               </div>
              </div>
            </div>

            </form>
    </div>
</div>
