<!DOCTYPE html>
<html>
<head>
	<title><?php echo $group["title"]; ?></title>

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
	     	
     	 	
     		<h3 style="float:left"><?php echo $group["title"]; ?></h3>
     		<a class="float-right btn btn-danger" style="margin: 12px;" href="<?php uri(); ?>admin/add/group">Добавить</a>
        	<div style="clear:both;" ></div>
        	
        	
	        <div class="caption">
		        <form method="POST" class="form vertical-form">
		            <div class="form-group">
		            	<input type="text" class="form-control" name="title" placeholder="Title" value="<?php echo $group["title"]; ?>" required/>
		            </div>
		            
		             <div class="form-group">
		            	<select  class="form-control" name="stream_id" required>
		            	    <?php foreach($streams as $stream): ?>
		            	        <option value="<?php echo $stream["id"]; ?>"><?php echo $stream["title"]; ?></option>
		            	    <?php endforeach; ?>
		            	</select>
		            </div>
		       
		            <div class="form-group">
		            	<button type="submit" class="form-control" name="group_update">Обновить</button>
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