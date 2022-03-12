<?php include 'include/header.php'; ?>

  <!-- Begin page content -->
  <main class="flex-shrink-0">
    <div class="container">
      <h1 class="mt-5 text-center text-white">Login</h1>
      
      <div class="box">

      <?php if (isset($_SESSION['msg'])) { ?>
        <div class="alert alert-info alert-dismissible fade show text-center" role="alert"><?php echo $_SESSION['msg']; ?><button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
      <?php } ?>
      
      <form class="row g-3" action="include/login.php" method="post" autocomplete="off">
        <div class="col-md-12">
          <label class="form-label">Username</label>     
          <div class="input-group">
            <span class="input-group-text"><i class="fa fa-user" aria-hidden="true"></i></span>
            <input type="text" id="username" name="username" class="form-control" value="<?php if (isset($_COOKIE['loginUserCookie'])) { echo $_COOKIE['loginUserCookie']; } ?>">
          </div>
          <div id="userchk"></div>
        </div>

        <div class="col-md-12">
          <label class="form-label">Password</label>          
          <div class="input-group">
            <span class="input-group-text"><i class="fa fa-lock" aria-hidden="true"></i></span>
            <input type="password" id="password" name="password" class="form-control" value="<?php if (isset($_COOKIE['loginPassCookie'])) { echo $_COOKIE['loginPassCookie']; } ?>">
          </div>
          <div id="passchk"></div>
        </div>

        <div class="col-md-12">
          <input type="checkbox" name="remember" <?php if (isset($_COOKIE['loginUserCookie'])) { echo "checked"; } ?>>
          <label class="form-label">Remember Me?</label>
        </div>

        <div class="col-12 text-center">
          <button class="btn btn-primary" id="login" type="submit" name="login">Login <i class="fa fa-unlock-alt" aria-hidden="true"></i></button>
        </div>
      </form>
      </div>

    </div>
  </main>

<?php include 'include/footer.php'; ?>