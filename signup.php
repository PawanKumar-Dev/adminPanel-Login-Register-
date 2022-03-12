<?php include 'include/header.php'; ?>

  <!-- Begin page content -->
  <main class="flex-shrink-0">
    <div class="container">
      <h1 class="mt-5 text-center text-white">Signup</h1>

      <?php if (isset($_SESSION['msg'])) { ?>
        <div class="alert alert-info alert-dismissible fade show text-center" role="alert"><?php echo $_SESSION['msg']; ?><button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
      <?php } ?>
      
      <div class="box">
      <form class="row g-3" action="include/register.php" method="post" autocomplete="off">
        
        <div class="col-md-12">
          <label class="form-label">Username</label>          
          <div class="input-group">
            <span class="input-group-text"><i class="fa fa-user" aria-hidden="true"></i></span>
            <input type="text" id="username" name="username" class="form-control">
          </div>

          <div id="userchk"></div>
        </div>

        <div class="col-md-12">
          <label class="form-label">Email</label>          
          <div class="input-group">
            <span class="input-group-text"><i class="fa fa-envelope" aria-hidden="true"></i></span>
            <input type="email" id="email" name="email" class="form-control">
          </div>
          <div id="emailchk"></div>
        </div>

        <div class="col-md-12">
          <label for="mobile" class="form-label">Mobile</label>
          <div class="input-group">
            <span class="input-group-text"><i class="fa fa-mobile" aria-hidden="true"></i></span>
            <input type="text" id="mobile" name="mobile" class="form-control">
          </div>
          <div id="mobilechk"></div>
        </div>

        <div class="col-md-12">
          <label class="form-label">Password</label>          
          <div class="input-group">
            <span class="input-group-text"><i class="fa fa-lock" aria-hidden="true"></i></span>
            <input type="password" id="password" name="password" class="form-control">
          </div>
          <div id="passchk"></div>
        </div>

        <div class="col-md-12">
          <label class="form-label">Confirm Password</label>          
          <div class="input-group">
            <span class="input-group-text"><i class="fa fa-lock" aria-hidden="true"></i></span>
            <input type="password" id="confirmpwd" name="password" class="form-control">
          </div>
          <div id="cpasschk"></div>
        </div>

        <div class="col-12 text-center">
          <button id="sbmt" class="btn btn-primary" name="signup">Signup <i class="fa fa-paper-plane" aria-hidden="true"></i></button>
        </div>
      </form>
      </div>

    </div>
  </main>

<?php include 'include/footer.php'; ?>