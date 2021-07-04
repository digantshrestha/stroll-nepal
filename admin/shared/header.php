<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title; ?></title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/bootstrap/css/style.css">
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/bootstrap/js/jquery.min.js"></script>
</head>
<body>
    <div class="navbar navbar-dark sticky-top flex-md-nowrap p-0 shadow">
        <div class="container">
            <h1 class="nav-items brand"><a href="#">Stroll Nepal</a></h1>  
            <div class="nav-items">
                <button class="btn btn-danger">Settings</button>
                <button class="btn btn-danger">Logout</button>
            </div>
        </div>        
    </div>

    
    <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
      <div class="sidebar-sticky pt-3">
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link active" href="#">
              Dashboard
            </a>
          </li>
        </ul>
      </div>
    </nav>

</body>
</html>