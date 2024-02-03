<?php
$flag = "flag{Y0U_S4V3_TH3_W0R1D!!}";
if (!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') {
    // AJAX 요청에 응답합니다.
    header('Content-Type: application/json');
    echo json_encode(["flag" => $flag]);
    exit; // AJAX 요청 후 추가 처리 방지
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script type="text/javascript" src="js/robots.txt"></script>
</head>
<body>
<div style="text-align: center;"><img src='bossRobotCore.png'><br>    
Robot's HP: <div id="HP" style="display: inline;"></div></div>
    
    <p align="center"><button onclick="attack()">공격!</button></p>
</body>
</html>