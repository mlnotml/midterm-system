<?php
require("../classes/order.php");

 if(isset($_POST['submit'])){
    $item_number =  $_POST['item_number'];
    $order_number =$_POST['order_number'];
    $transactions =$_POST['transactions'];
    $payment =$_POST['payment'];
    $delivery =$_POST['delivery'];
    

    $orders  = new Orders();

    $result = $orders->insertquery($item_number, $order_number,  $transactions, $payment, $delivery);
 }
    if($result){
        header('location: ../index.php');
    }else{
        echo" failed to insert order";
    }
 ?>