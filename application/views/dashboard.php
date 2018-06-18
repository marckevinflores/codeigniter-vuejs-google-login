
<body class="bg-light"> 
<div class="container mt-5">
 <div class="row">
     <div class="col-md-12">
 <div class="card text-center m-5 w-50">
  <div class="card-header bg-danger text-white">
    Google User
  </div>
  <div class="card-body">
    <h5 class="card-title">Hi, <?php echo $userdata->first_name.' '. $userdata->last_name;?></h5>
    <img src="<?php echo $userdata->picture_url;?>" alt="">
    <div class="card-body">
    <div class="row">
        <div class="col-md-12">
         
          <h6>First Name: <?php echo $userdata->first_name;?></h6>
          <h6>Last Name: <?php echo $userdata->last_name;?></h6>
          <h6>Email: <?php echo $userdata->email;?></h6>
          <h6>Provider: <?php echo $userdata->oauth_provider;?></h6>
          <h6>Google ID: <?php echo $userdata->oauth_uid;?></h6>
        </div>
    </div>
    </div>
  </div>
  <div class="card-footer bg-danger">
  <a href="<?php echo base_url();?>welcome/logout" class="btn btn-danger active">Log Out</a>
  </div>
</div>
     </div>
 </div>
</div>
