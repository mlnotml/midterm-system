<?php 

include('connection.php');
$GLOBALS['connection'] = $connection;



class Orders{
    private $connection;
    function __construct()
    {
        $this->connection = $GLOBALS['connection'];
    }

    public function processTransaction(){
        $data = $this->connection->query('SELECT * FROM online_order')->fetchAll();
        return $data;
        
    }
    public function insertquery($item_number, $order_number, $transactions, $payment, $delivery ){
        $insert = $this->connection->prepare("INSERT INTO `online_order`(`item_no`, `order_no`, `transaction_id`, `payment`, `delivery`) VALUES (?,?,?,?,?)");
        $insert->execute([$item_number, $order_number,  $transactions, $payment, $delivery]);
        return $insert;
    }
}




?>