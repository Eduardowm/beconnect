<div class="container-fluid xs-remove-fixed fixed-top pt-3" id="navbar">
    <nav class="navbar container navbar-toggleable-md navbar-light bg-transparent flex-row flex-sm-block justify-content-center align-items-center">
        <a class="navbar-brand d-none d-sm-inline" href="#"><img src="/store/images/logo-branco.png" srcset="/store/images/logo-branco@2x.png 2x, /store/images/logo-branco@3x.png 3x" class="logo"></a>
        <a class="navbar-brand d-inline d-sm-none" href="#"><img src="/store/images/logo.png" srcset="/store/images/logo@2x.png 2x, /store/images/logo@3x.png 3x" class="logo"></a>

        <div class="navbar-content d-flex w-100 justify-content-end align-items-sm-center">
            <form class="form-inline my-2 my-lg-0">
                <a class="btn btn-primary my-2 my-sm-0" href="#">Voltar</a>
            </form>
        </div>
    </nav>
</div>

<div class="container-fluid h-100-vh">
    <div class="row h-100">
        <div class="d-none d-sm-flex col-sm-5 pt-15 bg-internal">
            <div class="row w-100">
                <div class="col-6 ml-auto">
                    <h6 class="color-white pb-3">JÁ TEM UMA CONTA?</h6>
                    <h1 class="fs-52 fw-100 pb-3">Seja a <span class="font-weight-bold">conexão</span></h1>
                    <p class="fs-20 inner-text color-white pb-3">Se você já fez seu cadastro, faça o login para escolher seu plano.</p>
                    <a href="#" class="btn btn-primary">FAZER LOGIN</a>
                </div>
            </div>
        </div>

        <div class="col-sm-7 pt-15 h-100-vh">
            <div class="row">
                <div class="col-sm-7 mr-sm-auto ml-sm-5">
                    <h6 class="color-grape">COMECE AGORA, 30 DIAS GRÁTIS</h6>
                    <p class="inner-text">Faça se cadastro para utilizar os 30 dias grátis</p>

                    <form class="form-dark" action="app.php?page=confirmation_trial" method="post">
                        <div class="form-group">
                            <label class="has-float-label" aria-label="Nome">
                                <input class="form-control" type="text" placeholder="Nome" name="nome"/>
                                <span>Nome</span>
                            </label>
                        </div>

                        <div class="form-group">
                            <label class="has-float-label" aria-label="CPF">
                                <input class="form-control" type="text" placeholder="CPF" name="cpf"/>
                                <span>CPF</span>
                            </label>
                        </div>

                        <div class="form-group">
                            <label class="has-float-label" aria-label="RG">
                                <input class="form-control" type="text" placeholder="RG" name="rg"/>
                                <span>RG</span>
                            </label>
                        </div>

                        <div class="form-group">
                            <label class="has-float-label" aria-label="Nome de sua igreja">
                                <input class="form-control" type="text" placeholder="Nome de sua igreja" name="nome_igreja"/>
                                <span>Nome de sua igreja</span>
                            </label>
                        </div>

                        <div class="form-group">
                            <label class="has-float-label" aria-label="CNPJ da Igreja">
                                <input class="form-control" type="text" placeholder="CNPJ da Igreja" name="cnpj_igreja"/>
                                <span>CNPJ da Igreja</span>
                            </label>
                        </div>

                        <div class="form-group">
                            <label class="has-float-label" aria-label="CEP">
                                <input class="form-control" type="text" placeholder="CEP" name="cep"/>
                                <span>CEP</span>
                            </label>
                        </div>

                        <div class="form-group">
                            <label class="has-float-label" aria-label="Endereço">
                                <input class="form-control" type="text" placeholder="Endereço" name="endereco"/>
                                <span>Endereço</span>
                            </label>
                        </div>

                        <div class="form-group pt-3 d-flex justify-content-between align-items-baseline">
                            <label class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input">
                                <span class="custom-control-indicator"><i class="fas fa-check"></i></span>
                                <span class="custom-control-description"><a href="#">Li e aceito os termos de uso</a></span>
                            </label>

                            <button type="submit" class="btn btn-secondary float-right hidden-xs-down">CADASTRAR</button>
                        </div>

                        <div class="form-group text-center hidden-sm-up">
                            <button type="submit" class="btn btn-secondary px-5">ENVIAR</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div class="hidden-sm-up col-12 transparent-grape pb-5">
            <div class="row text-center">
                <div class="col">
                    <h6 class="color-white mt-5 pb-3 text-center">JÁ TEM UMA CONTA?</h6>
                    <a href="#" class="btn btn-primary">FAZER LOGIN</a>
                </div>
            </div>
        </div>
    </div>
</div>