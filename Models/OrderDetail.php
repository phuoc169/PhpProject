<?php namespace app\Models;

use app\Database;
use PDO;

class OrderDetail{
    public ?string $OrderId=null;
    public ?string $ProductId=null;
    public ?string $OrderQuantity=null;
    public ?string $OrderThanhtien=null;
    public function load($data)
    {
        $this->OrderId=$data['OrderId'] ?? null;
        $this->ProductId=$data['ProductId'] ?? null;
        $this->OrderQuantity=$data['OrderQuantity'] ?? '';
        $this->OrderThanhtien=$data['OrderThanhtien'] ?? '';
    }
    public function CreateOrder()
    {
        $statement=Database::$db->pdo->prepare("INSERT INTO ORDERDETAIL (OrderId, ProductId, OrderQuantity, OrderThanhtien) VALUES (:OrderId, :ProductId, :OrderQuantity, :OrderThanhtien)");
        $statement->bindValue(':OrderId',$this->OrderId);
        $statement->bindValue(':ProductId',$this->ProductId);
        $statement->bindValue(':OrderQuantity',$this->OrderQuantity);
        $statement->bindValue(':OrderThanhtien',$this->OrderThanhtien);
        $statement->execute();
    }
}
?>