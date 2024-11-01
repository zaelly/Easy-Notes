<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Link para a folha de estilo do Bootstrap -->
    <link rel="stylesheet" href="<?= base_url('theme/plugins/fontawesome-free/css/all.css') ?>">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Nota Fácil</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Playwrite+GB+S:ital,wght@0,100..400;1,100..400&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap" rel="stylesheet">
    <link href="/assets/css/home.css" rel="stylesheet" type="text/css"/>
        <script src="/assets/javascript/home.js" defer></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/js/fontawesome.min.js" integrity="sha512-NeFv3hB6XGV+0y96NVxoWIkhrs1eC3KXBJ9OJiTFktvbzJ/0Kk7Rmm9hJ2/c2wJjy6wG0a0lIgehHjCTDLRwWw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/js/all.min.js" integrity="sha512-6sSYJqDreZRZGkJ3b+YfdhB3MzmuP9R7X1QZ6g5aIXhRvR1Y/N/P47jmnkENm7YL3oqsmI6AK+V6AD99uWDnIw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/js/brands.min.js" integrity="sha512-N5K6sQXjzT79tR16zvBu7B0AqvYtHKvk3+eKuQWoVNQDGU5kR9W8OP3CTYtm3vVM2EtObrmtm0Jup17F718OyA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/brands.min.css" integrity="sha512-EJp8vMVhYl7tBFE2rgNGb//drnr1+6XKMvTyamMS34YwOEFohhWkGq13tPWnK0FbjSS6D8YoA3n3bZmb3KiUYA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/regular.min.css" integrity="sha512-j+P0XpTXw+hDTK64xqC/cjv62cf629/IR4/0bokmich7J8XdVlWT40+1M/Z58rCQ4F+3QoJIfzh6Ui6TTIP6WQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="<?= base_url('theme/plugins/icheck-bootstrap/icheck-bootstrap.css') ?>">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>
