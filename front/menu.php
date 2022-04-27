<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

        <li class="nav-heading">Sistemas</li>

        <li class="nav-item">
            <a class="nav-link <?= $_GET['pg'] == NULL ?: "collapsed" ?>" href="../index.php">
                <i class="bi bi-grid"></i>
                <span>Home</span>
            </a>
        </li><!-- End Dashboard Nav -->
        <hr>
        <li class="nav-heading">Paginas</li>

        <li class="nav-item collapsed">
            <a class="nav-link collapsed" href="javascript:" data-bs-toggle="modal" data-bs-target="#ModalPerfil">
                <i class="bi bi-person"></i>
                <span>Meu perfil</span>
            </a>
        </li>

        <li class="nav-item" style="display: <?= $_SESSION['admin'] == 1 ? "block" : "none" ?>;">
            <a class="nav-link  <?= $_GET['pg'] == 1 ?: "collapsed" ?>" data-bs-target="#charts-nav" data-bs-toggle="collapse" href="#">
                <i class="bi bi-gear"></i><span>Configurações</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="charts-nav" class="nav-content collapse" data-bs-parent="#sidebar-nav">
                <li>
                    <a href="usuarios.php?pg=1&conf=1" <?= $_GET['conf'] == 1 ? "class='active'" : "" ?>>
                        <i class="bi bi-circle"></i><span>Lista Usuários</span>
                    </a>
                </li>
                <li>
                    <a href="dropdowns.php?pg=1&conf=2" <?= $_GET['conf'] == 2 ? "class='active'" : "" ?>>
                        <i class="bi bi-circle"></i><span>Menu suspenso</span>
                    </a>
                </li>
                <li>
                    <a href="sistema.php?pg=1&conf=3" <?= $_GET['conf'] == 3 ? "class='active'" : "" ?>>
                        <i class="bi bi-circle"></i><span>Sistemas</span>
                    </a>
                </li>
                <li>
                    <a href="api.php?pg=1&conf=4" <?= $_GET['conf'] == 4 ? "class='active'" : "" ?>>
                        <i class="bi bi-circle"></i><span>API</span>
                    </a>
                </li>
            </ul>
        </li><!-- End Charts Nav -->

        <li class="nav-item">
            <a class="nav-link collapsed" href="#">
                <i class="bi bi-question-circle"></i>
                <span>Ajuda</span>
            </a>
        </li>

    </ul>

</aside><!-- End Sidebar-->