<?php include_once('processForm.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Image Preview and Upload PHP</title>
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/css/bootstrap.min.css" />
  <link rel="stylesheet" href="main.css">
</head>
<body>
  <div class="container">
    <div class="row">
      <div class="col-6 offset-md-4 form-div">
        <a href="others.php">NEXT</a>
        <form action="form.php" method="post" enctype="multipart/form-data">
          <h2 class="text-center mb-3 mt-3">Vendor Registration</h2>
          <?php if (!empty($msg)): ?>
            <div class="alert <?php echo $msg_class ?>" role="alert">
              <?php echo $msg; ?>
            </div>
          <?php endif; ?>
          <div class="form-group text-center" style="position: relative;" >
            <span class="img-div">
              <div class="text-center img-placeholder"  onClick="triggerClick()">
                <h4>Update image</h4>
              </div>
              <img src="images/avatar.jpg" onClick="triggerClick()" id="profileDisplay">
            </span>
            <input type="file" name="profileImage" onChange="displayImage(this)" id="profileImage" class="form-control" style="display: none;">
            <label>Profile Image</label>
          </div>
          
			<div class="form-group">
			 
			
							<form name="registration" method="post" action="" enctype="multipart/form-data">
								<div>
								<b><div><p>Vendor/Company full name </p>
								<input type="text" class="text" value=""  name="vendor" required ></div>
								<div><p>Gst number </p>
								<input type="text" class="text" value="" name="gst"  required ></div>
								</div>
								<p>Email Address </p>
								<input type="text" class="text" value="" name="email"  >
								<p>Website </p>
								<input type="text" class="text" value=""  name="website" required >
								<p>Phone no. </p>
								<input type="text" class="text" value="" name="phoneno"  required >
								<p>Alternate Phone no. </p>
								<input type="text" class="text" value="" name="alternatephoneno"  >
								<p>State </p>
								<input type="text" class="text" value=""  name="state" required >
								<p>City </p>
								<input type="text" class="text" value="" name="city"  required >
								<p>District</p>
								<input type="text" class="text" value="" name="district"  >
								<ol><label>Office Address</label>
                                <textarea name="officeaddress" class="form-control" required></textarea>
			                     <label>Resident Address</label>
                               <textarea name="residentaddress" class="form-control" required></textarea></ol>
							   </b>
								
								
								
          </div>
          <div class="form-group">
            <button type="submit" name="save_profile" class="btn btn-primary btn-block">Submit</button>
		 <button  type="exit" name="exit" onclick="exit()" class="btn btn-primary btn-block">exit</button>
			</div>
        </form>
      </div>
    </div>
  </div>
</body>
</html>
<script src="scripts.js"></script>