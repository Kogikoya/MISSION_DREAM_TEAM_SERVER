<?php
header('Access-Control-Allow-Credentials: true');
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: POST, GET, PUT, DELETE, OPTIONS");
header("Access-Control-Allow-Headers: Accept, Content-Type, Content-Length, Accept-Encoding, X-CSRF-Token, Authorization");
//----------
header('Access-Control-Allow-Headers: X-Requested-With, Origin, Content-Type, X-CSRF-Token, Accept'); // 그냥 추가

header('Access-Control-Allow-Origin: http://www.missiondreamteam.kro.kr:3000');
//header('Access-Control-Allow-Origin: http://dev.localhost:3000');


// $http_origin = $_SERVER['HTTP_ORIGIN'];
// if ($http_origin == "http://dev.local:3000" || $http_origin == "http://localhost:3000"){
//     header("Access-Control-Allow-Origin: $http_origin");
// }

// ini_set("session.cookie_domain", '.dev.local');
// session_set_cookie_params(3600, '/', '.dev.local');

if ($_SERVER['REQUEST_METHOD'] == 'POST' && empty($_POST)){
    $_POST = (array) json_decode(file_get_contents('php://input'), true);
}
?>