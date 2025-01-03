<?php
    namespace App\Model;
    require_once('task.php');
    require_once('connect.php');

    //CRIA A TASK 
    $task = new Task();
    $task->setTaskText($_POST['taskText']);
    $task->setTaskPrio($_POST['taskPrio']);
    $task->setTaskTimer($_POST['taskTimer']);
    $task->setTaskTag($_POST['taskTag']);
    $task->setTaskState("not done");

    $query = "INSERT INTO task (t_name, prio, timer, tag, t_state) VALUES (?, ?, ?, ?,?)";
    $stmt = Connect::getCon()->prepare($query);
    $stmt->bindValue(1, $task->getTasktext());
    $stmt->bindValue(2, $task->getTaskPrio());
    $stmt->bindValue(3, $task->getTaskTimer());
    $stmt->bindValue(4, $task->getTaskTag());
    $stmt->bindValue(5, $task->getTaskState());
    //EXECUTANDO A QUERY SQL PELO PDO
    $stmt->execute();
    
    if($stmt){
        $msg = ['icon'=>"success","title"=>"CONLUIDO!","msg"=>"TAREFA ADICIONADA"];
    }else{
        $msg = ['icon'=>'error',"title"=>"ERRO!","msg"=>"ERRO AO ADICIONAR A TAREFA"];
    }

    echo json_encode($msg);
?>