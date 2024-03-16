<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300..900;1,300..900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="assets/css/style.css"/>



    <title>To do</title>
</head>
<body>
    <div class="container">
        <div class="side-bar">
            <img src="assets/images/logo.png" alt="Logo">
        </div>
        <div class="content">
            <nav>
                <a href="#" class="btn btn-primary">+ Nova Tarefa </a>
            </nav>

            <main>
                <section class="graph">
                    <div class="graph_header">
                        <h2>Progresso do Dia</h2>
                        <div class="graph_header-date">
                            <img src="assets/images/icon-prev.png" alt="">
                            01 de abril
                            <img src="assets/images/icon-next.png" alt="">
                        </div>
                    </div>

                    <div class="graph_header-subtitle">
                        Tarefas: <b>3/6</b>
                    </div>

                    <div class="content-placeholder">
                        <div class="graph-placeholder">

                        </div>
                    </div>

                    <div class="task_left_footer">
                        <img src="assets/images/icon-info.png" alt="">
                        Restam 3 Tarefas a serem concluídas
                    </div>
                </section>

                <section class="list">
                    <div class="list_header">
                        <select class="list_header-select" id="">
                            <option value="#">Todas as Tarefas</option>
                        </select>
                    </div>

                    <div class="task_list">

                       <div class="task">
                            <div class="title">
                                <input type="checkbox" name="" id="">
                                <div class="task_title">Titulo da tarefa</div>
                            </div>
                            <div class="priority">
                                <div class="sphere"></div>
                                <h6>Alta Prioridade</h6>
                            </div>
                            <div class="action">
                                <div class="btn_action">
                                    <a href="#">
                                        <img src="assets/images/icon-edit.png" alt="">
                                    </a>
                                    <a href="#">
                                        <img src="assets/images/icon-delete.png" alt="">
                                    </a>
                                </div>
                            </div>

                       </div>

                    </div>
                </section>
        </div>
    </div>
</body>
</html>
