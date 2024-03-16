<x-layout>

    <x-slot:btn>
        <a href="#" class="btn btn-primary">
            + Nova Tarefa
        </a>
    </x-slot:btn>

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
            @foreach ($tasks as $task)
                <div class="task">
                    <div class="title">
                        <input type="checkbox" name="" id="">
                        <div class="task_title">{{$task->title}}</div>
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
            @endforeach
            {{-- <x-task /> --}}
        </div>
    </section>
</x-layout>
