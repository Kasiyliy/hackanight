<!DOCTYPE html>
<html>
<head>
	<title>Список Курсов</title>

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
	     	
     	 	
     		<h3 style="float:left">Список Курсов</h3>
     		<a class="float-right btn btn-danger" style="margin: 12px;" href="<?php uri(); ?>admin/add/course">Добавить</a>
        	<div class="clear:both;" ></div>
        	
        	
	        <div class="caption">
		       
		       
		       <table class="table table-hover">
		        <thead>
		        	<tr>
		        		<td>
		        			Title
		        		</td>
		        		<td>
		        			Update
		        		</td>
		        			
		        		<td>
		        			Delete
		        		</td>
		        		
		        	</tr>
		        </thead>
		        <tbody>
		       <?php foreach($courses as $get): ?>
	                  <tr>
		                   <a class="nav-link text-white" href="<?php uri(); ?>admin/course/<?php echo $get["id"]; ?>">
		                  	<td>
		                  		<?php echo $get["title"]; ?>
		                	 </td>
		                 	<td>
		                 		<a href="<?php uri(); ?>admin/course/<?php echo $get["id"]; ?>" class="btn btn-info">Обновить</a>
		                 	</td>
		                 	<td>
		                 		<a href="<?php uri(); ?>admin/course/delete/<?php echo $get["id"]; ?>" class="btn btn-warning">Удалить</a>
		                 	</td>
		                 </a>
	                 </tr>
	            	<?php endforeach; ?>
	            </tbody>
	         </table>
		    
            </div>
            
            
	     	<!--INSERT CONTENT HERE-->
	    </div>
	</div>
	</div>

</body>


	<?php include_once(DIRNAME.'view/template/scripts.php'); ?>
	
</html>