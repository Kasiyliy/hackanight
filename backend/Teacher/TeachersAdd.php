<!DOCTYPE html>
<html>
<head>
	<title>Добавить Учителя</title>

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
	     	
     	 	
     		<h3 style="float:left">Добавить Учителя</h3>
        	<div style="clear:both;" ></div>
        	
        	
	        <div class="caption">
		        <form method="POST" class="form vertical-form">
		            <div class="form-group">
		            	<input type="text" class="form-control" name="name" placeholder="Name" required/>
		            </div>
		              <div class="form-group">
		            	<input type="text" class="form-control" name="surname" placeholder="Surname" required/>
		            </div>
		            
		            <div class="form-group">
		               <select  class="form-control" name="rank_id" placeholder="Ranks" required>
		                   <?php foreach($ranks as $get): ?>
            	           <option value="<?php echo $get["id"]?>">
            	               <?php echo $get["title"]?>
            	           </option>
		           	     	<?php endforeach; ?>
		               </select>
		            </div>
		            
		           
		            
		            <div class="form-group">
		            	<button type="submit" class="form-control" name="teacher_add">Добавить</button>
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