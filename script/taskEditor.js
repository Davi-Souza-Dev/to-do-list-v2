//EXIBIR|OCULTAR O EDITOR
const menuBtnAddTask = document.getElementById("menuBtnAddTask");
const taskEditor = document.getElementById("taskEditor");
const editorBtnCancel = document.getElementById("editorBtnCancel");
menuBtnAddTask.addEventListener("click", () => {
  taskEditor.style.display =
    taskEditor.style.display == "flex" ? "none" : "flex";
});


//FUNÇÂO PARA EXIBIR A CAIXA DE OPÇÔES
function createCustomSelect(btnId, optionsId) {
  const btn = document.getElementById(btnId);
  const options = document.getElementById(optionsId);
  const optionItems = [...options.children];

  btn.addEventListener("click", () => {
    options.style.display = options.style.display == "flex" ? "none" : "flex";
    options.style.left = `${btn.getBoundingClientRect().left / 1.5}px`;
    options.style.top = `${btn.getBoundingClientRect().height * 2.5}px`;
  });

  optionItems.map((option) => {
    option.addEventListener("click", () => {
      // Atualiza o valor selecionado
      btn.setAttribute("data-value", option.getAttribute("data-value"));
      btn.innerHTML = option.innerHTML;

      // Esconde as opções
      options.style.display = "none";
    });
  });
}

createCustomSelect("slPriority", "optionsPriority");
createCustomSelect("slTimer", "optionsTimer");
createCustomSelect("slTag", "optionsTag");

//ADICIONAR NOVA TAREFA

const btnSave = document.getElementById("editorBtnSave");
const btnCancel = document.getElementById("editorBtnCancel");
console.log(btnCancel);
btnCancel.addEventListener("click",()=>{
  taskEditor.style.display = "none";
});

btnSave.addEventListener("click", () => {
  //PEGANDO OS DADOS
  const taskId = document.getElementById("taskId").value;
  console.log(taskId);
  const taskText = document.getElementById("txtTaskName").value;
  if (taskText == "") {
    Swal.fire({
      title: "AVISO!",
      text: `ADICIONE UM NOME PARA A TAREFA`,
      icon: "error",
    });
    return;
  }
  const taskPrio = document
    .getElementById("slPriority")
    .getAttribute("data-value");
  const taskTimer = document
    .getElementById("slTimer")
    .getAttribute("data-value");
  const taskTag = document.getElementById("slTag").getAttribute("data-value");

  //ORGANIZANDO OS DADOS COM UM FORMDATA
  let formData = new FormData();
  formData.append("taskId", taskId);
  formData.append("taskText", taskText);
  formData.append("taskPrio", taskPrio);
  formData.append("taskTimer", taskTimer);
  formData.append("taskTag", taskTag);
  // console.log(`Form: ${formData}`);

  let header = {
    method: "POST",
    body: formData,
  };

  let endpoint = "./App/Model/addTask.php";

  //UTILIZANDO A API DO PHP
  // fetch(endpoint, header)
  //   .then((response) => {
  //     return response.json();
  //   })
  //   .then((response) => {
  //     console.log(response);
  //     window.location.reload();
  //     // Swal.fire({
  //     //   title: response['title'],
  //     //   text: response['msg'],
  //     //   icon: response['icon'],
  //     // });
  //   });
     
  // console.log(
  //   `Text: ${taskText} | Timer: ${taskTimer} | Prio: ${taskPrio} | Tag: ${taskTag}`
  // );
});
