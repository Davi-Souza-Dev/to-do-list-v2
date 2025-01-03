<?php 
    namespace App\Model;

    //Cria a classe TASK para pegar e setar as informações
    class Task{
        private $taskText,$taskPrio,$taskTimer,$taskTag,$taskState;

        public function getTaskText(){
            return $this->taskText;
        }

        public function setTaskText($name){
            $this->taskText = $name;
        }

        public function getTaskPrio(){
            return $this->taskPrio;
        }

        public function setTaskPrio($prio){
            $this->taskPrio = $prio;
        }

        public function getTaskTimer(){
            return $this->taskTimer;
        }

        public function setTaskTimer($timer){
            $this->taskTimer = $timer;
        }

        public function getTaskTag(){
            return $this->taskTag;
        }

        public function setTaskTag($tag){
            $this->taskTag = $tag;
        }

        public function getTaskState(){
            return $this->taskState;
        }

        public function setTaskState($state){
            $this->taskState = $state;
        }

    }
?>