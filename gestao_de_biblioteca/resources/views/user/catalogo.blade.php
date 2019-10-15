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

                @foreach ($livros as $livro)
                    <div class = "row justify-content-center bg-white">

                        <div class="col-sm-12 tab-content" id="nav-pills-tipo">
                            @if ($livro->categoria->nome='Faculdade de Ciências politicas e Administraçao')
                                <div class="tab-pane fade show active" id="tipo1" role="tabpanel">
                                    <div class="container-fluid" id="grupo-1">

                                        <div class="row" >
                                            <div class="col-sm-6 col-md-4">

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
                                                                    Detalhes
                                                                </button>
                                                            </a>
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
                            @endif

                            <div class="tab-pane fade" id="tipo2" role="tabpanel">
                                <div class="container-fluid" id="grupo-2">

                                    <div class="row">

                                        <div class="col-sm-6 col-md-4">

                                            <div class="card mb-5">

                                                <img class="card-img-top" src="imgs/book1.jpg">
                                                <div class="card-body">
                                                    <h4 class="card-title">Aprendendo HTML com Plain HTML 7 para iniciantes</h4>
                                                    <h6 class="card-subtitle mb-2 text-muted">Vestibulum nec mollis</h6>
                                                </div>
                                                <uL class="list-group list-group-flush">
                                                    <li class="list-group-item">Autor</li>
                                                    <li class="list-group-item">Edicao</li>
                                                    <li class="list-group-item">Estado: Ocupado</li>
                                                </uL>
                                                <div class="card-body">
                                                        <div class="row justify-content-center" >
                                                            <a href="#" class="card-link">
                                                                <button class="btn cor-vermelho text-light">
                                                                    Detalhes
                                                                </button>
                                                            </a>
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

                            <div class="tab-pane fade" id="tipo3" role="tabpanel">
                                <div class="container-fluid" id="grupo-3">

                                    <div class="row" >
                                        <div class="col-sm-6 col-md-4">

                                            <div class="card mb-5">

                                            <img class="card-img-top" src="imgs/book1.jpg">
                                            <div class="card-body">
                                                <h4 class="card-title">Aprendendo HTML com Plain HTML 7 para iniciantes</h4>
                                                <h6 class="card-subtitle mb-2 text-muted">Vestibulum nec mollis</h6>
                                            </div>
                                            <uL class="list-group list-group-flush">
                                                <li class="list-group-item">Autor</li>
                                                <li class="list-group-item">Edicao</li>
                                                <li class="list-group-item">Estado: Ocupado</li>
                                            </uL>
                                            <div class="card-body">
                                                    <div class="row justify-content-center" >
                                                        <a href="#" class="card-link">
                                                            <button class="btn cor-vermelho text-light">
                                                                Detalhes
                                                            </button>
                                                        </a>
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

                            <div class="tab-pane fade" id="tipo4" role="tabpanel">
                                <div class="container-fluid" id="grupo-4">

                                    <div class="row" >
                                        <div class="col-sm-6 col-md-4">

                                            <div class="card mb-5">

                                            <img class="card-img-top" src="imgs/book1.jpg">
                                            <div class="card-body">
                                                <h4 class="card-title">Aprendendo HTML com Plain HTML 7 para iniciantes</h4>
                                                <h6 class="card-subtitle mb-2 text-muted">Vestibulum nec mollis</h6>
                                            </div>
                                            <uL class="list-group list-group-flush">
                                                <li class="list-group-item">Autor</li>
                                                <li class="list-group-item">Edicao</li>
                                                <li class="list-group-item">Estado: Ocupado</li>
                                            </uL>
                                            <div class="card-body">
                                                    <div class="row justify-content-center" >
                                                        <a href="#" class="card-link">
                                                            <button class="btn cor-vermelho text-light">
                                                                Detalhes
                                                            </button>
                                                        </a>
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
                    </div>
                @endforeach


            </div>

        </div>

    </div>



    <!-- Modal Detalhes-->
    <div class="modal fade" id="siteModal" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">

                <div class="modal-header">
                    <h5 class="modal-title">Detalhes do Livro</h5>
                    <button type="button" class="close" data-dismiss="modal">
                        <span>&times;</span>
                    </button>
                </div>

                <div class="modal-body">

                    <div class="container-fluid">

                        <div class="row">

                            <div class="col-6">

                                <h5>Redes de Computadores</h5>

                                <img class="card-img-top" src="imgs/item-01.jpg">

                            </div>

                            <div class="col-6">

                                <h5>Informacoes adicionais</h5>

                                <p>Donec semper maximus ipsum in feugiat.
                                    Sed blandit, magna nec maximus venenatis,
                                   Sed blandit, magna nec maximus venenatis,
                                    Sed blandit, magna nec maximus venenatis,
                                    nunc odio porttitor tellus, ac pulvinar mi
                                   nunc odio porttitor tellus, ac pulvinar mi
                                    nunc odio porttitor tellus, ac pulvinar mi
                                    velit vel erat. Vestibulum ante ipsum
                                   velit vel erat. Vestibulum ante ipsum
                                    velit vel erat. Vestibulum ante ipsum
                                    primis in faucibus orci luctus et ultrices
                                   primis in faucibus orci luctus et ultrices
                                    primis in faucibus orci luctus et ultrices
                                    posuere cubilia Curae; Mauris sapien tellus,
                                   posuere cubilia Curae; Mauris sapien tellus,
                                    posuere cubilia Curae; Mauris sapien tellus,
                                    mattis nec tempus id, consequat non tortor.
                                   mattis nec tempus id, consequat non tortor.
                                    mattis nec tempus id, consequat non tortor.
                                    Nunc molestie orci purus, quis malesuada enim
                                   Nunc molestie orci purus, quis malesuada enim
                                    Nunc molestie orci purus, quis malesuada enim
                                    ullamcorper condimentum. Nullam vitae ultrices
                                   ullamcorper condimentum. Nullam vitae ultrices
                                    ullamcorper condimentum. Nullam vitae ultrices
                                    tortor. Pellentesque at felis eget nulla
                                   tortor. Pellentesque at felis eget nulla
                                    tortor. Pellentesque at felis eget nulla
                                    condimentum euismod. Nulla tortor nulla,
                                   condimentum euismod. Nulla tortor nulla,
                                    condimentum euismod. Nulla tortor nulla,
                                    suscipit at consectetur in, imperdiet eu tellus.
                                    Ut semper lorem orci, a malesuada ligula molestie
                                   Ut semper lorem orci, a malesuada ligula molestie
                                    Ut semper lorem orci, a malesuada ligula molestie
                                    non. Morbi lobortis erat eget ipsum iaculis, at
                                   non. Morbi lobortis erat eget ipsum iaculis, at
                                    non. Morbi lobortis erat eget ipsum iaculis, at
                                    sagittis est laoreet. Suspendisse pulvinar enim
                                   sagittis est laoreet. Suspendisse pulvinar enim
                                    sagittis est laoreet. Suspendisse pulvinar enim
                                    eu nunc cursus pharetra. Nam porttitor porttitor
                                   eu nunc cursus pharetra. Nam porttitor porttitor
                                    eu nunc cursus pharetra. Nam porttitor porttitor
                                    imperdiet. Duis gravida diam ultrices finibus
                                   imperdiet. Duis gravida diam ultrices finibus
                                    imperdiet. Duis gravida diam ultrices finibus
                                    interdum. Vestibulum at elementum eros. Proin in
                                   interdum. Vestibulum at elementum eros. Proin in
                                    interdum. Vestibulum at elementum eros. Proin in
                                    enim non lorem bibendum consectetur at vitae enim.
                                    Nam vel dolor ac velit pharetra pharetra.</p>

                            </div>

                        </div>

                    </div>

                </div>

                <div class="modal-footer">
                    <button type="button" class="btn cor-vermelho text-light" data-dismiss="modal">Voltar</button>
                </div>

            </div>
        </div>
    </div>
@endsection



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

    })

</script>


