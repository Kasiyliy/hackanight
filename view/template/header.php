<nav class="navbar navbar-expand-lg navbar-dark bg-dark" style="margin-bottom:24px;">
  <a class="navbar-brand" href="<?php uri();?>main">Logo</a>
  <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navb">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navb">
    <?php if(isset($_SESSION["admin"])):  ?>
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="<?php uri(); ?>admin">Admin</a>
      </li>
    </ul>
    <?php endif; ?>

    
  </div>
  <div class="navbar-left">
      <div class="form-inline">
      <?php if(isset($_SESSION["admin"])):  ?>
            <?php $get = Admin::getAdmin($_SESSION["admin"]); ?>
            <span class="text-success" style="padding-left:15px"><?php echo $get["email"]; ?></span>
            <a class="btn btn-success" href="<?php uri(); ?>logout"> &nbsp;Logout</a>
      <?php else: ?>
          <a class="btn btn-success" href="<?php uri(); ?>login">Login</a>
      <?php endif; ?>
      </div>
      
  </div>
</nav>