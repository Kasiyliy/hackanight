<!DOCTYPE html>
<html>
<head>
	<title><?php echo $course["title"]; ?></title>

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
	     	
     	 	
     		<h3 style="float:left"><?php echo $course["title"]; ?></h3>
     		<a class="float-right btn btn-danger" style="margin: 12px;" href="<?php uri(); ?>admin/add/course">Добавить</a>
        	<div style="clear:both;" ></div>
        	
        	
	        <div class="caption">
		        <form method="POST" class="form vertical-form">
		            <div class="form-group">
		            	<input type="text" class="form-control" name="title" placeholder="Title" value="<?php echo $course["title"]; ?>" required/>
		            </div>
		            
		            <div class="form-group">
			            <div class="form-group">
			               <select  class="form-control" name="specialty_id" placeholder="Stream" required>
			                   <?php foreach($specialties as $get): ?>
	            	           <option value="<?php echo $get["id"]?>">
	            	               <?php echo $get["title"]?>
	            	           </option>
			           	     	<?php endforeach; ?>
			               </select>
			            </div>
		            </div>
		            
		            
		            <div class="form-group">
		            	<button type="submit" class="form-control" name="course_update">Обновить</button>
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