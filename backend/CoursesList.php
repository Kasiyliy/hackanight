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
     		<a class="float-right btn btn-danger" style="margin: 12px;" href="<?php uri(); ?>add/course">Добавить</a>
        	<div class="clear:both;" ></div>
        	
        	
	        <div class="caption">
		        <ul class="nav nav-pills flex-column bg-dark">
		     	<?php foreach($courses as $get): ?>
	                <li class="nav-item">
	                  <a class="nav-link text-white" href="<?php uri(); ?>admin/course/<?php echo $get["id"]; ?>"><?php echo $get["title"]; ?></span></a>
	                </li>
		     	<?php endforeach; ?>
	            </ul>
            </div>
            
            
	     	<!--INSERT CONTENT HERE-->
	    </div>
	</div>
	</div>

</body>


	<?php include_once(DIRNAME.'view/template/scripts.php'); ?>
	
</html>