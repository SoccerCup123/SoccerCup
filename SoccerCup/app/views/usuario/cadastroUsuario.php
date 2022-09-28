<section class="masthead .bg-secondary.bg-gradient bg-opacity-25 text-white text-center" >
    <div class="container d-flex  flex-column">
               
                <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Cadastro Usuario</h2>
              
                <div class="divider-custom">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                    <div class="divider-custom-line"></div>
                </div>
               
                <div class="row justify-content-center">
                    <div class="col-lg-8 col-xl-7">
                        <form action="php/varificarLogin.php"  id="contactForm" method="post" data-sb-form-api-token="API_TOKEN">
                            <div class="form-floating mb-3">
                                <input class="form-control" id="login" name="login" type="text" placeholder="Seu user.."  required />
                                <label for="name">Nome Completo </label>
                                <div class="invalid-feedback" data-sb-feedback="name:required">Campo obrigatorio.</div>
                            </div>
                             
                            <div class="form-floating mb-3">
                                <input class="form-control" id="login" name="login" type="text" placeholder="Seu user.."  required />
                                <label for="name">Email </label>
                                <div class="invalid-feedback" data-sb-feedback="name:required">Campo obrigatorio.</div>
                            </div>
                         
                            <div class="form-floating mb-3">
                                <input class="form-control" id="senha" name="senha" type="password" placeholder="Sua senha..." required />
                                <label for="password">Senha</label>
                                <div class="invalid-feedback" data-sb-feedback="senha:required">Campo obrigatorio.</div>
                            
                            </div>
                            
                       
                          <div class="d-grid gap-2 col-6 mx-auto">
                            <button class="btn btn-primary outline btn-xl  " id="submitButton" type="submit">Cadastra</button>
                          </div>
                      
                        </form>
                    </div>
                </div>
            </div>
        </section>