
@extends('admin.template_admin.backoffice')
    @section('conteudo')
      <!-- main-panel (conteudo)-->

        <!-- content-wrapper  -->
        <div class="row">
            <div class="col-12 grid-margin">
              <div class="d-flex justify-content-between align-items-center">
                <div>
                  <h4 class="font-weight-bold mb-0">Funcionários</h4>
                </div>
                <div>
                    <a href="/Gestao-de-Biblioteca/gestao_de_biblioteca/public/funcionario" class="btn btn-light btn-icon-text btn-rounded">
                      <i class="ti-back-right btn-icon-prepend"></i>Voltar
                    </a>
                </div>
              </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Adicionar Novo Funcionário</h4>
                  <p class="card-description">
                    Introduza os dados do novo funcionário
                  </p>

                  <form class="forms-sample" method="POST" action= "{{url('/stfuncionario')}}" id="formulario">

                    <div class="form-row">
                    <input type="hidden" name="_token" value={{csrf_token()}}>
                      <div class="form-group col-sm-6">
                        <label for="nome">Primeiro Nome</label>
                        <input type="text" class="form-control" id="nome" name="nome" placeholder="Primeiro nome" maxlength="30" required>
                      </div>
                      <div class="form-group col-sm-6">
                        <label for="apelido">Sobrenome</label>
                        <input type="text" class="form-control" id="apelido" name="apelido" placeholder="Sobrenome" max-lenght="30" required>
                      </div>
                    </div>

                    <div class="form-row">
                      <div class="form-group col-sm-6">
                        <label for="usuario">Nome de Usuário</label>
                        <input type="text" class="form-control" id="usuario" name="usuario" placeholder="Nome de usuário"  minlength="3" maxlength="15" required>
                      </div>
                      <div class="form-group col-sm-6">
                        <label for="mail">Endereço de Email</label>
                        <input type="email" class="form-control" id="mail" name="mail" placeholder="Email" required>
                      </div>
                    </div>

                    <div class="form-row">

                      <div class="form-group col-sm-6">
                        <label for="senha">Senha</label>
                        <div class="input-group">
                          <input type="password" class="form-control" id="senha" name="senha" placeholder="Senha"  minlength="4" maxlength="15" required>
                          <div class="input-group-append">
                            <button class="btn btn-sm btn-secondary" type="button" id="btn-senha"><i class="ti-eye"></i></button>
                          </div>
                        </div>
                        <label id="erro-senha" class="my-error-class"></label>
                      </div>

                      <div class="form-group col-sm-6" id="divcs">
                        <label for="csenha">Confirmar Senha</label>
                        <div class="input-group">
                          <input type="password" class="form-control" id="csenha" name="csenha" placeholder="Confirmar senha"   equalTo="#senha" maxlength="15" required>
                          <div class="input-group-append">
                            <button class="btn btn-sm btn-secondary" type="button" id="btn-csenha"><i class="ti-eye"></i></button>
                          </div>
                        </div>
                        <label id="erro-csenha" class="my-error-class"></label>
                      </div>

                    </div>

                    <div class="form-row">
                      <div class="form-group col-sm-12">
                        <label>Foto de Perfil</label>
                        <input type="file" name="img" class="file-upload-default" accept="image/*">
                        <div class="input-group col-xs-12">
                          <input type="text" class="form-control file-upload-info" disabled placeholder="Foto de perfil">
                          <span class="input-group-append">
                            <button class="file-upload-browse btn btn-primary" type="button">Carregar</button>
                          </span>
                        </div>
                      </div>
                    </div>

                    <button type="submit" class="btn btn-primary mr-2" >Confirmar</button>
                    <button type="reset" class="btn btn-light">Limpar</button>
                  </form>

                </div>
              </div>
            </div>
        </div>
        <!-- content-wrapper ends -->
    @endsection
