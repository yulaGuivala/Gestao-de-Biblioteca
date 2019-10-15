@extends('admin.template_admin.backlogin')
    @section('conteudo')
  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
      <div class="content-wrapper d-flex align-items-center auth px-0">
        <div class="row w-100 mx-0">
          <div class="col-lg-4 mx-auto">
            <div class="auth-form-light text-left py-5 px-4 px-sm-5">
              <div class="brand-logo">
                <a href="../index.php" class="text-danger link" style="text-decoration:none">
                        <b style="font-size:30px; font-family: 'Playfair Display', serif;">SGB</b> <sub>Sistema de Gestão da Biblioteca</sub>
                    </a>
              </div>
              <h4>Ola! Bem vindo</h4>
              <h6 class="font-weight-light">Introduza os dados de autenticação para continuar.</h6>
              <form class="pt-3" id="formulario" method="POST" action="">
                <div class="form-group">
                  <input type="text" class="form-control form-control-lg" id="nome" name="nome" placeholder="Nome de usuário" required>
                </div>
                <div class="form-group">
                  <input type="password" class="form-control form-control-lg" id="asenha" name="asenha" placeholder="Senha" required>
                </div>
                <div class="mt-3">
                  <button type="submit" class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn">Enviar</button>
                </div>
                <div class="my-2 d-flex justify-content-between align-items-center">
                  <div class="form-check">
                    <label class="form-check-label text-muted">
                      <input type="checkbox" class="form-check-input">
                      Manter minha conta aberta
                    </label>
                  </div>
                  <a href="recuperar-senha.php" class="auth-link ">Esqueceu a senha?</a>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
      <!-- content-wrapper ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  @endsection
