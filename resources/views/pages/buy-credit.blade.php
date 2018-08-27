@extends('layout.template')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10">

                <div class="title-page">
                    <span class="arrow-right"><i class="fas fa-angle-right"></i></span>
                    <span class="name-page">Comprar</span>
                </div>

                <!--form register-->
                <div class="row">
                    <div class="col-md-6">
                        <div class="title-section first">
                            <div class="name-section">Primeira compra</div>
                            <a href=""><button class="btnClient">já sou cliente</button></a>
                        </div>
                        <div class="form">
                            <form action="">
                                <div class="form-group">
                                    <label for="name">Nome ou Razão social</label>
                                    <input type="text" class="form-control" placeholder="ex:. Rodonapolis Logística LTDA.">
                                </div>
                                <div class="form-group">
                                    <label for="email">E-mail</label>
                                    <input type="email" class="form-control" placeholder="ex:. example@uol.com.br">
                                </div>
                                <div class="form-group">
                                    <label for="email">Confirme seu e-mail</label>
                                    <input type="email" class="form-control" placeholder="ex:. example@uol.com.br">
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="cpf">CPF ou CNPJ</label>
                                        <input type="tel" class="form-control" id="cpf">
                                    </div>
                                    <div class="form-group col-md-2">
                                        <label for="ddd">DDD</label>
                                        <input type="text" class="form-control" id="ddd">
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="telefone">Telefone</label>
                                        <input type="text" class="form-control" id="tel">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="second">
                            <img src="https://i.imgur.com/mreSNEN.png" alt="seresa expirian">
                        </div>
                    </div>
                </div>

                <!--payment-->
                <div class="row" id="payment">
                    <div class="col-md-12">
                        <div class="title-section">
                            <div class="name-section">Pagamento</div>
                        </div>

                        <div class="form">
                            <form action="">
                                <div class="form-group">
                                    <label for="valor">Valor</label>
                                    <select class="form-control col-md-3" name="value" id="value">
                                        <option value="35">R$ 35,00</option>
                                        <option value="50">R$ 50,00</option>
                                        <option value="60">R$ 60,00</option>
                                        <option value="70">R$ 70,00</option>
                                        <option value="80">R$ 80,00</option>
                                        <option value="90">R$ 90,00</option>
                                        <option value="100">R$ 100,00</option>
                                        <option value="200">R$ 200,00</option>
                                        <option value="300">R$ 300,00</option>
                                    </select>
                                </div>

                                <div class="choose-way-payment">
                                    <div class="label-select">Seleciona forma de pagamento</div>

                                    <ul class="content-items">
                                        <a href="#" id="visa">
                                            <li class="itmes-payment"><img src="https://i.imgur.com/B6su3s3.jpg" alt=""></li>
                                        </a>
                                        <a href="#" id="master">
                                            <li class="itmes-payment"><img src="https://i.imgur.com/Eoc3mCg.jpg"  alt=""></li>
                                        </a>
                                        <a href="#" id="boleto">
                                            <li class="itmes-payment"><img src="https://i.imgur.com/t8lIjH8.jpg" alt=""></li>
                                        </a>
                                    </ul>

                                </div>

                                <div class="form-group text-check">
                                    <input class="input-check" type="checkbox"> Li e aceito as <a class="conditions-use " href="">condições de uso</a>
                                </div>

                                <div class="form-group">
                                    <button type="submit" class="btn btn-success btnFinal">Finalizar compra</button>
                                </div>
                            </form>
                        </div>

                    </div>
                </div>

                <!--basic instructions-->
                <div class="row">
                   <div class="col-md-12">
                       <div class="title-section">
                           <div class="name-section">Instruções básicas</div>
                       </div>
                   </div>
                   <div class="content-basic-instrutions">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-6">
                                   <div class="container">
                                       <ul>
                                           <li>Para a utilização é necessário aceitar as <a href="" class="conditions-use">condições de uso</a></li>
                                           <li>Novos cadastros estão sujeitos a validaçãos, em horário comercial.</li>
                                           <li>O código de acesso e a senha serão enviados por e-mail após confirmação do pagamaneto</li>
                                           <li>Valor mínimo de compra: R$ 35,00</li>
                                       </ul>
                                   </div>
                                </div>
                                <div class="col-md-6">
                                   <div class="container">
                                       <ul>
                                           <li>Cartões de crédito: <span>liberação imediata</span>. Sujeito à análise. O cartão de crédito será
                                               armazenado para novas compras e/ou assinaturas (<a href="" class="conditions-use">Cláusula 3.1.1</a>). Caso deseje
                                               excluí-lo basta acessar a opção Conta > Cartões de crédito.
                                           </li>
                                           <li>
                                               Boleto bancário: liberação ocorre em até 15 minutos após <a href="" class="conditions-use">envio do comprovante</a>
                                               pelo sitev(horário comercial). Caso contrário, a liberação ocorrerá em até um dia útil. Taxa de
                                               liberação: R$ 2,00.
                                           </li>
                                       </ul>
                                   </div>
                                </div>
                            </div>
                        </div>
                   </div>
                </div>

            </div>
        </div>

    </div>
@endsection