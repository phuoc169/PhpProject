<?php namespace admin\Models;

use admin\Database;
use PDO;

class Product{
    public ?int $ProductId=null;
    public ?string $ProductName=null;
    public ?int $CateId=null;
    public ?string $CreateDate=null;
    public ?float $ProductPrice=null;
    public ?string $ProductImage=null;
    public ?string $Description=null;
    public ?int $Discount=null;
    public ?string $ProductImage2=null;
    public function load($data)
    {
        $this->ProductId=$data['ProductId'] ?? null;
        $this->ProductName=$data['ProductName'] ?? '';
        $this->CateId=$data['CateId'] ?? '';
        $this->CreateDate=$data['CreateDate'] ?? '';
        $this->ProductPrice=$data['ProductPrice'] ?? '';
        $this->ProductImage=$data['ProductImage'] ?? '';
        $this->Description=$data['Description'] ?? '';
        $this->Discount=$data['Discount'];
        $this->ProductImage2=$data['ProductImage2'];
        
    }
    public function save()
    {
        $statement=Database::$db->pdo->prepare("INSERT INTO PRODUCTS (ProductName, CateId, CreateDate, ProductPrice, ProductImage,Description,Discount,ProductImage2) VALUES (:ProductName, :CateId, :CreateDate, :ProductPrice, :ProductImage,:Description,:Discount,:ProductImage2)");
        $statement->bindValue(':ProductName',$this->ProductName);
        $statement->bindValue(':Discount',$this->Discount);
        $statement->bindValue(':ProductImage2',$this->ProductImage2);
        $statement->bindValue(':CateId',$this->CateId);
        $statement->bindValue(':CreateDate',$this->CreateDate);
        $statement->bindValue(':ProductPrice',$this->ProductPrice);
        $statement->bindValue(':ProductImage',$this->ProductImage);
        $statement->bindValue(':Description',$this->Description);
        $statement->execute();
    }
    public function update()
    {
        $statement=Database::$db->pdo->prepare("UPDATE PRODUCTS SET ProductName = :ProductName, CateId = :CateId, CreateDate = :CreateDate, ProductPrice = :ProductPrice , ProductImage = :ProductImage, Description = :Description,Discount = :Discount, ProductImage2 = :ProductImage2  WHERE ProductId = :ProductId");
        $statement->bindValue(':ProductId',$this->ProductId);
        $statement->bindValue(':ProductName',$this->ProductName);
        $statement->bindValue(':Discount',$this->Discount);
        $statement->bindValue(':ProductImage2',$this->ProductImage2);
        $statement->bindValue(':CateId',$this->CateId);
        $statement->bindValue(':CreateDate',$this->CreateDate);
        $statement->bindValue(':ProductPrice',$this->ProductPrice);
        $statement->bindValue(':ProductImage',$this->ProductImage);
        $statement->bindValue(':Description',$this->Description);
        $statement->execute();
    }
}
?>