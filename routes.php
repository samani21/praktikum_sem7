<?php

if(isset($_GET["page"])){
    $page = $_GET["page"];
}else{
    $page = "";
}

switch($page){
    case "";
    case "dashboard":
        include "pages/dashboard.php";
        break;
    case "bagian":
        include "pages/bagian/bagian.php";
        break;
    case "bagiantambah":
        include "pages/bagian/bagiantambah.php";
        break;
    case "bagianhapus":
        include "pages/bagian/bagianhapus.php";
        break;
    case "bagianubah":
        include "pages/bagian/bagianubah.php";
        break;
    default:
        include "pages/404.php";
}

?>