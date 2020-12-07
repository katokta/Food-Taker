<?php
session_start();
include_once 'core.php';
include_once 'libs/src/BeforeValidException.php';
include_once 'libs/src/ExpiredException.php';
include_once 'libs/src/SignatureInvalidException.php';
include_once 'libs/src/JWT.php';
use \Firebase\JWT\JWT;

if (isset($_POST['submit'])){
    require_once("../config/db_connect.php");
$user=$_POST['email'];
$pass=$_POST['pwd'];
$user=mysqli_real_escape_string($conn,$user);
$pass=mysqli_real_escape_string($conn,$pass);

$query="SELECT Customer_Email, Customer_Pass, access FROM customer WHERE Customer_Email='".$user."'";
$result=mysqli_query($conn, $query);
list($cust_email, $cust_pass) = mysqli_fetch_array($result);
$msg="";
    if (password_verify($pass, $cust_pass)){
        $_SESSION["user"]=$user;
        $_SESSION["pass"]=$hashbiscuit;
                
        $token = array(
        "iat" => $issued_at,
        "exp" => $expiration_time,
        "iss" => $issuer,
        "data" => array(
        "email" => $user->email
        )
        );
         // set response code
         http_response_code(200);
   
         // generate jwt
         $jwt = JWT::encode($token, $key);
         echo json_encode(
         array(
         "message" => "Successful login.",
         "jwt" => $jwt
          )
          );
          if ($account["access"]=='customer'){
         header("location:http://localhost/Food-Taker-master(modif yulun)/logged-in/index.php");
          } else {
            header("location:http://localhost/Food-Taker-master(modif yulun)/admin/index.php");
          }
        } else{
                header('location:http://localhost/Food-Taker-master(modif yulun)/login.php');
                $msg="Invalid password and username";
            }
            $_SESSION["msg"]=$msg;
            echo $msg;
        }
?>