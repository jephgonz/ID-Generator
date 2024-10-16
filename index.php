<?php
if($_SERVER['REQUEST_METHOD'] == 'POST'){
	include_once("idgen.php");
}
?>
<!DOCTYPE html>
<html>
    <head>
        <title>ID Generator in PHP</title>
		<link href="img/favicon.ico" rel="icon" type="image">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css">
		<link rel="stylesheet" href="css/datepicker.css">
		<link rel="stylesheet" href="css/style.css">
		<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script src="js/datepicker.js"></script>
    </head>
		<body>
			<div class="topmost container" style="margin-top:8em;">
				<div class="col-md-12">
					<div class="panel panel-primary">
						<div class="panel-heading">
							<center>
								<strong class="panelinputtitle">Personal Information</strong>
							</center>
						</div>
						<div class="panel-body" style="min-height:220px;">
							<div class="container-fluid">
								<form method = "post" enctype="multipart/form-data" id="uploadForm">
									<div class="row">
										<div class = "col-sm-3">
											<label>ID Picture</label>
											<input type="file" name="image" accept="image/*" />
											<small class="form-text text-muted">Please use only white background</small>
										</div>
										<div class = "col-sm-2">
											<label>Nickname</label>
											<input type = "text" class = "form-control" placeholder="Nick Name" name="nickname" value="<?php echo @$_POST['nickname']; ?>" onkeyup="this.value = this.value.toUpperCase();">
										</div>
										<div class = "col-sm-4">
											<label>Full Name</label>
											<input type = "text" class = "form-control" placeholder="Full Name" name="fullname" value="<?php echo @$_POST['fullname']; ?>" onkeyup="this.value = this.value.toUpperCase();">
										</div>
										<div class="col-sm-3">
											<label>Font size</label>
											<input type = "number" class = "form-control" placeholder="Font Size" name="fontsize" value="<?php echo @$_POST['fontsize']; ?>">
											<small class="form-text text-muted">Adjust the value if the text exceeded</small>
										</div>
									</div>
									<div class='row'>
										<div class = "col-sm-6">
											<label>Position</label>
											<input type = "text" class = "form-control" placeholder="Position" name="position" value="<?php echo @$_POST['position']; ?>" onkeyup="this.value = this.value.toUpperCase();">
										</div>
										<div class="col-sm-3">
											<label>Font size</label>
											<input type = "number" class = "form-control" placeholder="Font Size" name="fontsize2" value="<?php echo @$_POST['fontsize2']; ?>">
											<small class="form-text text-muted">Adjust the value if the text exceeded</small>
										</div>
										<div class = "col-sm-3">
											<label>Employee Number</label>
											<input type = "number" class = "form-control" placeholder="Employee Number" name="empnumber" value="<?php echo @$_POST['empnumber']; ?>">
										</div>
									</div>
										<div class = "form-group">
											<label>Birth Date</label>
											<input type="text" readonly name="dateinput" class="datepicker-here form-control" placeholder="Your Birthday" data-language="en" value="<?php echo @$_POST['dateinput'];;?>">
										</div>
										<div class = "form-group">
											<label>Address</label>
											<input type = "text" class = "form-control" placeholder="Address" name="address1" value="<?php echo @$_POST['address1']; ?>" maxlength="45" onkeyup="this.value = this.value.toUpperCase();">
										</div>
										<div class = "form-group">
											<label>Contact Name</label>
											<input type = "text" class = "form-control" placeholder="Contact Name" name="name2" value="<?php echo @$_POST['name2']; ?>" onkeyup="this.value = this.value.toUpperCase();">
										</div>
										<div class = "form-group">
											<label>Contact Address</label>
											<input type = "text" class = "form-control" placeholder="Contact Address" name="address2" value="<?php echo @$_POST['address2']; ?>" maxlength="45" onkeyup="this.value = this.value.toUpperCase();">
										</div>
										<div class = "form-group">
											<label>Contact Number</label>
											<input type = "number" class = "form-control" placeholder="Contact Number" name="number" value="<?php echo @$_POST['number']; ?>">
										</div>
										<div class = "form-group">
											<input type = "submit" class = "btn btn-primary btn-block" name="process" value="Generate ID">
								</form>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-12">
					<div class="panel panel-primary">
						<div class="panel-heading">
							<center>
								<strong class="panelinputtitle">Generated ID Card</strong>
							</center>
						</div>
						<div class="panel-body" style="min-height:230px;">
							<center>
								<a class="btn btn-primary submitBtn" style="width:210px; margin:5px 0;" href="download.php?file1=<?php echo @str_replace(" ","",strtolower($nickname));?>.png&file2=<?php echo @str_replace(" ","",strtolower($nickname));?>back.png">Download ID Card</a>
								<p>Please review changes below</p>
								<?php
								if($_SERVER['REQUEST_METHOD'] == 'POST'){
									echo '<img src="'.$img2.'" width="500">';
									echo '<img src="'.$img3.'" width="500">';
								}else{
									echo "<img src='img/id.png' alt='' class='resultimg' width='500'/>";
									echo "<img src='img/id2.png' alt='' class='resultimg' width='500'/>";
								}
								?>
							</center>
						</div>
					</div>
				</div>
			</div>
		</body>	
</html>