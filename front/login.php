<?php
session_start();

require_once('head.php');
?>

<main>
  <div class="container">

    <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">

            <div class="card mb-3">

              <div class="card-body">

                <div class="d-flex justify-content-center py-4">
                  <a href="index.html" class="logo d-flex align-items-center w-auto">
                    <img src="assets/img/logo.png" alt="">
                    <span class="d-none d-lg-block"><img src="../img/logo.png" id="logo"></span>
                  </a>
                </div><!-- End Logo -->

                <form class="row g-3 needs-validation" novalidate>

                  <div class="col-12">
                    <div class="input-group has-validation">
                      <span class="input-group-text" id="inputGroupPrepend"><i class="bi bi-envelope"></i></span>
                      <input type="text" name="username" placeholder="E-mail" class="form-control" id="yourUsername" required>
                      <div class="invalid-feedback">Por favor, insira seu e-mail.</div>
                    </div>
                  </div>

                  <div class="col-12">
                    <div class="input-group has-validation">
                      <span class="input-group-text" id="inputGroupPrepend"><i class="bi bi-lock"></i></span>
                      <input type="text" name="password" placeholder="Usuário" class="form-control" id="password" required>
                      <div class="invalid-feedback">Por favor, insira sua senha.</div>
                    </div>
                  </div>

                  <div class="col-12">
                    <button class="btn btn-primary w-100" type="submit">Entrar</button>
                  </div>
                  <div class="col-12 text-center">
                    <p class="small mb-0">Criar uma conta ou esqueceu a senha</p>
                    <p class="small mb-0">entre em contato <a href="http://<?= $_SESSION['ip_servidor'] ?>/lista/filiais/index.php?dep=1,89" target="_blank">departamento TI</a></p>
                  </div>
                </form>

              </div>
            </div>
          </div>
        </div>
      </div>

    </section>

  </div>
</main><!-- End #main -->