<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

        <li class="nav-heading">Sistemas</li>

        <li class="nav-item">
            <a class="nav-link " href="../index.php">
                <i class="bi bi-grid"></i>
                <span>Home</span>
            </a>
        </li><!-- End Dashboard Nav -->
        <hr>
        <li class="nav-heading">Paginas</li>

        <li class="nav-item">
            <a class="nav-link collapsed" href="#">
                <i class="bi bi-person"></i>
                <span>Meu perfil</span>
            </a>
        </li>

        <li class="nav-item" style="display: <?= $_SESSION['admin'] == 1 ?: "none" ?>;">
            <a class="nav-link collapsed" href="#">
                <i class="bi bi-gear"></i>
                <span>Configurações</span>
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link collapsed" href="#">
                <i class="bi bi-question-circle"></i>
                <span>Ajuda</span>
            </a>
        </li>

    </ul>

</aside><!-- End Sidebar-->