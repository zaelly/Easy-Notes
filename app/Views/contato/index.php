<link href="/assets/css/contato.css" rel="stylesheet" type="text/css"/>
<script src="/assets/javascript/contato.js" defer></script>
    
<?= view('./navbar/index.php') ?>

    <div class="container mt-5 container-contato" style="display:none;">
        <div class="row">
           <h1>Entre em contato conosco</h1>

           <div class="row">
           <span>Envie nos um email para que possamos te ajudar melhor! Ou entre em contato por outro meio de comunicação disponivel</span>
            <div class="col-6 col-sm-4">
                <label for="nome">Email:</label>
                <input type="email" id="email" name="email" required>
                <label for="nome">Nome:</label>
                <input type="nome" name="nome" id="nome">
            </div>
                <div class="icons-contact">
                    <div class="col-6 col-sm-4">
                        <i class="fa-solid fa-phone"></i>
                        <span>(61)9 9305-0211</span>
                    </div>
                    <div class="col-6 col-sm-4">
                        <i class="fa-brands fa-whatsapp"></i>
                        <span>Whatsapp</span>
                    </div>
                    <div class="col-6 col-sm-4">
                        <i class="fa-solid fa-desktop"></i>
                        <span>Acesso Remoto</span>
                    </div>
                </div>
           </div>
        </div>
    </div>
