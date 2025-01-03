<?php 
  require_once("vendor/autoload.php")
?>
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="style/style.css" />
    <link rel="stylesheet" href="style/reset.css" />
    <link rel="stylesheet" href="style/task.css" />
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <title>Home</title>
  </head>
  <body>
    <header class="menu">
      <a href="index.html" class="btnLink">
        <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
          <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
          <g
            id="SVGRepo_tracerCarrier"
            stroke-linecap="round"
            stroke-linejoin="round"
          ></g>
          <g id="SVGRepo_iconCarrier">
            <path
              d="M16.19 2H7.81C4.17 2 2 4.17 2 7.81V16.19C2 19.83 4.17 22 7.81 22H16.19C19.83 22 22 19.83 22 16.19V7.81C22 4.17 19.83 2 16.19 2ZM9.97 14.9L7.72 17.15C7.57 17.3 7.38 17.37 7.19 17.37C7 17.37 6.8 17.3 6.66 17.15L5.91 16.4C5.61 16.11 5.61 15.63 5.91 15.34C6.2 15.05 6.67 15.05 6.97 15.34L7.19 15.56L8.91 13.84C9.2 13.55 9.67 13.55 9.97 13.84C10.26 14.13 10.26 14.61 9.97 14.9ZM9.97 7.9L7.72 10.15C7.57 10.3 7.38 10.37 7.19 10.37C7 10.37 6.8 10.3 6.66 10.15L5.91 9.4C5.61 9.11 5.61 8.63 5.91 8.34C6.2 8.05 6.67 8.05 6.97 8.34L7.19 8.56L8.91 6.84C9.2 6.55 9.67 6.55 9.97 6.84C10.26 7.13 10.26 7.61 9.97 7.9ZM17.56 16.62H12.31C11.9 16.62 11.56 16.28 11.56 15.87C11.56 15.46 11.9 15.12 12.31 15.12H17.56C17.98 15.12 18.31 15.46 18.31 15.87C18.31 16.28 17.98 16.62 17.56 16.62ZM17.56 9.62H12.31C11.9 9.62 11.56 9.28 11.56 8.87C11.56 8.46 11.9 8.12 12.31 8.12H17.56C17.98 8.12 18.31 8.46 18.31 8.87C18.31 9.28 17.98 9.62 17.56 9.62Z"
              fill="var(--cor2)"
            ></path>
          </g>
        </svg>
      </a>
      <div class="containerAdd">
        <button class="menuBtnAddTask" id="menuBtnAddTask">
          <svg
            viewBox="0 0 24 24"
            fill="#DE2424"
            xmlns="http://www.w3.org/2000/svg"
          >
            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
            <g
              id="SVGRepo_tracerCarrier"
              stroke-linecap="round"
              stroke-linejoin="round"
            ></g>
            <g id="SVGRepo_iconCarrier">
              <path
                fill-rule="evenodd"
                clip-rule="evenodd"
                d="M12 22C17.5228 22 22 17.5228 22 12C22 6.47715 17.5228 2 12 2C6.47715 2 2 6.47715 2 12C2 17.5228 6.47715 22 12 22ZM12.75 9C12.75 8.58579 12.4142 8.25 12 8.25C11.5858 8.25 11.25 8.58579 11.25 9L11.25 11.25H9C8.58579 11.25 8.25 11.5858 8.25 12C8.25 12.4142 8.58579 12.75 9 12.75H11.25V15C11.25 15.4142 11.5858 15.75 12 15.75C12.4142 15.75 12.75 15.4142 12.75 15L12.75 12.75H15C15.4142 12.75 15.75 12.4142 15.75 12C15.75 11.5858 15.4142 11.25 15 11.25H12.75V9Z"
                fill="var(--cor2)"
              ></path>
            </g>
          </svg>
        </button>
      </div>
      <a href="analitycs.html" class="btnLink">
        <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
          <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
          <g
            id="SVGRepo_tracerCarrier"
            stroke-linecap="round"
            stroke-linejoin="round"
          ></g>
          <g id="SVGRepo_iconCarrier">
            <path
              d="M16.19 2H7.81C4.17 2 2 4.17 2 7.81V16.18C2 19.83 4.17 22 7.81 22H16.18C19.82 22 21.99 19.83 21.99 16.19V7.81C22 4.17 19.83 2 16.19 2ZM9.91 16.19C9.91 16.83 9.39 17.35 8.74 17.35C8.1 17.35 7.58 16.83 7.58 16.19V12.93C7.58 12.29 8.1 11.77 8.74 11.77C9.39 11.77 9.91 12.29 9.91 12.93V16.19ZM16.42 16.19C16.42 16.83 15.9 17.35 15.26 17.35C14.61 17.35 14.09 16.83 14.09 16.19V7.81C14.09 7.17 14.61 6.65 15.26 6.65C15.9 6.65 16.42 7.17 16.42 7.81V16.19Z"
              fill="var(--cor3)"
            ></path>
          </g>
        </svg>
      </a>
    </header>
    <section class="painel">
      <div class="finishedPainel">
        <h1>Concluidos</h1>
        <div class="divFinishCount">
          <p id="finishNum">0</p>
          /
          <p id="totalNum">0</p>
        </div>
      </div>
      <div class="taskList">
        <!-- <div class="task">
          <button name="btnCheck" id="rdTask" class="btnCheck_p1"></button>
          <p id="taskContent" class="taskContent">Nome da Tarefa</p>
          <div class="taskOptions">
            <div class="taskTimer">15:00</div>
            <button id="btnPlay" class="btnPlay">
              <img src="images/playIcon.svg" alt="playIcon" />
            </button>
            <button class="btnShow" id="btnShow">
              <img src="images/showIcon.svg" alt="showIcon" />
            </button>
          </div>
        </div> -->
        <!-- <div class="optionContainer" id="optionContainer">
          <button id="btnEdit">
            <img src="images/editIcon.svg" alt="editIcon" />
          </button>
          <button id="btnDel">
            <img src="images/deleteIcon.svg" alt="deleteIcon" />
          </button>
        </div> -->
        <div class="taskEditor" id="taskEditor">
          <input
            type="text"
            id="txtTaskName"
            name="txtTaskName"
            class="taskInput"
            placeholder="Nome da tarefa"
          />
          <input
            type="num"
            id="taskId"
            name="taskId"
            class="taskId"
            hidden
            disabled
          />
          <div class="settingsContent" id="settingsContent">
            <button class="slPriority" id="slPriority" data-value="4">
              <svg
                class="iconOption"
                viewBox="0 0 16 16"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
              >
                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                <g
                  id="SVGRepo_tracerCarrier"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                ></g>
                <g id="SVGRepo_iconCarrier">
                  <path
                    d="M1 1V16H3V10H7L9 12H15V3H9L7 1H1Z"
                    fill="#000000"
                  ></path>
                </g>
              </svg>
              <span>Prioridade</span>
            </button>
            <ul class="optionsPriority" id="optionsPriority">
              <li class="p1" data-value="1">
                <svg
                  class="iconOption"
                  viewBox="0 0 16 16"
                  fill="none"
                  xmlns="http://www.w3.org/2000/svg"
                >
                  <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                  <g
                    id="SVGRepo_tracerCarrier"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                  ></g>
                  <g id="SVGRepo_iconCarrier">
                    <path
                      d="M1 1V16H3V10H7L9 12H15V3H9L7 1H1Z"
                      fill="#000000"
                    ></path>
                  </g>
                </svg>
                <span>P1</span>
              </li>
              <li class="p2" data-value="2">
                <svg
                  class="iconOption"
                  viewBox="0 0 16 16"
                  fill="none"
                  xmlns="http://www.w3.org/2000/svg"
                >
                  <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                  <g
                    id="SVGRepo_tracerCarrier"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                  ></g>
                  <g id="SVGRepo_iconCarrier">
                    <path
                      d="M1 1V16H3V10H7L9 12H15V3H9L7 1H1Z"
                      fill="#000000"
                    ></path>
                  </g>
                </svg>
                <span>P2</span>
              </li>
              <li class="p3" data-value="3">
                <svg
                  class="iconOption"
                  viewBox="0 0 16 16"
                  fill="none"
                  xmlns="http://www.w3.org/2000/svg"
                >
                  <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                  <g
                    id="SVGRepo_tracerCarrier"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                  ></g>
                  <g id="SVGRepo_iconCarrier">
                    <path
                      d="M1 1V16H3V10H7L9 12H15V3H9L7 1H1Z"
                      fill="#000000"
                    ></path>
                  </g>
                </svg>
                <span>P3</span>
              </li>
            </ul>
            <button class="slTimer" id="slTimer" data-value="0">
              <svg
                class="iconOption"
                viewBox="0 0 24 24"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
                stroke="#000000"
                stroke-width="0.8160000000000001"
              >
                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                <g
                  id="SVGRepo_tracerCarrier"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                ></g>
                <g id="SVGRepo_iconCarrier">
                  <g id="style=stroke">
                    <g id="clock-stand">
                      <path
                        id="line (Stroke)"
                        fill-rule="evenodd"
                        clip-rule="evenodd"
                        d="M17.4697 19.9697C17.7626 19.6768 18.2374 19.6768 18.5303 19.9697L20.0303 21.4697C20.3232 21.7626 20.3232 22.2374 20.0303 22.5303C19.7374 22.8232 19.2626 22.8232 18.9697 22.5303L17.4697 21.0303C17.1768 20.7374 17.1768 20.2626 17.4697 19.9697Z"
                        fill="#000000"
                      ></path>
                      <path
                        id="line (Stroke)_2"
                        fill-rule="evenodd"
                        clip-rule="evenodd"
                        d="M6.53033 19.9697C6.23744 19.6768 5.76256 19.6768 5.46967 19.9697L3.96967 21.4697C3.67678 21.7626 3.67678 22.2374 3.96967 22.5303C4.26256 22.8232 4.73744 22.8232 5.03033 22.5303L6.53033 21.0303C6.82322 20.7374 6.82322 20.2626 6.53033 19.9697Z"
                        fill="#000000"
                      ></path>
                      <path
                        id="vector (Stroke)"
                        fill-rule="evenodd"
                        clip-rule="evenodd"
                        d="M12 4.75C7.44621 4.75 3.75 8.44621 3.75 13C3.75 17.5538 7.44621 21.25 12 21.25C16.5538 21.25 20.25 17.5538 20.25 13C20.25 8.44621 16.5538 4.75 12 4.75ZM2.25 13C2.25 7.61779 6.61779 3.25 12 3.25C17.3822 3.25 21.75 7.61779 21.75 13C21.75 18.3822 17.3822 22.75 12 22.75C6.61779 22.75 2.25 18.3822 2.25 13Z"
                        fill="#000000"
                      ></path>
                      <path
                        id="vector (Stroke)_2"
                        fill-rule="evenodd"
                        clip-rule="evenodd"
                        d="M11.667 8.20898C12.0812 8.20898 12.417 8.54477 12.417 8.95898V12.649C12.417 12.771 12.4646 12.9586 12.5772 13.1561C12.6899 13.3536 12.827 13.4899 12.9313 13.5518L12.9333 13.5529L15.7233 15.2179C16.079 15.4302 16.1953 15.8906 15.983 16.2463C15.7708 16.602 15.3103 16.7183 14.9546 16.506L12.1666 14.8422C12.1663 14.842 12.1659 14.8418 12.1656 14.8416C11.7844 14.6154 11.4809 14.2615 11.2742 13.8991C11.0674 13.5364 10.917 13.0939 10.917 12.649V8.95898C10.917 8.54477 11.2528 8.20898 11.667 8.20898Z"
                        fill="#000000"
                      ></path>
                      <path
                        id="line (Stroke)_3"
                        fill-rule="evenodd"
                        clip-rule="evenodd"
                        d="M17.4379 1.50345C17.7121 1.19304 18.1861 1.16374 18.4965 1.438L22.2434 4.74864C22.5539 5.0229 22.5832 5.49687 22.3089 5.80728C22.0346 6.11769 21.5607 6.14699 21.2503 5.87273L17.5033 2.56209C17.1929 2.28783 17.1636 1.81386 17.4379 1.50345Z"
                        fill="#000000"
                      ></path>
                      <path
                        id="line (Stroke)_4"
                        fill-rule="evenodd"
                        clip-rule="evenodd"
                        d="M6.56203 1.50345C6.28776 1.19304 5.81379 1.16374 5.50339 1.438L1.75643 4.74864C1.44602 5.0229 1.41672 5.49687 1.69098 5.80728C1.96524 6.11769 2.43921 6.14699 2.74962 5.87273L6.49658 2.56209C6.80699 2.28783 6.83629 1.81386 6.56203 1.50345Z"
                        fill="#000000"
                      ></path>
                    </g>
                  </g>
                </g>
              </svg>
              <span>Timer</span>
            </button>
            <ul class="optionsTimer" id="optionsTimer">
              <li class="op1" data-value="25">
                <svg
                  class="iconOption"
                  viewBox="0 0 24 24"
                  fill="none"
                  xmlns="http://www.w3.org/2000/svg"
                  stroke="#000000"
                  stroke-width="0.8160000000000001"
                >
                  <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                  <g
                    id="SVGRepo_tracerCarrier"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                  ></g>
                  <g id="SVGRepo_iconCarrier">
                    <g id="style=stroke">
                      <g id="clock-stand">
                        <path
                          id="line (Stroke)"
                          fill-rule="evenodd"
                          clip-rule="evenodd"
                          d="M17.4697 19.9697C17.7626 19.6768 18.2374 19.6768 18.5303 19.9697L20.0303 21.4697C20.3232 21.7626 20.3232 22.2374 20.0303 22.5303C19.7374 22.8232 19.2626 22.8232 18.9697 22.5303L17.4697 21.0303C17.1768 20.7374 17.1768 20.2626 17.4697 19.9697Z"
                          fill="#000000"
                        ></path>
                        <path
                          id="line (Stroke)_2"
                          fill-rule="evenodd"
                          clip-rule="evenodd"
                          d="M6.53033 19.9697C6.23744 19.6768 5.76256 19.6768 5.46967 19.9697L3.96967 21.4697C3.67678 21.7626 3.67678 22.2374 3.96967 22.5303C4.26256 22.8232 4.73744 22.8232 5.03033 22.5303L6.53033 21.0303C6.82322 20.7374 6.82322 20.2626 6.53033 19.9697Z"
                          fill="#000000"
                        ></path>
                        <path
                          id="vector (Stroke)"
                          fill-rule="evenodd"
                          clip-rule="evenodd"
                          d="M12 4.75C7.44621 4.75 3.75 8.44621 3.75 13C3.75 17.5538 7.44621 21.25 12 21.25C16.5538 21.25 20.25 17.5538 20.25 13C20.25 8.44621 16.5538 4.75 12 4.75ZM2.25 13C2.25 7.61779 6.61779 3.25 12 3.25C17.3822 3.25 21.75 7.61779 21.75 13C21.75 18.3822 17.3822 22.75 12 22.75C6.61779 22.75 2.25 18.3822 2.25 13Z"
                          fill="#000000"
                        ></path>
                        <path
                          id="vector (Stroke)_2"
                          fill-rule="evenodd"
                          clip-rule="evenodd"
                          d="M11.667 8.20898C12.0812 8.20898 12.417 8.54477 12.417 8.95898V12.649C12.417 12.771 12.4646 12.9586 12.5772 13.1561C12.6899 13.3536 12.827 13.4899 12.9313 13.5518L12.9333 13.5529L15.7233 15.2179C16.079 15.4302 16.1953 15.8906 15.983 16.2463C15.7708 16.602 15.3103 16.7183 14.9546 16.506L12.1666 14.8422C12.1663 14.842 12.1659 14.8418 12.1656 14.8416C11.7844 14.6154 11.4809 14.2615 11.2742 13.8991C11.0674 13.5364 10.917 13.0939 10.917 12.649V8.95898C10.917 8.54477 11.2528 8.20898 11.667 8.20898Z"
                          fill="#000000"
                        ></path>
                        <path
                          id="line (Stroke)_3"
                          fill-rule="evenodd"
                          clip-rule="evenodd"
                          d="M17.4379 1.50345C17.7121 1.19304 18.1861 1.16374 18.4965 1.438L22.2434 4.74864C22.5539 5.0229 22.5832 5.49687 22.3089 5.80728C22.0346 6.11769 21.5607 6.14699 21.2503 5.87273L17.5033 2.56209C17.1929 2.28783 17.1636 1.81386 17.4379 1.50345Z"
                          fill="#000000"
                        ></path>
                        <path
                          id="line (Stroke)_4"
                          fill-rule="evenodd"
                          clip-rule="evenodd"
                          d="M6.56203 1.50345C6.28776 1.19304 5.81379 1.16374 5.50339 1.438L1.75643 4.74864C1.44602 5.0229 1.41672 5.49687 1.69098 5.80728C1.96524 6.11769 2.43921 6.14699 2.74962 5.87273L6.49658 2.56209C6.80699 2.28783 6.83629 1.81386 6.56203 1.50345Z"
                          fill="#000000"
                        ></path>
                      </g>
                    </g>
                  </g>
                </svg>
                <span>25:00</span>
              </li>
              <li class="op2" data-value="30">
                <svg
                  class="iconOption"
                  viewBox="0 0 24 24"
                  fill="none"
                  xmlns="http://www.w3.org/2000/svg"
                  stroke="#000000"
                  stroke-width="0.8160000000000001"
                >
                  <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                  <g
                    id="SVGRepo_tracerCarrier"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                  ></g>
                  <g id="SVGRepo_iconCarrier">
                    <g id="style=stroke">
                      <g id="clock-stand">
                        <path
                          id="line (Stroke)"
                          fill-rule="evenodd"
                          clip-rule="evenodd"
                          d="M17.4697 19.9697C17.7626 19.6768 18.2374 19.6768 18.5303 19.9697L20.0303 21.4697C20.3232 21.7626 20.3232 22.2374 20.0303 22.5303C19.7374 22.8232 19.2626 22.8232 18.9697 22.5303L17.4697 21.0303C17.1768 20.7374 17.1768 20.2626 17.4697 19.9697Z"
                          fill="#000000"
                        ></path>
                        <path
                          id="line (Stroke)_2"
                          fill-rule="evenodd"
                          clip-rule="evenodd"
                          d="M6.53033 19.9697C6.23744 19.6768 5.76256 19.6768 5.46967 19.9697L3.96967 21.4697C3.67678 21.7626 3.67678 22.2374 3.96967 22.5303C4.26256 22.8232 4.73744 22.8232 5.03033 22.5303L6.53033 21.0303C6.82322 20.7374 6.82322 20.2626 6.53033 19.9697Z"
                          fill="#000000"
                        ></path>
                        <path
                          id="vector (Stroke)"
                          fill-rule="evenodd"
                          clip-rule="evenodd"
                          d="M12 4.75C7.44621 4.75 3.75 8.44621 3.75 13C3.75 17.5538 7.44621 21.25 12 21.25C16.5538 21.25 20.25 17.5538 20.25 13C20.25 8.44621 16.5538 4.75 12 4.75ZM2.25 13C2.25 7.61779 6.61779 3.25 12 3.25C17.3822 3.25 21.75 7.61779 21.75 13C21.75 18.3822 17.3822 22.75 12 22.75C6.61779 22.75 2.25 18.3822 2.25 13Z"
                          fill="#000000"
                        ></path>
                        <path
                          id="vector (Stroke)_2"
                          fill-rule="evenodd"
                          clip-rule="evenodd"
                          d="M11.667 8.20898C12.0812 8.20898 12.417 8.54477 12.417 8.95898V12.649C12.417 12.771 12.4646 12.9586 12.5772 13.1561C12.6899 13.3536 12.827 13.4899 12.9313 13.5518L12.9333 13.5529L15.7233 15.2179C16.079 15.4302 16.1953 15.8906 15.983 16.2463C15.7708 16.602 15.3103 16.7183 14.9546 16.506L12.1666 14.8422C12.1663 14.842 12.1659 14.8418 12.1656 14.8416C11.7844 14.6154 11.4809 14.2615 11.2742 13.8991C11.0674 13.5364 10.917 13.0939 10.917 12.649V8.95898C10.917 8.54477 11.2528 8.20898 11.667 8.20898Z"
                          fill="#000000"
                        ></path>
                        <path
                          id="line (Stroke)_3"
                          fill-rule="evenodd"
                          clip-rule="evenodd"
                          d="M17.4379 1.50345C17.7121 1.19304 18.1861 1.16374 18.4965 1.438L22.2434 4.74864C22.5539 5.0229 22.5832 5.49687 22.3089 5.80728C22.0346 6.11769 21.5607 6.14699 21.2503 5.87273L17.5033 2.56209C17.1929 2.28783 17.1636 1.81386 17.4379 1.50345Z"
                          fill="#000000"
                        ></path>
                        <path
                          id="line (Stroke)_4"
                          fill-rule="evenodd"
                          clip-rule="evenodd"
                          d="M6.56203 1.50345C6.28776 1.19304 5.81379 1.16374 5.50339 1.438L1.75643 4.74864C1.44602 5.0229 1.41672 5.49687 1.69098 5.80728C1.96524 6.11769 2.43921 6.14699 2.74962 5.87273L6.49658 2.56209C6.80699 2.28783 6.83629 1.81386 6.56203 1.50345Z"
                          fill="#000000"
                        ></path>
                      </g>
                    </g>
                  </g>
                </svg>
                <span>30:00</span>
              </li>
              <li class="op3" data-value="50">
                <svg
                  class="iconOption"
                  viewBox="0 0 24 24"
                  fill="none"
                  xmlns="http://www.w3.org/2000/svg"
                  stroke="#000000"
                  stroke-width="0.8160000000000001"
                >
                  <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                  <g
                    id="SVGRepo_tracerCarrier"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                  ></g>
                  <g id="SVGRepo_iconCarrier">
                    <g id="style=stroke">
                      <g id="clock-stand">
                        <path
                          id="line (Stroke)"
                          fill-rule="evenodd"
                          clip-rule="evenodd"
                          d="M17.4697 19.9697C17.7626 19.6768 18.2374 19.6768 18.5303 19.9697L20.0303 21.4697C20.3232 21.7626 20.3232 22.2374 20.0303 22.5303C19.7374 22.8232 19.2626 22.8232 18.9697 22.5303L17.4697 21.0303C17.1768 20.7374 17.1768 20.2626 17.4697 19.9697Z"
                          fill="#000000"
                        ></path>
                        <path
                          id="line (Stroke)_2"
                          fill-rule="evenodd"
                          clip-rule="evenodd"
                          d="M6.53033 19.9697C6.23744 19.6768 5.76256 19.6768 5.46967 19.9697L3.96967 21.4697C3.67678 21.7626 3.67678 22.2374 3.96967 22.5303C4.26256 22.8232 4.73744 22.8232 5.03033 22.5303L6.53033 21.0303C6.82322 20.7374 6.82322 20.2626 6.53033 19.9697Z"
                          fill="#000000"
                        ></path>
                        <path
                          id="vector (Stroke)"
                          fill-rule="evenodd"
                          clip-rule="evenodd"
                          d="M12 4.75C7.44621 4.75 3.75 8.44621 3.75 13C3.75 17.5538 7.44621 21.25 12 21.25C16.5538 21.25 20.25 17.5538 20.25 13C20.25 8.44621 16.5538 4.75 12 4.75ZM2.25 13C2.25 7.61779 6.61779 3.25 12 3.25C17.3822 3.25 21.75 7.61779 21.75 13C21.75 18.3822 17.3822 22.75 12 22.75C6.61779 22.75 2.25 18.3822 2.25 13Z"
                          fill="#000000"
                        ></path>
                        <path
                          id="vector (Stroke)_2"
                          fill-rule="evenodd"
                          clip-rule="evenodd"
                          d="M11.667 8.20898C12.0812 8.20898 12.417 8.54477 12.417 8.95898V12.649C12.417 12.771 12.4646 12.9586 12.5772 13.1561C12.6899 13.3536 12.827 13.4899 12.9313 13.5518L12.9333 13.5529L15.7233 15.2179C16.079 15.4302 16.1953 15.8906 15.983 16.2463C15.7708 16.602 15.3103 16.7183 14.9546 16.506L12.1666 14.8422C12.1663 14.842 12.1659 14.8418 12.1656 14.8416C11.7844 14.6154 11.4809 14.2615 11.2742 13.8991C11.0674 13.5364 10.917 13.0939 10.917 12.649V8.95898C10.917 8.54477 11.2528 8.20898 11.667 8.20898Z"
                          fill="#000000"
                        ></path>
                        <path
                          id="line (Stroke)_3"
                          fill-rule="evenodd"
                          clip-rule="evenodd"
                          d="M17.4379 1.50345C17.7121 1.19304 18.1861 1.16374 18.4965 1.438L22.2434 4.74864C22.5539 5.0229 22.5832 5.49687 22.3089 5.80728C22.0346 6.11769 21.5607 6.14699 21.2503 5.87273L17.5033 2.56209C17.1929 2.28783 17.1636 1.81386 17.4379 1.50345Z"
                          fill="#000000"
                        ></path>
                        <path
                          id="line (Stroke)_4"
                          fill-rule="evenodd"
                          clip-rule="evenodd"
                          d="M6.56203 1.50345C6.28776 1.19304 5.81379 1.16374 5.50339 1.438L1.75643 4.74864C1.44602 5.0229 1.41672 5.49687 1.69098 5.80728C1.96524 6.11769 2.43921 6.14699 2.74962 5.87273L6.49658 2.56209C6.80699 2.28783 6.83629 1.81386 6.56203 1.50345Z"
                          fill="#000000"
                        ></path>
                      </g>
                    </g>
                  </g>
                </svg>
                <span>50:00</span>
              </li>
            </ul>
            <button class="slTag" id="slTag" data-value="none">
              <svg
                class="iconOption"
                viewBox="0 0 24 24"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
              >
                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                <g
                  id="SVGRepo_tracerCarrier"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                ></g>
                <g id="SVGRepo_iconCarrier">
                  <path
                    d="M7.0498 7.0498H7.0598M10.5118 3H7.8C6.11984 3 5.27976 3 4.63803 3.32698C4.07354 3.6146 3.6146 4.07354 3.32698 4.63803C3 5.27976 3 6.11984 3 7.8V10.5118C3 11.2455 3 11.6124 3.08289 11.9577C3.15638 12.2638 3.27759 12.5564 3.44208 12.8249C3.6276 13.1276 3.88703 13.387 4.40589 13.9059L9.10589 18.6059C10.2939 19.7939 10.888 20.388 11.5729 20.6105C12.1755 20.8063 12.8245 20.8063 13.4271 20.6105C14.112 20.388 14.7061 19.7939 15.8941 18.6059L18.6059 15.8941C19.7939 14.7061 20.388 14.112 20.6105 13.4271C20.8063 12.8245 20.8063 12.1755 20.6105 11.5729C20.388 10.888 19.7939 10.2939 18.6059 9.10589L13.9059 4.40589C13.387 3.88703 13.1276 3.6276 12.8249 3.44208C12.5564 3.27759 12.2638 3.15638 11.9577 3.08289C11.6124 3 11.2455 3 10.5118 3ZM7.5498 7.0498C7.5498 7.32595 7.32595 7.5498 7.0498 7.5498C6.77366 7.5498 6.5498 7.32595 6.5498 7.0498C6.5498 6.77366 6.77366 6.5498 7.0498 6.5498C7.32595 6.5498 7.5498 6.77366 7.5498 7.0498Z"
                    stroke="#000000"
                    stroke-width="2"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                  ></path>
                </g>
              </svg>
              <span>Tag</span>
            </button>
            <ul class="optionsTag" id="optionsTag">
              <li class="op1" data-value="estudo">
                <svg
                  class="iconOption"
                  viewBox="0 0 24 24"
                  fill="none"
                  xmlns="http://www.w3.org/2000/svg"
                >
                  <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                  <g
                    id="SVGRepo_tracerCarrier"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                  ></g>
                  <g id="SVGRepo_iconCarrier">
                    <path
                      d="M7.0498 7.0498H7.0598M10.5118 3H7.8C6.11984 3 5.27976 3 4.63803 3.32698C4.07354 3.6146 3.6146 4.07354 3.32698 4.63803C3 5.27976 3 6.11984 3 7.8V10.5118C3 11.2455 3 11.6124 3.08289 11.9577C3.15638 12.2638 3.27759 12.5564 3.44208 12.8249C3.6276 13.1276 3.88703 13.387 4.40589 13.9059L9.10589 18.6059C10.2939 19.7939 10.888 20.388 11.5729 20.6105C12.1755 20.8063 12.8245 20.8063 13.4271 20.6105C14.112 20.388 14.7061 19.7939 15.8941 18.6059L18.6059 15.8941C19.7939 14.7061 20.388 14.112 20.6105 13.4271C20.8063 12.8245 20.8063 12.1755 20.6105 11.5729C20.388 10.888 19.7939 10.2939 18.6059 9.10589L13.9059 4.40589C13.387 3.88703 13.1276 3.6276 12.8249 3.44208C12.5564 3.27759 12.2638 3.15638 11.9577 3.08289C11.6124 3 11.2455 3 10.5118 3ZM7.5498 7.0498C7.5498 7.32595 7.32595 7.5498 7.0498 7.5498C6.77366 7.5498 6.5498 7.32595 6.5498 7.0498C6.5498 6.77366 6.77366 6.5498 7.0498 6.5498C7.32595 6.5498 7.5498 6.77366 7.5498 7.0498Z"
                      stroke="#000000"
                      stroke-width="2"
                      stroke-linecap="round"
                      stroke-linejoin="round"
                    ></path>
                  </g>
                </svg>
                <span>Estudo</span>
              </li>
              <li class="op2" data-value="trabalho">
                <svg
                  class="iconOption"
                  viewBox="0 0 24 24"
                  fill="none"
                  xmlns="http://www.w3.org/2000/svg"
                >
                  <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                  <g
                    id="SVGRepo_tracerCarrier"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                  ></g>
                  <g id="SVGRepo_iconCarrier">
                    <path
                      d="M7.0498 7.0498H7.0598M10.5118 3H7.8C6.11984 3 5.27976 3 4.63803 3.32698C4.07354 3.6146 3.6146 4.07354 3.32698 4.63803C3 5.27976 3 6.11984 3 7.8V10.5118C3 11.2455 3 11.6124 3.08289 11.9577C3.15638 12.2638 3.27759 12.5564 3.44208 12.8249C3.6276 13.1276 3.88703 13.387 4.40589 13.9059L9.10589 18.6059C10.2939 19.7939 10.888 20.388 11.5729 20.6105C12.1755 20.8063 12.8245 20.8063 13.4271 20.6105C14.112 20.388 14.7061 19.7939 15.8941 18.6059L18.6059 15.8941C19.7939 14.7061 20.388 14.112 20.6105 13.4271C20.8063 12.8245 20.8063 12.1755 20.6105 11.5729C20.388 10.888 19.7939 10.2939 18.6059 9.10589L13.9059 4.40589C13.387 3.88703 13.1276 3.6276 12.8249 3.44208C12.5564 3.27759 12.2638 3.15638 11.9577 3.08289C11.6124 3 11.2455 3 10.5118 3ZM7.5498 7.0498C7.5498 7.32595 7.32595 7.5498 7.0498 7.5498C6.77366 7.5498 6.5498 7.32595 6.5498 7.0498C6.5498 6.77366 6.77366 6.5498 7.0498 6.5498C7.32595 6.5498 7.5498 6.77366 7.5498 7.0498Z"
                      stroke="#000000"
                      stroke-width="2"
                      stroke-linecap="round"
                      stroke-linejoin="round"
                    ></path>
                  </g>
                </svg>
                <span>Trabalho</span>
              </li>
              <li class="op3" data-value="lazer">
                <svg
                  class="iconOption"
                  viewBox="0 0 24 24"
                  fill="none"
                  xmlns="http://www.w3.org/2000/svg"
                >
                  <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                  <g
                    id="SVGRepo_tracerCarrier"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                  ></g>
                  <g id="SVGRepo_iconCarrier">
                    <path
                      d="M7.0498 7.0498H7.0598M10.5118 3H7.8C6.11984 3 5.27976 3 4.63803 3.32698C4.07354 3.6146 3.6146 4.07354 3.32698 4.63803C3 5.27976 3 6.11984 3 7.8V10.5118C3 11.2455 3 11.6124 3.08289 11.9577C3.15638 12.2638 3.27759 12.5564 3.44208 12.8249C3.6276 13.1276 3.88703 13.387 4.40589 13.9059L9.10589 18.6059C10.2939 19.7939 10.888 20.388 11.5729 20.6105C12.1755 20.8063 12.8245 20.8063 13.4271 20.6105C14.112 20.388 14.7061 19.7939 15.8941 18.6059L18.6059 15.8941C19.7939 14.7061 20.388 14.112 20.6105 13.4271C20.8063 12.8245 20.8063 12.1755 20.6105 11.5729C20.388 10.888 19.7939 10.2939 18.6059 9.10589L13.9059 4.40589C13.387 3.88703 13.1276 3.6276 12.8249 3.44208C12.5564 3.27759 12.2638 3.15638 11.9577 3.08289C11.6124 3 11.2455 3 10.5118 3ZM7.5498 7.0498C7.5498 7.32595 7.32595 7.5498 7.0498 7.5498C6.77366 7.5498 6.5498 7.32595 6.5498 7.0498C6.5498 6.77366 6.77366 6.5498 7.0498 6.5498C7.32595 6.5498 7.5498 6.77366 7.5498 7.0498Z"
                      stroke="#000000"
                      stroke-width="2"
                      stroke-linecap="round"
                      stroke-linejoin="round"
                    ></path>
                  </g>
                </svg>
                <span>Lazer</span>
              </li>
            </ul>
          </div>
          <div class="editorBtnContainer">
            <button id="editorBtnSave">Salvar</button>
            <button id="editorBtnCancel">Cancelar</button>
          </div>
        </div>
      </div>
    </section>
    <script src="script/taskEditor.js"></script>
    <script src="script/taskList.js" type="module"></script>
  </body>
</html>