<body>
    <!-- Inclui a navbar -->
    <?= view('./navbar/index.php') ?>

    <div class="container-home">
        <div class="invict row">
            <div class="text-center col overlay-text invitation">
                <h1 class="logo">Nota Fácil</h1>
                <p class="text-info">Inicie um teste agora mesmo!</p>
                <button type="button" class="btn btn-info" onclick="window.location.href ='<?= base_url('comece_ja') ?>'">COMECE AGORA MESMO</button>
                <!-- Coloque aqui o vídeo que introduz o sistema -->
            </div>
            <div id="activeAnimationActive" class="infos col">
                <div class="col-lg-7">
                    <h1>
                        Descubra o sistema de gestão que <span>automatiza as operações</span> do seu negócio, 
                        liberando seu tempo para <span>focar no crescimento</span> e no que realmente importa! 
                        Com ferramentas completas e <span>integração inteligente</span>, simplifique processos e 
                        maximize resultados!
                    </h1>
                </div>
            </div>
        </div>
        <div class="apresentacao container align-items-center container-fluid">
            <div class="col-lg row">
                <div class="col-lg-4">
                    <h1>Automação <span>INTELIGENTE</span> para o seu comércio</h1>
                    <p>O Notas Fácil é a solução ideal para empresas do comércio que buscam eficiência e praticidade. Com nossa expertise em automação comercial, oferecemos um sistema versátil que atende empresas enquadradas nos regimes de Simples Nacional, Lucro Real e Lucro Presumido, proporcionando maior agilidade nas operações e redução de erros nas rotinas fiscais.</p>
                </div>
                <div class="col-lg-4">
                    <h1>A tecnologia que <span>IMPULSIONA</span> o seu negócio</h1>
                    <p>Nosso sistema robusto e interativo automatiza tarefas e conecta setores, garantindo uma gestão integrada e eficiente. Com o Notas Fácil, micro, pequenas e médias empresas podem contar com uma ferramenta que não apenas facilita o dia a dia, mas também assegura conformidade com a legislação atual. É a solução completa para quem deseja crescer com segurança e eficiência.</p>
                </div>
                <div class="col-lg-4">
                    <h1>Sistema de gestão online que <span>FACILITA</span> o seu negócio</h1>
                    <p>Transforme a gestão do seu negócio com o Gestão Prática, o sistema online que simplifica o seu dia a dia! Emita notas fiscais rapidamente, gere boletos personalizados, controle suas finanças, acompanhe as vendas físicas e online, e administre o estoque de forma integrada. Tudo que sua empresa precisa, em um único lugar.</p>
                </div>
            </div>
        </div>
        <div class="container text-center">
            <div class="row align-items-center">
                <div class="img col">
                <div className="container-video" id="videoContainer">
                    <video width="600" className="video" controls>
                        <source src="/imgs/VídeoDivulgacao.mp4" type="video/mp4"/>
                    </video>
                </div> 
                </div>
            </div>
        </div>
        <div class="container-fluid row col-icons">
            <h1>NOSSO SISTEMA DÁ SEGURANÇA ESTABILIDADE PARA O SEU NEGÓCIO</h1>
                <div class="icon-ifood align-items-center col-lg-2">
                    <div class="icon">
                        <i class="fa-solid fa-pizza-slice"></i>
                    </div>
                    <span>IFOOD</span>
                </div>
                <div class="icon-mercados align-items-center col-lg-2">
                    <div class="icon">
                        <i class="fa-solid fa-shop"></i>
                    </div>
                    <span>MERCADOS</span>
                </div>
                <div class="icon-lojas align-items-center col-lg-2">
                    <div class="icon">
                        <i class="fa-solid fa-utensils"></i>
                    </div>
                    <span>BARES E RESTAURANTES</span>
                </div>
        </div>
        <div class="container-fluid planos" id="ponto-planos">
            <div class="text-center">
                <h2>Conheça nossos planos</h2>
                <div class="pgtSlide">
                    <button type="submit" id="btn1">Mensal</button>
                    <button type="submit" id="btn2">Anual</button>
                </div>
                <div class="container align-items-center" id="infoSlideMensal">
                    <div class="row">
                        <div class="cards" style="width: 10em;">
                            <div class="card-body">
                                <h5 class="card-title">Módulo Básico</h5>
                                <span>
                                    <p>Dashboard Completo</p>
                                </span>
                                <span>
                                    <p>Controle de estoque</p>
                                </span>
                                <span>
                                    <p>Controle de vendas</p>
                                </span>
                                <span>
                                    <p>Controle de finanças</p>
                                </span>
                            </div>
                        </div>
                        <div class="cards" style="width: 10em;">
                            <div class="card-body">
                                <h5 class="card-title">NFC</h5>
                                <span>
                                    <p>Dashboard Completo</p>
                                </span>
                                <span>
                                    <p>Controle de estoque</p>
                                </span>
                                <span>
                                    <p>Controle de vendas</p>
                                </span>
                                <span>
                                    <p>Controle de finanças</p>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container align-items-start" id="infoSlideAnual">
                <div class="row">
                        <div class="cards" style="width: 10em;">
                            <div class="card-body">
                                <h5 class="card-title">Módulo Básico</h5>
                                <span>
                                    <p>Dashboard Completo</p>
                                </span>
                                <span>
                                    <p>Controle de estoque</p>
                                </span>
                                <span>
                                    <p>Controle de vendas</p>
                                </span>
                                <span>
                                    <p>Controle de finanças</p>
                                </span>
                            </div>
                        </div>
                        <div class="cards" style="width: 10em;">
                            <div class="card-body">
                                <h5 class="card-title">NFCe</h5>
                                <span>
                                    <p>Dashboard Completo</p>
                                </span>
                                <span>
                                    <p>Controle de estoque</p>
                                </span>
                                <span>
                                    <p>Controle de vendas</p>
                                </span>
                                <span>
                                    <p>Controle de finanças</p>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="penultimo-rodape">
            <div class="text">
                <h2>Avance com rapidez, mantenha o alinhamento!</h2>
                <h3>Comece já ou faça um teste!</h3>
            </div>
            <div class="btn">
                <button type="button" id="comece-ja" onclick="window.location.href ='<?= base_url('comece_ja') ?>'" class="btn btn-outline-light btn-lg">
                    Comece já!
                </button>
            </div>
        </div>
    </div>
    <!-- inclui o rodapé -->
    <?= view('./footer/index.php') ?>
</body>
</html>
