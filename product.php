<?php
include("controllers/c_chim_canh.php");
$c_chim_canh=new C_chim_canh();
$chims=$c_chim_canh->Hien_thi_chim_theo_loai();
?>