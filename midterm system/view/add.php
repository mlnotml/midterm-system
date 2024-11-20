<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <?php
    if(isset($_GET['id'])){
        $id = $_GET['id'];
    }
    
    
    
    ?>
    <form class="container " method="POST" action="insert.php" >
        <h1>Add to Cart</h1>
        <div class="form-group">
            <label for="exampleInputPassword1">item Number</label>
            <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Order Number" name="item_number">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Order Number</label>
            <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Transactions" name="order_number">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Transactions</label>
            <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Payment" name="transactions">
        </div>
             <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <label class="input-group-text" for="inputGroupSelect01">Options</label>
                </div>
                <select class="custom-select" id="inputGroupSelect01" name="payment">
                    <option selected>Payment Option</option>
                    <option value="Gcash">Gcash</option>
                    <option value="Paymaya">Paymaya</option>
                    <option value="COD">COD</option>
                </select>
                <br>
                <select class="custom-select" id="inputGroupSelect01" name="delivery">
                    <option selected>Delivery Option</option>
                    <option value="Motorcycle">Motorcycle</option>
                    <option value="Bike">Bike</option>
                </select>
            </div>
        <div class="form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1">Check me out</label>
        </div>
        <button type="submit" class="btn btn-primary" name="submit">Submit</button>

        
</form>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</body>
</html>
<?php
       