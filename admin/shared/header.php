<?php
  include_once($_SERVER['DOCUMENT_ROOT']."/helpers/inflector_helper.php");
  $pageMarker = ['Dashboard', 'Places', 'Hotels', 'Restaurants', 
                'Todos', 'Todo Categories', 'Users'];

  $currentPage = strtolower($_SERVER['PHP_SELF']); 
  
  $title='';

  foreach($pageMarker as $key){
    $var = strtolower($key);
    $var = str_replace(' ', '', $var);
    if(strpos($currentPage, $var)!=0){
      $title = $key;
    }
  }
  
  
?>

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
        <ul id="sidebar-nav" class="nav flex-column">
          <?php foreach($pageMarker as $key):?>
            <?php if(strpos($currentPage, str_replace(' ', '', strtolower($key)))!=0){?>
                <li class="nav-item active">
                  <a class="nav-link" href="<?=camelize(strtolower($key));?>.php">
                  <?=$key;?>
                  </a>
                </li>
              <?php
              }
              else{
            ?>
            
            <li class="nav-item">
              <a class="nav-link" href="<?=camelize(strtolower($key));?>.php">
                <?=$key; ?>
              </a>
            </li>
          
            <?php
              }
            ?>
            
          <?php endforeach; ?>
        </ul>
      </div>
    </nav>

</body>
</html>