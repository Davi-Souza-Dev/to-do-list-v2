import Task from "./task.js";
const totalNum = document.getElementById("totalNum");
let arrTasks = [];
window.addEventListener('load',()=>{
    let endpoint = "./App/Model/selectTasks.php";
    fetch(endpoint)
    .then((response)=>(response.json()))
    .then((tasklist)=>{
        tasklist.map((task)=>{
            let taskOB = new Task(
                task[0],
                task[1],
                task[2],
                task[3],
                task[4],
            );
            arrTasks.push(taskOB);
            totalNum.innerHTML = arrTasks.length;
        });
    })
});





