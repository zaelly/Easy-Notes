<link href="/assets/css/form.css" rel="stylesheet" type="text/css"/>
<script src="/assets/javascript/form.js" defer></script>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Playwrite+GB+S:ital,wght@0,100..400;1,100..400&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap" rel="stylesheet">

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/js/fontawesome.min.js" integrity="sha512-NeFv3hB6XGV+0y96NVxoWIkhrs1eC3KXBJ9OJiTFktvbzJ/0Kk7Rmm9hJ2/c2wJjy6wG0a0lIgehHjCTDLRwWw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/js/all.min.js" integrity="sha512-6sSYJqDreZRZGkJ3b+YfdhB3MzmuP9R7X1QZ6g5aIXhRvR1Y/N/P47jmnkENm7YL3oqsmI6AK+V6AD99uWDnIw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/js/brands.min.js" integrity="sha512-N5K6sQXjzT79tR16zvBu7B0AqvYtHKvk3+eKuQWoVNQDGU5kR9W8OP3CTYtm3vVM2EtObrmtm0Jup17F718OyA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/brands.min.css" integrity="sha512-EJp8vMVhYl7tBFE2rgNGb//drnr1+6XKMvTyamMS34YwOEFohhWkGq13tPWnK0FbjSS6D8YoA3n3bZmb3KiUYA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/regular.min.css" integrity="sha512-j+P0XpTXw+hDTK64xqC/cjv62cf629/IR4/0bokmich7J8XdVlWT40+1M/Z58rCQ4F+3QoJIfzh6Ui6TTIP6WQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

<link rel="stylesheet" href="<?= base_url('theme/plugins/icheck-bootstrap/icheck-bootstrap.css') ?>">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

<?= view('./navbar/index.php') ?>


