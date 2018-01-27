<!DOCTYPE html>
<html>
<head>
	<title>Список предметов</title>

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
	     	
     	 	
     		<h3 style="float:left">Список предметов</h3>
     		<a class="float-right btn btn-danger" style="margin: 12px;" href="<?php uri(); ?>admin/add/subject">Добавить</a>
        	<div style="clear:both;" ></div>
        	
        	
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
		        <?php foreach($subjects as $get): ?>
	                  <tr>
		                 
		                  <a class="nav-link text-white" href="<?php uri(); ?>admin/subject/<?php echo $get["id"]; ?>">
		                  	<td>
		                  		<?php echo $get["title"]; ?>
		                	 </td>
		                 	<td>
		                 		<a href="<?php uri(); ?>admin/subject/<?php echo $get["id"]; ?>" class="btn btn-info">Обновить</a>
		                 	</td>
		                 	<td>
		                 		<a href="<?php uri(); ?>admin/subject/delete/<?php echo $get["id"]; ?>" class="btn btn-warning">Удалить</a>
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