<?php namespace admin\Models;

use admin\Database;
use PDO;

class OrderDetail{
    public ?string $OrderId=null;
    public ?int $ProductId=null;
    public ?int $OrderQuantity=null;
    public ?float $OrderThanhtien=null;
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