<div class="container main-container mt-5" id="comece-ja">
    <div class="container-fluid">
        <div class="row container-flex">
            <div class="col-lg-5" style="border-right: 1px solid #ccc;padding-left: 1rem">
                <h2 class="titleH2 col-lg-9">Crie sua conta para testar o Notas Fácil por 30 dias grátis</h2>
                <div class="info1">
                    <span class="span-icon">
                        <i class="fa-solid fa-check"></i>
                        <p>Cancele a assinatura mensal a qualquer momento</p>
                    </span>
                    <span class="span-icon">
                        <i class="fa-solid fa-check"></i>
                        <p>Sem cobrança durante o período de teste</p>
                    </span>
                    <span class="span-icon">
                        <i class="fa-solid fa-check"></i>
                        <p>Acesse todas as funcionalidades do plano escolhido</p>
                    </span>
                    <span class="span-icon">
                        <i class="fa-solid fa-check"></i>
                        <p>Configure sua conta em poucos minutos</p>
                    </span>
                    <span class="span-icon">
                        <i class="fa-solid fa-check"></i>
                        <p>Abra sua Conta Digital grátis e tenha o financeiro integrado</p>
                    </span>

                    <form class="form col-lg-10">
                        <div class="mb-3">
                            <label for="nome" class="form-label labelForm">Nome</label>
                            <input type="text" class="form-control input-container" id="nome" placeholder="seu nome completo">
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label labelForm">Email</label>
                            <input type="email" class="form-control input-container" id="email" placeholder="nome@exemplo.com">
                        </div>
                        <div class="mb-3">
                            <label for="numero_celular" class="form-label labelForm">Número de celular</label>
                            <input type="number" class="form-control input-container" id="numero_celular" max="11" placeholder="Número com DDD">
                        </div>
                        <div class="mb-3">
                            <label for="CNPJ" class="form-label labelForm">CNPJ</label>
                            <input type="number" class="form-control input-container" id="CNPJ" max="14" placeholder="CNPJ">
                        </div>
                        <div class="align-items-center mb-3">
                        <label for="senha" class="form-label labelForm">Senha</label>
                        <div class="input-group">
                            <div class="input-container">
                                <i class="fa-solid fa-lock"></i>
                                <input type="password" id="senha" class="form-control input-container" placeholder="Digite sua senha">
                            </div>
                        </div>
                        <div class="col-auto">
                            <span class="form-text">
                                Precisa ser entre 8-20 caracteres.
                            </span>
                        </div>
                        </div>
                    </form>
                    <div class="d-grid gap-2 col-lg-10">
                        <button type="submit" class="btn btn-primary" id="enviar-form">Começar teste</button>
                    </div>
                </div>

                <div class="info2 col-lg-9">
                    <h3 class="titleH2">Conteúdos e dicas sobre o uso do sistema</h3>
                    <div class="checkboxs">
                        <div class="col-lg-5">
                            <input type="checkbox" name="msgViaWtt" id="msgViaWtt">
                            <label for="msgViaWtt">receber por WhatsApp</label>
                        </div>
                        <div class="col-lg-6">
                            <input type="checkbox" name="msgViaEmail" id="msgViaEmail">
                            <label for="msgViaEmail">receber por e-mail</label>
                        </div>
                    </div>
                    <br>
                    <div class="terms">
                        <p>Ao prosseguir você concorda com os termos de uso e a política de proteção de dados do Inovagestor.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4" style="padding-left: 5rem;">
                <div class="selectOpt">
                    <div class="planos">
                        <div class="col-lg-9">
                            <h2 class="h2">Escolha um plano para iniciar o teste</h2>
                        </div>
                        <span class="col-lg-9" style="text-align: end">
                            <a href="http://" target="_blank">conhecer planos</a>
                        </span>
                    </div>
                    <select id="select" class="select form-select form-select-lg mb-3">
                        <option value="1" selected>Começar</option>
                        <option value="2">Crescer</option>
                        <option value="3">Evoluir</option>
                        <option value="4">Potencializar</option>
                    </select>
                    <div id="addInfo" class="resorce-description">
                        <span class="span-icon" id="spanUsers">
                            <i style="color: blue;" class="fa-regular fa-user"></i>
                        </span >
                        <span class="span-icon" id="spanData">
                            <i style="color: blue;" class="fa-solid fa-database"></i>
                        </span>
                        <span class="span-icon" id="spanImage">
                            <i style="color: blue;" class="fa-regular fa-image"></i>
                        </span>
                    </div>
                </div>
                <div class="col-lg-9 check">
                    <!-- cupons -->
                    <div class="checkboxs">
                        <div class="d-flex checkboxCupom">
                            <input type="checkbox" name="cupomDesconto" id="cupomDesconto">
                            <label for="cupomDesconto" class="haveDescont">Tenho um cupom</label>
                        </div>
                    </div>
                    <div class="showCupomInput" style="display: none; margin-top: 1rem; margin-left:-1.5rem;">
                        <label for="cupom" class="LabelCupom">Cupom</label>
                        <div class="input-container">
                            <i class="fa-solid fa-ticket"></i>
                            <input type="text" class="cupomInput" name="cupom" id="cupom" placeholder="Insira seu cupom">
                        </div>
                    </div>
                </div>
                <div class="opcoesPgt col-lg-9">
                    <p>Conheça as opções de pagamento:</p>
                    <div class="pgtSlide col-lg-10">
                        <button type="submit" id="btn1">Mensal</button>
                        <button type="submit" id="btn2">Anual</button>
                    </div>
                    <div id="infoSlide" class="col-lg-8">
                    </div>
                    <div class="d-grid gap-2 col-lg-9">
                        <button type="submit" class="btn btn-primary" id="enviar-form-price" >Inscreva-se</button>
                    </div>
                </div>
                <div class="terms col-lg-10">
                    <span class="privacityCaptcha">Este site é protegido por reCAPTCHA e aplica a política de privacidade e termos de serviço do Google.</span>
                </div>
            </div>
        </div>
    </div>
    </div>

    <?= view('./footer/index.php') ?>