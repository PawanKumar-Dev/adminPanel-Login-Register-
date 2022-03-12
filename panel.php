<?php session_start(); ob_start(); ?>
<?php
if (!isset($_SESSION['login'])) {
  header('Location: http://localhost/demo/index.php');
}
?>

<!doctype html>
<html lang="en" class="h-100">
  <head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="author" content="Pawan">
  <meta name="robots" content="noindex">
  <title>Admin Panel</title>

  <?php include 'include/favicon.php'; ?>

  <!-- CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="css/style.css" rel="stylesheet">
</head>

<body class="d-flex flex-column h-100 body-bg">
    
<header>
  <!-- Fixed navbar -->
  <nav class="navbar navbar-expand-lg navbar-dark fixed-top bg-teal">
  
  <div class="container-fluid">
    <a class="navbar-brand" href="">Admin Panel</a>
    
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarColor01">
      <ul class="navbar-nav me-auto">        
        <li class="nav-item">
          <a class="nav-link active" href="">Home
          </a>
        </li>
      </ul>

      <div class="d-flex">
        <a class="btn btn-warning my-2 my-sm-0" href="include/logout.php">Logout</a>
      </div>

    </div>
  </div>
</nav>
</header>

  <!-- Begin page content -->
  <main class="flex-shrink-0">
    <div class="container text-center">
      <h1 class="mt-1 text-white">Welcome to Admin Panel, <?php echo $_SESSION['login']; ?></h1>
      
      <?php if (isset($_SESSION['msg'])) { ?>
        <div class="alert alert-info alert-dismissible fade show text-center" role="alert"><?php echo $_SESSION['msg']; ?><button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
      <?php } ?>

    </div>
  </main>

<?php include 'include/footer.php'; ?>