<!DOCTYPE html>
<html>
<head>
	<title>Добавить тип предмета</title>

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
	     	
     	 	
     		<h3 style="float:left">Добавить тип предмета</h3>
        	<div style="clear:both;" ></div>
        	
        	
	        <div class="caption">
		        <form method="POST" class="form vertical-form">
		            <div class="form-group">
		            	<select  class="form-control" name="title" required>
		            		<option value="lecture">Lecture</option>
		            		<option value="practice">Practice</option>
		            		<option value="laboratory">Laboratory</option>
		            	</select>
		            </div>
		            
		            <div class="form-group">
		            	<select  class="form-control" name="subject_id" required>
		            	    <?php foreach($subjects as $subject): ?>
		            	        <option value="<?php echo $subject["id"]; ?>"><?php echo $subject["title"]; ?></option>
		            	    <?php endforeach; ?>
		            	</select>
		            </div>
		            
		            <div class="form-group">
		            	<select  class="form-control" name="teacher_id" required>
		            	    <?php foreach($teachers as $teacher): ?>
		            	        <option value="<?php echo $teacher["id"]; ?>"><?php echo $teacher["name"]; ?></option>
		            	    <?php endforeach; ?>
		            	</select>
		            </div>
		            
		            <div class="form-group">
		            	<button type="submit" class="form-control" name="stype_add">Добавить</button>
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