<?php 
    namespace App\Model;
    require_once("connect.php");
    $taskList = [];
    $query = "SELECT id AS taskId,t_name AS taskText,prio AS taskPrio ,timer AS taskTimer , tag AS taskTag,t_state As taskState FROM task WHERE t_state LIKE'not done' ORDER BY prio DESC";
     //FAZENDO A CONEXÃO
     $stmt = Connect::getCon()->prepare($query);
     $stmt->execute();
     // RETORNA VAZIO SE NÃO TIVER TASK
     if($stmt->rowCount() < 0){
         return $result=[];
     }
 
     //FAZENDO O TRAtAMENTO DO RESULTADO
     while($row = $stmt->fetch(\PDO::FETCH_ASSOC)){
        $task = [$row["taskId"],$row["taskText"],$row["taskPrio"],$row["taskTimer"],$row["taskState"]];
        $taskList[] = $task; 
     }
     echo json_encode($taskList);
?>