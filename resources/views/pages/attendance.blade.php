@extends('layout.template')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">

                <div class="title-page">
                    <span class="arrow-right"><i class="fas fa-angle-right"></i></span>
                    <span class="name-page">Atendimento</span>
                </div>

                <!--form register-->
                <div class="row">
                    <div class="col-md-6">
                        <div class="title-section-attendance">
                            <div class="name-section-attendance">Perguntas frequentes</div>
                        </div>
                        <div class="">
                            <div class="services-consults">
                                <div class="name-topic-question">Consultas e serviços</div>
                                <ul class="list-questions">
                                    <li class="items-questions">
                                        <i class="fas fa-angle-right"></i>
                                        <a href="">Como realizar consultas ?</a>
                                    </li>
                                    <li class="items-questions">
                                        <i class="fas fa-angle-right"></i>
                                        <a href="">Cancelamento de serviços </a>
                                    </li>
                                    <li class="items-questions">
                                        <i class="fas fa-angle-right"></i>
                                        <a href="">Perdi minha senha. O que faço?</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="payments-values">
                                <div class="name-topic-question">Pagamentos e valores</div>
                                <ul class="list-questions">
                                    <li class="items-questions">
                                        <i class="fas fa-angle-right"></i>
                                        <a href="">Quanto tempo demora a liberação após o pagamento?</a>
                                    </li>
                                    <li class="items-questions">
                                        <i class="fas fa-angle-right"></i>
                                        <a href="">Quais são as formas de pagamento ?</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-1"></div>

                    <div class="col-md-5">
                        <div class="title-section-attendance">
                            <div class="name-section-attendance">Mensagem</div>
                        </div>
                        <div class="form">
                            <form action="">
                                <div class="form-group">
                                    <label for="assunto">Assunto</label>
                                    <select name="assunto" class="form-control" id="assunto">
                                        <option value="">Selecione</option>
                                        <option value="consult">Como consultar</option>
                                        <option value="recover">Recuperar Senha</option>
                                        <option value="cancel">Cancelamento de serviços</option>
                                        <option value="release">Liberação de serviços</option>
                                        <option value="complaint">Reclamação</option>
                                        <option value="suggestion">Sugestão</option>
                                        <option value="others">Outros</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="name">Nome</label>
                                    <input type="text" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="email">E-mail</label>
                                    <input type="email" class="form-control" >
                                </div>
                                <div class="form-group">
                                    <label for="email">Confirme seu e-mail</label>
                                    <input type="email" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="message">Mensagem</label>
                                    <textarea class="form-control" name="message" id="message" cols="30" rows="5"></textarea>
                                </div>
                                <div class="button">
                                    <button type="submit" class="btnEnviar">Enviar</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </div>

    </div>
@endsection