class Task {
  constructor(id, taskText, taskPrio, taskTimer, taskTag) {
    this.taskId = id;
    this.taskText = taskText;
    this.taskPrio = taskPrio;
    this.taskTimer = taskTimer; //Segundos da task
    this.taskTag = taskTag;
    this.sec = 60; //segundos do timer
    this.timer; //cronometro da task do timer
    this.start = false; //verifica de a tarefa começou
    this.createTask();
    this.me = document.getElementById(`task_${this.taskId}`);
  }

  //CRIA A IMAGEM DA TASK
  createTask = () => {
    const divTask = document.createElement("div");
    divTask.setAttribute("class", "task");
    divTask.setAttribute("id", `task_${this.taskId}`);

    const btnCheck = document.createElement("button");
    btnCheck.setAttribute("class", `btnCheck_p${this.taskPrio}`);
    btnCheck.setAttribute("id", `btnCheck_${this.taskId}`);
    btnCheck.setAttribute("name", `btnCheck_${this.taskId}`);
    btnCheck.addEventListener("click", () => {
      this.doneTask();
    });
    divTask.appendChild(btnCheck);

    const taskContent = document.createElement("p");
    taskContent.innerHTML = `${this.taskText}`;
    taskContent.setAttribute("class", "taskContent");
    taskContent.setAttribute("id", `taskContent_${this.taskId}`);
    divTask.appendChild(taskContent);

    const taskOptions = document.createElement("div");
    taskOptions.setAttribute("class", "taskOptions");
    taskOptions.setAttribute("id", `taskOptions_${this.taskId}`);

    const taskTimer = document.createElement("div");
    taskTimer.innerHTML =
      this.taskTimer > 10 ? `${this.taskTimer} : 00` : `0${this.taskTimer}:00`;
    taskTimer.setAttribute("class", "taskTimer");
    taskTimer.setAttribute("id", `taskTimer${this.taskId}`);

    taskOptions.appendChild(taskTimer);
    divTask.appendChild(taskOptions);

    const btnPlay = document.createElement("button");
    btnPlay.setAttribute("class", "btnPlay");
    btnPlay.setAttribute("id", `btnPlay_${this.taskId}`);
    btnPlay.setAttribute("value", "stop");

    const btnPlayImg = document.createElement("img");
    btnPlayImg.src = `images/playIcon.svg`;
    btnPlay.addEventListener("click", () => {
      this.toogleTimer(btnPlay, btnPlayImg, btnPlay.getAttribute("value"));
    });

    btnPlay.appendChild(btnPlayImg);
    taskOptions.appendChild(btnPlay);

    const btnShow = document.createElement("button");
    btnShow.setAttribute("class", "btnShow");
    btnShow.setAttribute("id", `btnShow_${this.taskId}`);
    btnShow.addEventListener("click", () => {
      this.toogleOptionContainer(`optionContainer_${this.taskId}`);
    });

    const btnShowImg = document.createElement("img");
    btnShowImg.src = `images/showIcon.svg`;
    btnShow.appendChild(btnShowImg);
    taskOptions.appendChild(btnShow);

    const optionContainer = document.createElement("div");
    optionContainer.setAttribute("class", "optionContainer");
    optionContainer.setAttribute("id", `optionContainer_${this.taskId}`);

    const btnEdit = document.createElement("button");
    btnEdit.setAttribute("class", "btnEdit");
    btnEdit.setAttribute("id", `btnEdit_${this.taskId}`);
    btnEdit.addEventListener("click", () => {
      this.btnEditTask();
    });
    const btnEditImg = document.createElement("img");
    btnEditImg.src = `images/editIcon.svg`;
    btnEdit.appendChild(btnEditImg);
    optionContainer.appendChild(btnEdit);

    const btnDel = document.createElement("button");
    btnDel.setAttribute("class", "btnDel");
    btnDel.setAttribute("id", `btnDel_${this.taskId}`);
    btnDel.addEventListener("click",()=>{
      this.btnDelTask();
    });

    const btnDelImg = document.createElement("img");
    btnDelImg.src = `images/deleteIcon.svg`;
    btnDel.appendChild(btnDelImg);
    optionContainer.appendChild(btnDel);

    divTask.appendChild(optionContainer);

    document.querySelector(".taskList").prepend(divTask);
  };

