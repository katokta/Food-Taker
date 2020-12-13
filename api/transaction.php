<?php
session_start();
require_once("../getMenu.php");
require_once("../config/db_connect.php");
$db_handle = new DBConnection();
if (isset($_POST['submit'])){
    /* try{
        foreach ($_SESSION["cart_item"] as $item){
        $item_price = $item["quantity"]*$item["price"];
        $currentDateTime = date('Y-m-d H:i:s');
        $address = $_POST['address'];
        $paymentmethod = "tunai";
        $transaction_id = "tr01";
        $paidamount = $_POST['amount_paid'];

        $db_handle->beginTransaction();
        $db_handle->exec("Insert Into order() value");
        $db_handle->commit();
    }
    catch(Exception $e) {
        $db_handle->rollback();
        echo "Failed: " . $e->getMessage();
    }
    */
    $currentDate = date('Y-m-d');
    $paidamount = $_POST['amount_paid'];
    $paymentmethod = "Tunai";
    $transaction_payment = $db_handle->runQuery("INSERT into payment_detail (Payment_ID, Payment_Date, Paid_Amount, Payment_Method, Customer_ID) VALUES (null, '".$currentDate."', '".$paidamount."', '".$paymentmethod."', '".$_SESSION["id"]."')");
    foreach ($_SESSION["cart_item"] as $item){
        $item_price = $item["quantity"]*$item["price"];
        $currentDateTime = date('Y-m-d H:i:s');
        $address = $_POST['address'];
        $transaction_id = "1"; //Probably randomizer here
        $querygetpaymentid = "SELECT  Payment_ID FROM payment_detail WHERE Customer_ID ='".$_SESSION['id']."' && Payment_Date = '".$currentDate."' && Paid_Amount = '".$paidamount."'" ;
        $selectpaymentID = mysqli_query($conn, $querygetpaymentid);
        list($paymentId) = mysqli_fetch_array($selectpaymentID);
        $transaction = $db_handle->runQuery("INSERT Into table_order(Order_ID, Kode_Promo, Staff_ID, Customer_ID, Payment_ID, Transaction_Date, Menu_Pesanan, Qty_Order, Total_Harga, Alamat_Order, Potongan_Harga, Account_ID) VALUES (null, null, null, '".$_SESSION["id"]."' , '".$paymentId."' , '".$currentDateTime."', '".$item["code"]."', '".$item["quantity"]."', '".$item_price."', '".$address."', null, null )");
        header('location:http://localhost/Food-Taker-master(modif yulun)/logged-in/index.php');
        $msg="Transaction Succeded";
        unset($_SESSION["cart_item"]);
    }
}
else{
     header('location:http://localhost/Food-Taker-master(modif yulun)/logged-in/payment.php');
     $msg="Transactin Failed";
    }
    $_SESSION["msg"]=$msg;
    echo $msg;
?>