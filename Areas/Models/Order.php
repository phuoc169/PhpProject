<?php namespace admin\Models;

use admin\Database;
use PDO;

class Order{
    public ?string $OrderId=null;
    public ?string $ordermessage=null;
    public ?string $orderdatetime=null;
    public ?string $orderstatus=null;
    public ?string $UserId=null;
    public ?string $ShippingAddress=null;
    public function load($data)
    {
        $this->OrderId=$data['OrderId'] ?? null;
        $this->ordermessage=$data['ordermessage'] ?? '';
        $this->orderdatetime=$data['orderdatetime'] ?? '';
        $this->orderstatus=$data['orderstatus'] ?? '';
        $this->UserId=$data['UserId'] ?? '';
        $this->ShippingAddress=$data['ShippingAddress'] ?? '';
    }
    public function CreateOrder()
    {
        $statement=Database::$db->pdo->prepare("INSERT INTO ORDERPRODUCT (orderid,ordermessage, orderdatetime, orderstatus, UserId, ShippingAddress) VALUES (:orderid,:ordermessage, :orderdatetime, :orderstatus, :UserId, :ShippingAddress)");
        $statement->bindValue(':orderid',$this->OrderId);
        $statement->bindValue(':ordermessage',$this->ordermessage);
        $statement->bindValue(':orderdatetime',$this->orderdatetime);
        $statement->bindValue(':orderstatus',$this->orderstatus);
        $statement->bindValue(':UserId',$this->UserId);
        $statement->bindValue(':ShippingAddress',$this->ShippingAddress);
        $statement->execute();
    }
}
?>