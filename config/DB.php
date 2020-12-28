<?php
class DB
{
    public $connection;
    function __construct()
    {
        try {
            $this->connection = new PDO("mysql:host=localhost;dbname=wallet;charset=utf8", "crow", "P@ssw0rd");
        } catch (PDOException $e) {
            $e->getMessage();
        }
    }

    private function query($sql)
    {
        $query = $this->connection->prepare($sql);
        $query->execute();
        return $query;
    }

    public function getAmount($id)
    {
        $amount = $this->query("SELECT * FROM wallet WHERE user_id=" . $id);
        return $amount->fetch(2);
    }

    public function updateAmount($amount, $id)
    {
        $amount = $this->getAmount($id)['amount'] + $amount;
        if ($this->query("UPDATE wallet SET amount=" . $amount . " WHERE user_id=" . $id)) return true;
        else return false;
    }

    public function decreseAmount($amount, $id)
    {
        if ($this->query("UPDATE wallet SET amount=" . $amount . " WHERE user_id=" . $id)) return true;
        else return false;
    }

    public function getUserinformation($id)
    {
        $user = $this->query("SELECT * FROM users WHERE id=" . $id);
        return $user->fetch(2);
    }

    public function getPurchases($id)
    {
        $purchases = $this->query("SELECT * FROM users WHERE id=$id");
        return $purchases;
    }

    public function getProduct($id)
    {
        $product = $this->query("SELECT * FROM product WHERE id=$id");
        return $product->fetch(2);
    }

    public function insertReceipt($userid, $productid, $amount)
    {
        $receipt =
            $this->query("INSERT INTO `receipts`( `user_id`, `product_id`, `amount`) VALUES ($userid,$productid,$amount)");

        return $receipt->execute() ? true : false;
    }
}
