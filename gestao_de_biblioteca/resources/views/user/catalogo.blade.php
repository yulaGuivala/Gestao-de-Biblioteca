@extends('user.template_user.headerUser')

@section('titulo')
    Catalogo de Livos
@endsection

@section('conteudo')
    <div class="container">

        <div class="row justify-content-sm-center">
            <div class="col-12">
                <div class="row mb-2">
                    <div class="col-12">
                        <h4>Faculdades</h4>
                    </div>
                </div>
                <div class="row justify-content-center bg-white">

                    <!--lista de faculdades -->
                    <ul class="col-sm-11 nav nav-tabs ml-2 mb-3 bg-white " id="tipo" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active active1 text-danger" id="" data-toggle="pill" href="#tipo1">Políticas de Administração</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-danger" id="" data-toggle="pill" href="#tipo2">Direito</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-danger" id="" data-toggle="pill" href="#tipo3">Ciências Agrárias</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-danger" id="" data-toggle="pill" href="#tipo4">Economia e Informática</a>
                        </li>
                    </ul>
                </div>

                <!--conteudo da lista tipo -->
                <div class="row" id="tipo1" >
                    @foreach ($livros as $livro)
                        @if ($livro->categoria->nome=="Faculdade de Ciências Agrarias")
                            <div class="col-sm-4 tab-content" id="nav-pills-tipo">

                                <div class="tab-pane fade show active"  role="tabpanel">
                                    <div class="container-fluid" id="grupo-1">
                                    <div class="row" >
                                            <div class="col-sm-12 col-md-12">

                                                <div class="card mb-5">

                                                <img class="card-img-top" src="imgs/book1.jpg">
                                                <div class="card-body">
                                                    <h4 class="card-title">Aprendendo HTML com Plain HTML 7 para iniciantes</h4>
                                                    <h6 class="card-subtitle mb-2 text-muted">Vestibulum nec mollis</h6>
                                                </div>
                                                <uL class="list-group list-group-flush">
                                                <li class="list-group-item">Autor:{{$livro->autor}}</li>
                                                    <li class="list-group-item">Edicao</li>
                                                    <li class="list-group-item">Estado: Ocupado</li>
                                                </uL>
                                                <div class="card-body">
                                                        <div class="row justify-content-center" >
                                                            <a href="#" class="card-link">
                                                                    <button class="btn cor-vermelho text-light">
                                                                        Requisitar
                                                                    </button>
                                                                </a>
                                                        </div>
                                                </div>
                                                <div class="card-footer text-muted">

                                                </div>

                                                </div>

                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        @endif
                    @endforeach
                </div>

                <div class="row" id="tipo2" >
                    @foreach ($livros as $livro)
                        @if ($livro->categoria->nome=="Faculdade de Direito")
                            <div class="col-sm-4 tab-content" id="nav-pills-tipo">

                                <div class="tab-pane fade "  role="tabpanel">
                                    <div class="container-fluid" id="grupo-2">
                                    <div class="row" >
                                            <div class="col-sm-12 col-md-12">

                                                <div class="card mb-5">

                                                <img class="card-img-top" src="imgs/book1.jpg">
                                                <div class="card-body">
                                                    <h4 class="card-title">Aprendendo HTML com Plain HTML 7 para iniciantes</h4>
                                                    <h6 class="card-subtitle mb-2 text-muted">Vestibulum nec mollis</h6>
                                                </div>
                                                <uL class="list-group list-group-flush">
                                                <li class="list-group-item">Autor:{{$livro->autor}}</li>
                                                    <li class="list-group-item">Edicao</li>
                                                    <li class="list-group-item">Estado: Ocupado</li>
                                                </uL>
                                                <div class="card-body">
                                                        <div class="row justify-content-center" >
                                                            <a href="#" class="card-link">
                                                                <button class="btn cor-vermelho text-light">
                                                                    Requisitar
                                                                </button>
                                                            </a>
                                                        </div>
                                                </div>
                                                <div class="card-footer text-muted">

                                                </div>

                                                </div>

                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        @endif
                    @endforeach
                </div>

                <div class="row" id="grupo-3" >
                    @foreach ($livros as $livro)
                        @if ($livro->categoria->nome=="Faculdade de Ciências politicas e Administração")
                            <div class="col-sm-4 tab-content" id="nav-pills-tipo">

                                <div class="tab-pane fade " id="tipo3" role="tabpanel">
                                    <div class="container-fluid">
                                    <div class="row" >
                                            <div class="col-sm-12 col-md-12">

                                                <div class="card mb-5">

                                                <img class="card-img-top" src="imgs/book1.jpg">
                                                <div class="card-body">
                                                    <h4 class="card-title">Aprendendo HTML com Plain HTML 7 para iniciantes</h4>
                                                    <h6 class="card-subtitle mb-2 text-muted">Vestibulum nec mollis</h6>
                                                </div>
                                                <uL class="list-group list-group-flush">
                                                <li class="list-group-item">Autor:{{$livro->autor}}</li>
                                                    <li class="list-group-item">Edicao</li>
                                                    <li class="list-group-item">Estado: Ocupado</li>
                                                </uL>
                                                <div class="card-body">
                                                        <div class="row justify-content-center" >
                                                            <a href="#" class="card-link">
                                                                    <button class="btn cor-vermelho text-light">
                                                                        Requisitar
                                                                    </button>
                                                                </a>
                                                        </div>
                                                </div>
                                                <div class="card-footer text-muted">

                                                </div>

                                                </div>

                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        @endif
                    @endforeach
                </div>

                <div class="row" id="grupo-4" >
                    @foreach ($livros as $livro)
                        @if ($livro->categoria->nome=="")
                            <div class="col-sm-4 tab-content" id="nav-pills-tipo">

                                <div class="tab-pane fade show active" id="tipo4" role="tabpanel">
                                    <div class="container-fluid" >
                                    <div class="row" >
                                            <div class="col-sm-12 col-md-12">

                                                <div class="card mb-5">

                                                <img class="card-img-top" src="imgs/book1.jpg">
                                                <div class="card-body">
                                                    <h4 class="card-title">Aprendendo HTML com Plain HTML 7 para iniciantes</h4>
                                                    <h6 class="card-subtitle mb-2 text-muted">Vestibulum nec mollis</h6>
                                                </div>
                                                <uL class="list-group list-group-flush">
                                                <li class="list-group-item">Autor:{{$livro->autor}}</li>
                                                    <li class="list-group-item">Edicao</li>
                                                    <li class="list-group-item">Estado: Ocupado</li>
                                                </uL>
                                                <div class="card-body">
                                                        <div class="row justify-content-center" >
                                                            <a href="#" class="card-link">
                                                                    <button class="btn cor-vermelho text-light">
                                                                        Requisitar
                                                                    </button>
                                                                </a>
                                                        </div>
                                                </div>
                                                <div class="card-footer text-muted">

                                                </div>

                                                </div>

                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        @endif
                    @endforeach
                </div>


            </div>

        </div>

    </div>

