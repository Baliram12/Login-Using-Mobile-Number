  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">


  <section id="loginform" class="outer-wrapper">

    <div class="inner-wrapper">
  <div class="container">
    <div class="row">
      <div class="col-sm-4 col-sm-offset-4">
          <a class="navbar-brand" href="#">Welcome <?php echo $user['mobile']; ?>!</a></div>
        </div>
      </div>
    </div>
    <div class="inner-wrapper">
  <div class="container">
    <div class="row">
      <div class="col-sm-4 col-sm-offset-4">
        <li><a href="<?php echo base_url('users/logout'); ?>" class="logout"><i class="fa fa-sign-out">Logout</i> </a></li>
       </div>
      </div>
    </div>
        </section>
