@extends('admin.template_admin.backoffice')
    @section('conteudo')
      
          <!-- content-wrapper  -->
          <div class="content-wrapper">
            <div class="row">
              <div class="col-md-12 grid-margin">
                <div class="d-flex justify-content-between align-items-center">
                  <div>
                  <p>  <h4 class="font-weight-bold mb-0">Painel de Controle da Biblioteca</h4></p>
                  </div>
                  <div>
                      <button type="button" class="btn btn-primary btn-icon-text btn-rounded">
                        <i class="ti-clipboard btn-icon-prepend"></i>Imprimir
                      </button>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-3 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <p class="card-title text-md-center text-xl-left">Exemplares disponiveis</p>
                    <div class="d-flex flex-wrap justify-content-between justify-content-md-center justify-content-xl-between align-items-center">
                      <h3 class="mb-0 mb-md-2 mb-xl-0 order-md-1 order-xl-0">34040</h3>
                      <i class="ti-calendar icon-md text-muted mb-0 mb-md-3 mb-xl-0"></i>
                    </div>  
                    <p class="mb-0 mt-2 text-danger">0.12% <span class="text-black ml-1"><small>(30 days)</small></span></p>
                  </div>
                </div>
              </div>
              <div class="col-md-3 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <p class="card-title text-md-center text-xl-left">Exemplares requisitados</p>
                    <div class="d-flex flex-wrap justify-content-between justify-content-md-center justify-content-xl-between align-items-center">
                      <h3 class="mb-0 mb-md-2 mb-xl-0 order-md-1 order-xl-0">47033</h3>
                      <i class="ti-agenda icon-md text-muted mb-0 mb-md-3 mb-xl-0"></i>
                    </div>  
                    <p class="mb-0 mt-2 text-danger">0.47% <span class="text-black ml-1"><small>(30 days)</small></span></p>
                  </div>
                </div>
              </div>
              <div class="col-md-3 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <p class="card-title text-md-center text-xl-left">Total de estudantes cadastrados</p>
                    <div class="d-flex flex-wrap justify-content-between justify-content-md-center justify-content-xl-between align-items-center">
                      <h3 class="mb-0 mb-md-2 mb-xl-0 order-md-1 order-xl-0">40016</h3>
                      <i class="ti-user icon-md text-muted mb-0 mb-md-3 mb-xl-0"></i>
                    </div>  
                    <p class="mb-0 mt-2 text-success">64.00%<span class="text-black ml-1"><small>(30 days)</small></span></p>
                  </div>
                </div>
              </div>
            </div>
      <h4>Total de requisicoes por livro<h4>
      
      <div class="col-sm-12 tab-content" id="nav-pills-tipo">
                                    
        <div class="tab-pane fade show active" id="tipo1" role="tabpanel">
            <div class="table-responsive pb-0 bg-white">
                <table class="table table-hover col-12 mt-2" id="tb1">
                    <thead>
                        <tr>
                            <th>Titulo</th>
                            <th>Autor</th>
                            <th>Total de exemplares</th>
                            <th>Numero de Requisicoes</th>
                        </tr>
                    </thead>
                    <tbody id="tabela-corpo1"> 
                    <tr>
                        <td>E o vento levou</td>
                        <td>Folege Ricardo</td>
                        <td>500</td>
                        <td>
                            37
                        </td>
                    </tr>
                    <tr>
                    <td>E o vento levou</td>
                        <td>Folege Ricardo</td>
                        <td>500</td>
                        <td>
                            37
                        </td>
                    </tr>
                    <tr>
                    <td>E o vento levou</td>
                        <td>Folege Ricardo</td>
                        <td>500</td>
                        <td>
                            37
                        </td>
                    </tr>
                    
                  </tbody>
                </table>   
            </div>    
        </div>

        <div class="tab-pane fade" id="tipo2" role="tabpanel">
            <div class="table-responsive pb-0">
                <table id="tabela" class="table table-hover col-12 mt-2" id="tb2">
                    <thead>
                        <tr>
                        <th>Nr. de Estudante</th>
                        <th>Nome</th>
                        <th>Titulo do Livro</th>
                        <th>Data</th>
                        <th>Acção</th>
                    </tr>
                </thead>
                <tbody id="tabela-corpo2"> 
                <tr>
                    <td>20161865</td>
                    <td>Folege Ricardo</td>
                    <td>Analise matetica, B. Demidovitch</td>
                    <td>02/03/2019</td>
                    <td>
                        <input type="button" class="btn btn-rounded btn-outline-success" id="dev" value="Devolver">
                        
                    </td>
                </tr>
                <tr>
                    <td>20161865</td>
                    <td>Folege Ricardo</td>
                    <td>Analise matetica, B. Demidovitch</i></td>
                    <td>02/03/2019</td>
                    <td>
                        <input type="button" class="btn btn-rounded btn-outline-success" id="dev" value="Devolver">
                    </td>
                </tr>
                <tr>
                    <td>20161865</td>
                    <td>Folege Ricardo</td>
                    <td>Analise matetica, B. Demidovitch</i></td>
                    <td>02/03/2019</td>
                    <td>
                        <input type="button" class="btn btn-rounded btn-outline-success" id="dev" value="Devolver">
                    </td>
                </tr>
                
                </tbody>
                </table>   
            </div>
        </div>
      </div>  
    </div>


    

  @endsection

@push('registar-js')
<script src="{{asset('user/lib/validate/jquery.validate.min.js')}}"></script>
<script src="{{asset('user/lib/validate/jquery.validate.pt-br.js')}}"></script>
<script src="{{asset('user/lib/profile-image/script.js')}}"></script>
<script src="{{asset('user/lib/sweetalert2/sweetalert2.all.min.js')}}"></script>

@if ($msg = Session::get('mensagem'))
    <?php  echo "
    <script>
        Swal.fire({
            title: 'Feito!',
            text: $msg,
            type: 'success',
            confirmButtonText: 'OK'
        });
    </script>
    ";?>
@endif


@endpush
