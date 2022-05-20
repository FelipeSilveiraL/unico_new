<?php
$querySenhaBPM = "SELECT * FROM cad_senhaBPM WHERE ID_USUARIO = " . $_SESSION['id_usuario'];
$result = $connNOTAS->query($querySenhaBPM);

if (!$senhaFluig = $result->fetch_assoc()) {
    echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
                <i class="bi bi-exclamation-octagon me-1"></i>
                Preciso que você me informe um usuário para lançarmos as notas no <code>' . $_SESSION['nome_bpm'] . '</code>: <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#senhaFluig">Cadastrar Usuário</button>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            <div class="modal fade" id="senhaFluig" tabindex="-1">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Basic Modal</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        Non omnis incidunt qui sed occaecati magni asperiores est mollitia. Soluta at et reprehenderit. Placeat autem numquam et fuga numquam. Tempora in facere consequatur sit dolor ipsum. Consequatur nemo amet incidunt est facilis. Dolorem neque recusandae quo sit molestias sint dignissimos.
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Save changes</button>
                    </div>
                </div>
            </div>
        </div><!-- End Basic Modal-->';

    require_once('../front/footer.php');
    exit;
}
