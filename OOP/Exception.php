<?php 
require_once "exception/ValidationException.php";
require_once "helper/Validation.php";
require_once "data/LoginRequest.php";

$loginRequest = new LoginRequest();
$loginRequest->username = "Jovian";
$loginRequest->password = "Jovian";
// (ValidationException ini class disimpan kevariabel $exception)
try {
    validateLoginRequest($loginRequest);    
    echo "Valid" .PHP_EOL;
} catch (ValidationException | Exception $exception) {
    echo "Validation Error : {$exception->getMessage()}" . PHP_EOL;
    var_dump($exception->getTrace());
    echo $exception->getTraceAsString();
}finally{
    echo "Error ga error akan di panggil atau di eksekusi" . PHP_EOL;
}
$kata = "eatahtuahtieahtiuahtakjjtJovianaikfhauihfuisahfuiasJovian";
$preg_match = preg_match("Jovian",$kata);

echo "Preg_match = $preg_match";
// $loginRequest->username = "";
// $loginRequest->password = "";



?>