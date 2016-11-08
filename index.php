<?php
header('Access-Control-Allow-Origin: *');
header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");
$postdata = file_get_contents("php://input");
$request = json_decode($postdata);
$user = $request->user;
$password = $request->password;


if($user == 'test' && $password == '1234'){
  echo '1';
}else{
  echo '0';
}
