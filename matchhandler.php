<?php
    session_start();
    require_once 'Dao.php';
    $style = "";
    $stock = "";
    $con = "";
    $dao = new Dao();

    if(isset($_POST['style']) || isset($_POST['stock'])){
        
        $style = $_POST['style'];
        $stock = $_POST['stock'];
        
        $dao->updateDB($style,$stock);
  
        header('Location: matchmaker.php');
        exit;

        
        
//        $con = $dao->getConnection();
        
    }
    else{
        header('Location: matchmaker.php');
        exit;
    }




?>