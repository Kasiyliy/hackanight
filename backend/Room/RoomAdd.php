<!DOCTYPE html>
<html>
<head>
	<title>Добавить кабинет</title>

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
	     	
     	 	
     		<h3 style="float:left">Добавить кабинет</h3>
        	<div style="clear:both;" ></div>
        	
        	
	        <div class="caption">
		        <form method="POST" class="form vertical-form">
		            <div class="form-group">
		            	<input type="text" class="form-control" name="title" placeholder="Title" required/>
		            </div>
		            
		            <div class="form-group">
		            	<select  class="form-control" name="type">
		            		<option value="lecture">Lecture</option>
		            		<option value="practice">Practice</option>
		            		<option value="laboratory">Laboratory</option>
		            	</select>
		            </div>
		            
		            <div class="form-group">
		            	<button type="submit" class="form-control" name="room_add">Добавить</button>
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