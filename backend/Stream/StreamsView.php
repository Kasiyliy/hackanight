<!DOCTYPE html>
<html>
<head>
	<title><?php echo $stream["title"]; ?></title>

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
	     	
     	 	
     		<h3 style="float:left"><?php echo $stream["title"]; ?></h3>
     		<a class="float-right btn btn-danger" style="margin: 12px;" href="<?php uri(); ?>admin/add/subject">Добавить</a>
        	<div style="clear:both;" ></div>
        	
        	
	        <div class="caption">
		        <form method="POST" class="form vertical-form">
		            <div class="form-group">
		            	<input type="text" class="form-control" name="title" placeholder="Title" value="<?php echo $stream["title"]; ?>" required/>
		            </div>
		            
		            <div class="form-group">
			            <div class="form-group">
			               <select  class="form-control" name="course_id" placeholder="Course" required>
			                   <?php foreach($courses as $get): ?>
	            	           <option value="<?php echo $get["id"]?>">
	            	               <?php echo $get["title"]?>
	            	           </option>
			           	     	<?php endforeach; ?>
			               </select>
			            </div>
		            </div>
		            
		            
		            <div class="form-group">
		            	<button type="submit" class="form-control" name="stream_update">Обновить</button>
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