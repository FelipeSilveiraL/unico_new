<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

        <li class="nav-heading">Notas</li>

        <li class="nav-item">
            <a class="nav-link <?= $_GET['pg'] == 1 ?: "collapsed" ?>" href="index.php?pg=1">
                <i class="bi bi-grid"></i>
                <span>SISTEMA NOTAS</span>
            </a>
        </li><!-- End Dashboard Nav -->

        <hr>

        <li class="nav-heading">Paginas</li>

        <!-- <li class="nav-item">
            <a class="nav-link collapsed" href="javascript:" data-bs-toggle="modal" data-bs-target="#ModalPerfil">
                <i class="bi bi-person"></i>
                <span>Meu perfil</span>
            </a>
        </li> -->

        <!-- <li class="nav-item">

            <a class="nav-link" data-bs-target="#charts-nav" data-bs-toggle="collapse" href="#">
                <i class="bi bi-gear"></i><span>Configurações</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="charts-nav" class="nav-content collapse" data-bs-parent="#sidebar-nav">
                <li>
                    <a href="">
                        <i class="bi bi-circle"></i><span>Lista Usuários</span>
                    </a>
                </li>
                <li>
                    <a href="">
                        <i class="bi bi-circle"></i><span>Menu suspenso</span>
                    </a>
                </li>
                <li>
                    <a href="">
                        <i class="bi bi-circle"></i><span>Sistemas</span>
                    </a>
                </li>
                <li>
                    <a href="">
                        <i class="bi bi-circle"></i><span>API</span>
                    </a>
                </li>
            </ul>
        </li> -->
        <!-- End Charts Nav -->

        <li class="nav-item">
            <a class="nav-link" href="">
                <i class="bi bi-question-circle"></i>
                <span>Ajuda?</span>
            </a>
        </li>
    </ul>
</aside><!-- End Sidebar-->