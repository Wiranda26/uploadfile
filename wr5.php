<?php
date_default_timezone_set('Asia/Jakarta');
include "function1.php";
echo " Token: ";
$token = trim(fgets(STDIN));
        for($a=1;$a<=3;$a++){
        echo color("white",".");
        }
        $code1 = request('/go-promotions/v1/promotions/enrollments', $token, '{"promo_code":"MAUGOFOOD2107"}');
        $message = fetch_value($code1,'"message":"','"');
        if(strpos($code1, 'Your promo ready to use!')){
        echo "\n".color("white"," Message: ".$message);
        }else{
        echo "\n".color("white"," Message: ".$message);
        }