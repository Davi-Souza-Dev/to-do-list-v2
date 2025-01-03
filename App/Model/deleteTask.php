<?php 
    namespace App\Model;
    require_once("connect.php");
    
    $taskId = $_POST['taskId'];
    $query = "DELETE FROM task WHERE id=$taskId";
    $stmt = Connect::getCon()->prepare($query);
    $stmt->execute();
     
    if($stmt){
        $msg = ['msg'=>"true"];
        echo json_encode($msg);
        return;
    }else{
        $msg = ['msg'=>"false"];
        echo json_encode($msg);
        return;
    }
  
?>