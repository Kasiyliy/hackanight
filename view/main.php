<!DOCTYPE html>
<html>
<head>
	<title>Main page</title>

	<?php include_once(DIRNAME.'view/template/external.php'); ?>
	
</head>
<body>
<?php include_once(DIRNAME.'view/template/header.php'); ?>

<div class="container-fluid">
	<div class="row">
		<div class="col-md-6 offset-3">
			<div class="jumbotron">
				<h2 class="text-center">
					Search your agenda!
				</h2>
					  <form>
						  <div class="input-group">
						    <input type="text" class="form-control" placeholder="Search">
						    <div class="input-group-btn">
						      <button class="btn btn-default" type="submit">
						        <i class="fa fa-search"></i>
						      </button>
						    </div>
						  </div>
						</form>
			</div>
		</div>
	</div>
</div>
</body>
	<?php include_once(DIRNAME.'view/template/scripts.php'); ?>
	
</html>