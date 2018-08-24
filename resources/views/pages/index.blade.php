@extends('layout.template')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-7">
                <div class="row">
                    <div class="col-md-5 only">
                        <div class="image-man bg-man">
                        </div>
                    </div>
                    <div class="col-md-7">
                        <div class="partners-brand first"></div>
                        <div class="calling"><p>Consultas Cadastrais</p></div>
                        <div class="partners-brand second"></div>
                        <div class="btn btn-success py-2 mt-2 mb-2">Botão comprar</div>
                    </div>
                </div>

            </div>

            <div class="col-md-5">
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



