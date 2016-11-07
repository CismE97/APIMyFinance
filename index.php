<?php
header("Access-Control-Allow-Origin: *");
$postdata = file_get_contents("php://input");
$request = json_decode($postdata);
$user = $request->user;
$password = $request->password;


if($user == 'test'){
  echo '1';
}else{
  echo '0';
}
