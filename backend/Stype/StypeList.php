<!DOCTYPE html>
<html>
<head>
	<title>Список типов предмета</title>

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
	     	
     	 	
     		<h3 style="float:left">Список типов предмета</h3>
     		<a class="float-right btn btn-danger" style="margin: 12px;" href="<?php uri(); ?>admin/add/stype">Добавить</a>
        	<div style="clear:both;" ></div>
        	
        	
	        <div class="caption">
		        <table class="table table-hover">
		        <thead>
		        	<tr>
		        		<td>
		        			Title
		        		</td>
		        		<td>
		        			Name
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
		     	<?php foreach($stypes as $get): ?>
	                <tr>
	                 
	                	<td>
	                  		<?php echo $get["title"]; ?>
	                	 </td>
	                	 <td>
	                	 	<?php $sb = Subject::getSubjectByID($get["subject_id"]); 
	                	 	echo $sb["title"]; ?>
	                	 </td>
	                 	<td>
	                 		<a href="<?php uri(); ?>admin/stype/<?php echo $get["id"]; ?>" class="btn btn-info">Обновить</a>
	                 	</td>
	                 	<td>
	                 		<a href="<?php uri(); ?>admin/stype/delete/<?php echo $get["id"]; ?>" class="btn btn-warning">Удалить</a>
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