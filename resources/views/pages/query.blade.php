@extends('layout.template')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="title-page">
                    <span class="arrow-right"><i class="fas fa-angle-right"></i></span>
                    <span class="name-page">Consultas e serviços</span>
                </div>
                <div class="row">
                    <div class="col-md-8">
                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <label for="cpf">Cód. de acesso</label>
                                <input type="tel" class="form-control" id="cpf">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="password">Senha</label>
                                <input type="text" class="form-control" id="ddd">
                            </div>
                            <div class="form-group col-md-4">
                                <button class="btnEntrar">Entrar</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="second">
                            <img src="https://i.imgur.com/mreSNEN.png" alt="seresa expirian">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="new-client">Novo cliente</div>
                        <button class="btn btn-success btnFinal">Comprar crédito</button>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="values-services-serasa mb-5">
                    <div class="header-values-partners">
                        <div class="row">
                            <span class=" col-md-4">
                                <div class="line-left"></div>
                                <div class="line-left"></div>
                                <div class="line-left"></div>
                            </span>
                            <div class="title-values-partners col-md-4">Serasa exprian</div>
                            <span class="col-md-4 ">
                                <div class="line-right"></div>
                                <div class="line-right"></div>
                                <div class="line-right"></div>
                            </span>
                        </div>
                    </div>
                    <div class="body-values-partners">
                        <ul class="list-price" id="list-price">
                            <a href="" class="link-item">
                                <li class="item-service">
                                    <span class="arrow-right"><i class="fas fa-angle-right"></i></span>
                                    <span class="description-item">Completa CPF</span>
                                    <span class="price-item">R$ 35,00</span>
                                </li>
                            </a>
                            <a href="" class="link-item">
                                <li class="item-service">
                                    <span class="arrow-right"><i class="fas fa-angle-right"></i></span>
                                    <span class="description-item">Completa CNPJ</span>
                                    <span class="price-item">R$ 35,00</span>
                                </li>
                            </a>
                            <a href="" class="link-item">
                                <li class="item-service">
                                    <span class="arrow-right"><i class="fas fa-angle-right"></i></span>
                                    <span class="description-item">Monitoramento CPF</span>
                                    <span class="price-item">R$ 35,00</span>
                                </li>
                            </a>
                            <a href="" class="link-item">
                                <li class="item-service">
                                    <span class="arrow-right"><i class="fas fa-angle-right"></i></span>
                                    <span class="description-item">Pendências</span>
                                    <span class="price-item">R$ 7,95</span>
                                </li>
                            </a>
                        </ul>
                    </div>

                </div>
                <div class="values-services-dados">
                    <div class="header-values-partners">
                        <div class="row">
                            <span class=" col-md-4">
                                <div class="line-left"></div>
                                <div class="line-left"></div>
                                <div class="line-left"></div>
                            </span>
                            <div class="title-values-partners col-md-4">Dados Certos</div>
                            <span class="col-md-4 ">
                                <div class="line-right"></div>
                                <div class="line-right"></div>
                                <div class="line-right"></div>
                            </span>
                        </div>
                    </div>
                    <div class="body-values-partners">
                        <ul class="list-price" id="list-price">
                            <a href="" class="link-item">
                                <li class="item-service">
                                    <span class="arrow-right"><i class="fas fa-angle-right"></i></span>
                                    <span class="description-item">Chques + Pêndencias</span>
                                    <span class="price-item">R$ 35,00</span>
                                </li>
                            </a>
                            <a href="" class="link-item">
                                <li class="item-service">
                                    <span class="arrow-right"><i class="fas fa-angle-right"></i></span>
                                    <span class="description-item">Protestos</span>
                                    <span class="price-item">R$ 5,70</span>
                                </li>
                            </a>
                            <a href="" class="link-item">
                                <li class="item-service">
                                    <span class="arrow-right"><i class="fas fa-angle-right"></i></span>
                                    <span class="description-item">Telefônes por CPF/CNPJ</span>
                                    <span class="price-item">R$ 2,60</span>
                                </li>
                            </a>
                            <a href="" class="link-item">
                                <li class="item-service">
                                    <span class="arrow-right"><i class="fas fa-angle-right"></i></span>
                                    <span class="description-item">Endereços por CPF/CNPJ</span>
                                    <span class="price-item">R$ 10,50</span>
                                </li>
                            </a>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('extra-scripts')
    <script>
        $('.link-item').mouseenter(function () {
            $(this).find('.description-item').addClass("active");
            $(this).find('.price-item').addClass("active");
        })

        $('.link-item').mouseout(function () {
            $(this).find('.description-item').removeClass("active");
            $(this).find('.price-item').removeClass("active");
        })



        $('.item-service').mouseenter(function () {
            $(this).find('.description-item').addClass("active");
            $(this).find('.price-item').addClass("active");
        })

        $('.item-service').mouseout(function () {
            $(this).find('.description-item').removeClass("active");
            $(this).find('.price-item').removeClass("active");
        })


        $('.description-item').mouseenter(function () {
            $(this).addClass("active");
            $(this).find('.price-item').addClass("active");
        })

        $('.description-item').mouseout(function () {
            $(this).removeClass("active");
            $(this).find('.price-item').removeClass("active");
        })
    </script>
@endsection



