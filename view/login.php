<!DOCTYPE html>
<html>
<head>
	<title>Login</title>

	<?php include_once(DIRNAME.'view/template/external.php'); ?>
</head>
<body>


    <div id="login-overlay" class="modal-dialog">
      <div class="modal-content">
          <div class="modal-header">
             <h4 class="text-center">Login</h4>
          </div>
          <div class="modal-body">
              <div class="row">
                  <div class="col-md-12">
                      <div class="well">
                          <form id="loginForm" method="POST" action="<?php uri() ?>login" novalidate="novalidate">
                              <div class="form-group">
                                  <label for="username" class="control-label">Email</label>
                                  <input type="text" class="form-control" id="username" name="username" value="" required="" title="Please enter you username" placeholder="example@gmail.com">
                                  <span class="help-block"></span>
                              </div>
                              <div class="form-group">
                                  <label for="password" class="control-label">Password</label>
                                  <input type="password" class="form-control" id="password" name="password" value="" required="" title="Please enter your password">
                                  <span class="help-block"></span>
                              </div>
                              
                              <button name="login" type="submit" class="btn btn-success btn-block">Login</button>
                      
                          </form>
                      </div>
                  </div>
                
              </div>
          </div>
      </div>
  </div>

</body>
</html>