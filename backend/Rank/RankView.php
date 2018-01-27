<!DOCTYPE html>
<html>
<head>
	<title><?php echo $rank["title"]; ?></title>

	<?php include_once(DIRNAME.'view/template/external.php'); ?>
	

	
</head>
<body>
<?php include_once(DIRNAME.'view/template/header.php'); ?>
	<div class="container-fluid">
	<div class="row">
		<div class="col-sm-3">
				<?php include_once(DIRNAME.'view/template/sidenav.php'); ?>
	 	</div>
	    <div class="col-sm-9">
	     	<!--INSERT CONTENT HERE-->
	     	
     	 	
     		<h3 style="float:left"><?php echo $rank["title"]; ?></h3>
     		<a class="float-right btn btn-danger" style="margin: 12px;" href="<?php uri(); ?>admin/add/rank">Добавить</a>
        	<div style="clear:both;" ></div>
        	
        	
	        <div class="caption">
		        <form method="POST" class="form vertical-form">
		            
		            <div class="form-group">
		            	<input type="text" class="form-control" name="title" placeholder="Title" value="<?php echo $rank["title"]; ?>" required/>
		            </div>
		            
		             <div class="form-group">
		            	<input type="text" class="form-control" name="max_student" placeholder="Max student num" value="<?php echo $rank["max_student"]; ?>"  required/>
		            </div>
		       
		            <div class="form-group">
		            	<button type="submit" class="form-control" name="rank_update">Обновить</button>
		        	</div>
		        </form>
            </div>
            
            
	     	<!--INSERT CONTENT HERE-->
	    </div>
	</div>
	</div>

</body>


	<?php include_once(DIRNAME.'view/template/scripts.php'); ?>
	
</html>