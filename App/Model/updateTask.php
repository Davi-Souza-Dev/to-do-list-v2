<?php 
    namespace App\Model;
    require_once("connect.php");
    require_once("task.php");
    //CRIA A TASK 
    $task = new Task();
    $taskId = $_POST['taskId'];
    $task->setTaskText($_POST['taskText']);
    $task->setTaskPrio($_POST['taskPrio']);
    $task->setTaskTimer($_POST['taskTimer']);
    $task->setTaskTag($_POST['taskTag']);
    $task->setTaskState("not done");

    $query = "UPDATE  task SET t_name=?, prio=?, timer=?, tag=?, t_state = ? WHERE id=$taskId";
    $stmt = Connect::getCon()->prepare($query);
    $stmt->bindValue(1, $task->getTasktext());
    $stmt->bindValue(2, $task->getTaskPrio());
    $stmt->bindValue(3, $task->getTaskTimer());
    $stmt->bindValue(4, $task->getTaskTag());
    $stmt->bindValue(5, $task->getTaskState());
    $stmt->execute();
     
    if($stmt){
        $msg = ['icon'=>"success","title"=>"CONLUIDO!","msg"=>"TAREFA AUTALIZADA"];
        echo json_encode($msg);
        return;
    }else{
        $msg = ['icon'=>'error',"title"=>"ERRO!","msg"=>"ERRO AO ATUALIZAR"];
        echo json_encode($msg);
        return;
    }
  
?>