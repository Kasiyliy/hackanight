<!DOCTYPE html>
<html>
<head>
	<title>Список Кабинетов</title>

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
	     	
     	 	
     		<h3 style="float:left">Список Кабинетов</h3>
     		<a class="float-right btn btn-danger" style="margin: 12px;" href="<?php uri(); ?>admin/add/room">Добавить</a>
        	<div style="clear:both;" ></div>
        	
        	
	        <div class="caption">
		        <table class="table table-hover">
		        <thead>
		        	<tr>
		        		<td>
		        			Title
		        		</td>
		        		<td>
		        			Type
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
		     	<?php foreach($rooms as $get): ?>
	                <tr>
	                 
	                	<td>
	                  		<?php echo $get["title"]; ?>
	                	 </td>
	                	<td>
	                  		<?php echo $get["type"]; ?>
	                	 </td>
	                 	<td>
	                 		<a href="<?php uri(); ?>admin/room/<?php echo $get["id"]; ?>" class="btn btn-info">Обновить</a>
	                 	</td>
	                 	<td>
	                 		<a href="<?php uri(); ?>admin/room/delete/<?php echo $get["id"]; ?>" class="btn btn-warning">Удалить</a>
	                 	</td>
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