  toogleOptionContainer = (containerId) => {
    const btnShow = document.getElementById("btnShow");

    const container = document.getElementById(containerId);
    container.style.display =
      container.style.display == "flex" ? "none" : "flex";
    // container.style.top = `${btnShow.offsetTop + 20}px`;
    // container.style.right = `${btnShow.offsetX}px`;
  };

  toogleTimer = (btnPlay, btnPlayImg, state) => {
    if (state == "stop") {
      this.timerStart();
      btnPlay.setAttribute("value", "play");
      btnPlayImg.src = `images/pauseIcon.svg`;
      return;
    } else {
      this.timerStop();
      btnPlay.setAttribute("value", "stop");
      btnPlayImg.src = `images/playIcon.svg`;
      return;
    }
  };

  timerStart = () => {
    if (!this.start) {
      this.taskTimer--;
      this.start = true;
    }

    let timerDiv = document.getElementById(`taskTimer${this.taskId}`);
    this.timer = setInterval(() => {
      this.taskTimer = this.taskTimer == 1 ? 0 : this.taskTimer;
      if (this.sec > 0) {
        this.sec--;
        timerDiv.innerHTML =
          this.sec > 10
            ? `${this.taskTimer} : ${this.sec}`
            : `${this.taskTimer}:0${this.sec}`;
        return;
      } else if (this.taskTimer >= 1) {
        this.taskTimer--;
        this.sec = 59;
        timerDiv.innerHTML =
          this.taskTimer > 10
            ? `${this.taskTimer} : 00`
            : `0${this.taskTimer}:${this.sec}`;
        return;
      }
      this.timerStop();
    }, 1000);
  };

  timerStop = () => {
    clearInterval(this.timer);
    if (this.taskTimer == 0 && this.sec == 0) {
      //EXIBIR POPUP
      Swal.fire({
        title: "TAREFA CONCLUIDA",
        text: `Tarefa ${this.taskText} foi realizada!!`,
        icon: "success",
        showConfirmButton: true,
        confirmButtonText: "Ok",
      }).then((result) => {
        if (result.isConfirmed) {
          document.getElementById(`task_${this.taskId}`).remove(); // EXCLUI A DIV AO FINALIZAR O TEMPO CERTO
        }
      });
    }
  };

  doneTask = () => {
    // let header = {
    //   method: "POST",
    //   body: this.taskId
    // }
    let endpoint = `./App/Model/doneTask.php?taskId=${this.taskId}`;
    fetch(endpoint)
      .then((response) => response.json())
      .then((response) => {
        if (response["status"]) {
          this.me.remove();
        }
      });
  };

  btnEditTask = () => {

    //ADICIONANDO OS VALORES DA TASK PARA EDITAR
    document.getElementById("taskId").value = this.taskId;
    document.getElementById("txtTaskName").value = this.taskText;
    document.getElementById("slPriority").setAttribute("data-value",this.taskPrio);
    document.getElementById("slTimer").setAttribute("data-value",this.taskTimer);
    document.getElementById("slTag").setAttribute("data-value",this.taskTag);
    
    //ALTERANDO OS VALORES NOS CAMPOS DO EDITOR
    document.getElementById(`slPriority`).children[1].innerHTML = `P${this.taskPrio}`;
    document.getElementById(`slTimer`).children[1].innerHTML = `${this.taskTimer}:00`;
    document.getElementById(`slTag`).children[1].innerHTML = `${this.taskTag}`;

    //ESCONDER A CAIXA DE OPÇÔES
    document.getElementById(`optionContainer_${this.taskId}`).style.display = "none";
    //EXIBINDO O EDITOR
    document.getElementById("taskEditor").style.display = "flex";


  };

  btnDelTask=()=>{
    let formData = new FormData();
    formData.append("taskId",this.taskId);

    let header = {
      method: "POST",
      body: formData,
    };

    let endpoint = "./App/Model/deleteTask.php";
    fetch(endpoint,header)
    .then((response)=>response.status == 200 ? this.me.remove() : window.location.reload());
  }
}

export default Task;
