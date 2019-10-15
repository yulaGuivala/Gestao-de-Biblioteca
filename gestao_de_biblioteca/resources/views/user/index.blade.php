@extends('user.templates.headerUser')

@section('conteudo')
    <!-- Slider -->
    <div id="carouselSite" class="carousel slide " data-ride="carousel" >

        <ol class="carousel-indicators">
            <li data-target="#carouselSite" data-slide-to="0" class="active"></li>
            <li data-target="#carouselSite" data-slide-to="1"></li>
            <li data-target="#carouselSite" data-slide-to="2"></li>
        </ol>

        <div class="carousel-inner" style="max-height: 540px; overflow:hide;">

            <div class="carousel-item active">

                <img src="imgs/slide-01.jpg" class="img-fluid d-block" >

                <div class="carousel-caption d-none d-md-block text-dark">

                    <h1>Lorem ipsum dolor</h1>
                    <p class="lead">Mauris dictum, nulla sed placerat sodales, diam augue sollicitudin dui.</p>

                </div>

            </div>

            <div class="carousel-item">

                <img src="imgs/slide-02.jpg" class="img-fluid d-block">

                <div class="carousel-caption d-none d-md-block text-dark">

                    <h1>Aliquam in malesuada neque</h1>
                    <p class="lead">Mauris dictum, nulla sed placerat sodales, diam augue sollicitudin dui.</p>

                </div>

            </div>

            <div class="carousel-item">

                <img src="imgs/slide-03.jpg" class="img-fluid d-block">

                <div class="carousel-caption d-none d-md-block text-dark">

                    <h1>Pellentesque ultricies facilisis ultrices</h1>
                    <p class="lead">Mauris dictum, nulla sed placerat sodales, diam augue sollicitudin dui.</p>

                </div>

            </div>

        </div>

        <a class="carousel-control-prev" href="#carouselSite" role="button" data-slide="prev">

            <span class="carousel-control-prev-icon"></span>
            <span class="sr-only">Anterior</span>

        </a>
        <a class="carousel-control-next" href="#carouselSite" role="button" data-slide="next">

            <span class="carousel-control-next-icon"></span>
            <span class="sr-only">Avançar</span>

        </a>

    </div>

    <div class="jumbotron jumbotron-fluid mb-3">
        <div class="container">
            <div class="row">

            <div class="col-12 text-center my-5">

                <h1 class="display-3"><i class="fa fa-cogs text-dark" aria-hidden="true"><a name="about"> Sobre Nós</a></i></h1>
                <p>Praesent erat magna, tristique ac mauris ut, iaculis tincidunt velit.</p>

            </div>

        </div>

        <div class="row mb-5">

        <div class="col-sm-6 col-md-4 mb-3">

            <nav id="navbarVertical" class="navbar navbar-light bg-light">

                <nav class="nav nav-pills nav-warning flex-column">

                    <a class="nav-link" href="#item1">Quem somos</a>

                    <a class="nav-link my-2" href="#item2">Nossos objectivos</a>

                    <a class="nav-link my-2" href="#item3">Nossos valores</a>

                </nav>

            </nav>

        </div>

        <div class="col-sm-6 col-md-8">

            <div data-spy="scroll" data-target="#navbarVertical" data-offset="0" class="scrollspySite">

                <h4 id="item1">Quem somos</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam fringilla ultricies sagittis. Fusce consectetur placerat neque in molestie. Maecenas ac nisl hendrerit, pellentesque ante nec, aliquam mauris. Nulla consectetur mattis mi non aliquam. Vivamus ut lectus ex. Vestibulum lectus sem, suscipit ut diam vel, accumsan euismod sem.</p>

                <h5 id="item1-1"></h5>
                <p>Morbi sollicitudin, leo rhoncus tempus mollis, magna magna auctor metus, sed mattis justo urna ultrices arcu. Pellentesque sed risus hendrerit, iaculis lectus et, sollicitudin nisi. Quisque faucibus facilisis malesuada. Donec maximus lorem vel eleifend bibendum. Sed efficitur, lectus a gravida ullamcorper, sem nibh placerat leo, sed facilisis erat mi vel mauris.</p>

                <h5 id="item1-2"></h5>
                <p>Phasellus ullamcorper congue dui sed scelerisque. Praesent erat magna, tristique ac mauris ut, iaculis tincidunt velit. Aenean euismod facilisis ipsum, et auctor dui interdum sed. Suspendisse vitae arcu sit amet nulla hendrerit porta. Sed eget sodales eros. Donec auctor, nisl vel tincidunt auctor, est eros egestas odio, eget ultricies velit lorem nec eros. Praesent sed mauris sed urna scelerisque pulvinar. Vivamus non libero maximus, euismod tortor quis, tincidunt libero. Aliquam odio lectus, porttitor sed arcu a, porta faucibus odio. Nunc id lacinia ligula, sed venenatis mi.</p>

                <h4 id="item2">Nossos objectivos</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam fringilla ultricies sagittis. Fusce consectetur placerat neque in molestie. Maecenas ac nisl hendrerit, pellentesque ante nec, aliquam mauris. Nulla consectetur mattis mi non aliquam. Vivamus ut lectus ex. Vestibulum lectus sem, suscipit ut diam vel, accumsan euismod sem.</p>

                <h4 id="item3">Nossos valores</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam fringilla ultricies sagittis. Fusce consectetur placerat neque in molestie. Maecenas ac nisl hendrerit, pellentesque ante nec, aliquam mauris. Nulla consectetur mattis mi non aliquam. Vivamus ut lectus ex. Vestibulum lectus sem, suscipit ut diam vel, accumsan euismod sem.</p>

                <h5 id="item3-1"></h5>
                <p>Morbi sollicitudin, leo rhoncus tempus mollis, magna magna auctor metus, sed mattis justo urna ultrices arcu. Pellentesque sed risus hendrerit, iaculis lectus et, sollicitudin nisi. Quisque faucibus facilisis malesuada. Donec maximus lorem vel eleifend bibendum. Sed efficitur, lectus a gravida ullamcorper, sem nibh placerat leo, sed facilisis erat mi vel mauris.</p>

                <h5 id="item3-2"></h5>
                <p>Phasellus ullamcorper congue dui sed scelerisque. Praesent erat magna, tristique ac mauris ut, iaculis tincidunt velit. Aenean euismod facilisis ipsum, et auctor dui interdum sed. Suspendisse vitae arcu sit amet nulla hendrerit porta. Sed eget sodales eros. Donec auctor, nisl vel tincidunt auctor, est eros egestas odio, eget ultricies velit lorem nec eros. Praesent sed mauris sed urna scelerisque pulvinar. Vivamus non libero maximus, euismod tortor quis, tincidunt libero. Aliquam odio lectus, porttitor sed arcu a, porta faucibus odio. Nunc id lacinia ligula, sed venenatis mi.</p>

            </div>

        </div>

        </div>
        </div>
    </div>

    <!-- Acerca -->
    <div class="container">

        <div class="row justify-content-sm-center">
            <div class="col-12 my-5">
                <h4 class="text-warning">Livros Mais Requisitado</h4>
                <hr class="bg-danger">
            </div>

            <div class="col-sm-6 col-md-4" >

                <div class="card mb-5">

                    <img class="card-img-top" src="imgs/capture2.jpg">
                    <div class="card-body">
                    <h4 class="card-title">Redes de computadores - uma abordagem de sistemas</h4>
                    <h6 class="card-subtitle mb-2 text-muted">Vestibulum nec mollis</h6>
                    </div>
                    <uL class="list-group list-group-flush">
                        <li class="list-group-item">Autor</li>
                        <li class="list-group-item">Edicao</li>
                        <li class="list-group-item">Estado: Disponivel</li>
                    </uL>
                    <div class="card-body">
                        <div class="row justify-content-center" >
                            <a href="#" class="card-link" data-toggle="modal" data-target="#siteModal">
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

            <div class="col-sm-6 col-md-4">

                    <div class="card mb-5">

                        <img class="card-img-top" src="imgs/capture.jpg">
                        <div class="card-body">
                            <h4 class="card-title">Guia do SCRUM</h4>
                            <h6 class="card-subtitle mb-2 text-muted">Um guia definitivo para o SCRUM: as regras do jogo</h6>
                        </div>
                        <uL class="list-group list-group-flush">
                            <li class="list-group-item">Autor</li>
                            <li class="list-group-item">Edicao</li>
                            <li class="list-group-item">Estado: Disponivel</li>
                        </uL>
                        <div class="card-body">
                                <div class="row justify-content-center" >
                                    <a href="#" class="card-link" data-toggle="modal" data-target="#siteModal">
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

            <div class="col-sm-6 col-md-4" >

                <div class="card mb-5">

                    <img class="card-img-top" src="imgs/capture2.jpg">
                    <div class="card-body">
                    <h4 class="card-title">Redes de computadores - uma abordagem de sistemas</h4>
                    <h6 class="card-subtitle mb-2 text-muted">Vestibulum nec mollis</h6>
                    </div>
                    <uL class="list-group list-group-flush">
                        <li class="list-group-item">Autor</li>
                        <li class="list-group-item">Edicao</li>
                        <li class="list-group-item">Estado: Disponivel</li>
                    </uL>
                    <div class="card-body">
                        <div class="row justify-content-center" >
                            <a href="#" class="card-link" data-toggle="modal" data-target="#siteModal">
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

            <div class="col-sm-6 col-md-4">

                    <div class="card mb-5">

                        <img class="card-img-top" src="imgs/capture.jpg">
                        <div class="card-body">
                            <h4 class="card-title">Guia do SCRUM</h4>
                            <h6 class="card-subtitle mb-2 text-muted">Um guia definitivo para o SCRUM: as regras do jogo</h6>
                        </div>
                        <uL class="list-group list-group-flush">
                            <li class="list-group-item">Autor</li>
                            <li class="list-group-item">Edicao</li>
                            <li class="list-group-item">Estado: Disponivel</li>
                        </uL>
                        <div class="card-body">
                                <div class="row justify-content-center" >
                                    <a href="#" class="card-link" data-toggle="modal" data-target="#siteModal">
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

        <div class="row justify-content-sm-center">
            <div class="col-12 my-5">
                <h4 class="text-warning">Livros Recentes</h4>
                <hr class="bg-danger">
            </div>

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
@endsection

<!-- Modal Detalhes
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
                                nunc odio porttitor tellus, ac pulvinar mi
                                velit vel erat. Vestibulum ante ipsum
                                primis in faucibus orci luctus et ultrices
                                posuere cubilia Curae; Mauris sapien tellus,
                                mattis nec tempus id, consequat non tortor.
                                Nunc molestie orci purus, quis malesuada enim
                                ullamcorper condimentum. Nullam vitae ultrices
                                tortor. Pellentesque at felis eget nulla
                                condimentum euismod. Nulla tortor nulla,
                                suscipit at consectetur in, imperdiet eu tellus.
                                Ut semper lorem orci, a malesuada ligula molestie
                                non. Morbi lobortis erat eget ipsum iaculis, at
                                sagittis est laoreet. Suspendisse pulvinar enim
                                eu nunc cursus pharetra. Nam porttitor porttitor
                                imperdiet. Duis gravida diam ultrices finibus
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
</div> -->

<!-- Modal caixa de livros-->
<?php modalLivros(); ?>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="node_modules/jquery/dist/jquery.js"></script>
    <script src="node_modules/popper.js/dist/umd/popper.js"></script>
    <script src="node_modules/bootstrap/dist/js/bootstrap.js"></script>

