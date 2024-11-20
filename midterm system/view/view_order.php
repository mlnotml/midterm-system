<?php include('../classes/order.php'); ?>
<?php $transact = new Orders(); ?>
<?php $data=$transact->processTransaction()?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Welcome</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="btn btn-success" href="view_menu_items.php">Product</a>
          <a class="btn btn-success" href="index.php">Logout</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
<!-- header end -->
<table class="table table-dark">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Item No.</th>
      <th scope="col">Order</th>
      <th scope="col">Trasaction No.</th>
      <th scope="col">Payment Option</th>
      <th scope="col">Delivery Option</th>
    </tr>
  </thead>
  <tbody>
  <?php
// Ensure that $data is not empty
if (!empty($data)) {
    foreach ($data as $row) {
        echo "<tr>";  // Start a new table row
        echo "<td>" . $row['id'] . "</td>";  // Output each field in the row
        echo "<td>" . $row['item_no'] . "</td>";
        echo "<td>" . $row['order_no'] . "</td>";
        echo "<td>" . $row['transaction_id'] . "</td>";
        echo "<td>" . $row['payment'] . "</td>";
        echo "<td>" . $row['delivery'] . "</td>";
        echo "</tr>";  // End the table row
    }
} else {
    echo "No data available.";
}
?>

  </tbody>
</table>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>