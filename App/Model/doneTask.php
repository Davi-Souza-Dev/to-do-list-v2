<?php 
    namespace App\Model;
    require_once("connect.php");

    $taskId = $_GET['taskId'];

    $query = "UPDATE task SET t_state = 'done' WHERE id=?";

    $stmt = Connect::getCon()->prepare($query);
    $stmt->bindValue(1, $taskId);

    $stmt->execute();

    if($stmt){
        $result = ['status'=>"true"];
        echo json_encode($result);
        return;
    }else{
        $result = ['status'=>"false"];
    }
?>