@endsection



@push('paginacao')
<script>
    $(document).ready(function(){
        $('#grupo-1').buzinaPagination({
            itemsOnPage: 3,
                prevnext:true,
                 prevnext:true,
                prevnext:true,
                prevText:"<<",
                 prevText:"<<",
                prevText:"<<",
                nextText:">>"
                 nextText:">>"
                nextText:">>"
        });
        $('#grupo-2').buzinaPagination({
            itemsOnPage: 3,
                prevnext:true,
                 prevnext:true,
                prevnext:true,
                prevText:"<<",
                 prevText:"<<",
                prevText:"<<",
                nextText:">>"
                 nextText:">>"
                nextText:">>"
        });
        $('#grupo-3').buzinaPagination({
            itemsOnPage: 3,
                prevnext:true,
                 prevnext:true,
                prevnext:true,
                prevText:"<<",
                 prevText:"<<",
                prevText:"<<",
                nextText:">>"
                 nextText:">>"
                nextText:">>"
        });
        $('#grupo-4').buzinaPagination({
            itemsOnPage: 3,
                prevnext:true,
                 prevnext:true,
                prevnext:true,
                prevText:"<<",
                 prevText:"<<",
                prevText:"<<",
                nextText:">>"
                 nextText:">>"
                nextText:">>"
        });

    });

    $(function () {

        $('[data-toggle="popover"]').popover()

    });
</script>
@endpush




