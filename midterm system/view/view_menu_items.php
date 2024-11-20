<?php include('../classes/menu_items.php');  ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../css/main.css">
</head>
<body>
      <!-- header -->
<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Menu</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="btn btn-primary" aria-current="page" href="../index.php">Home</a>
          <a class="btn btn-info" aria-current="page" href="../view/view_order.php">Orders</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
<!-- header end -->
<div class="container p-3 bg-black ">
        <div class="row">
            <div class="col">
                <div class="row">
                <?php 
                    $menu = new MenuItems();
                    $menu_items = $menu->viewMenu();
                    foreach ($menu_items as $key => $value) {
                        echo '<div class="col">
                                <div class="card bg-warning mb-5" style="width: 18rem;">
                                    <img  id="menu-images" src="../resources/' . $value['image'] . '.jpg" class="card-img-top w-100 h-100" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title">₱ ' . $value['price'] . '.00</h5>
                                        <p class="card-text">' . $value['name'] . '</p>';
                        ?>
                                        <a href="add.php?id=<?php echo $value['id']; ?>" class="btn btn-primary">Add to cart</a>
                        <?php
                        echo '      </div>
                                </div>
                            </div>';    
                    }
                    ?>
                </div>                
            </div>
        </div>
    </div>



</body>
</html>