<link href="/assets/css/contato.css" rel="stylesheet" type="text/css"/>
<script src="/assets/javascript/contato.js" defer></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/js/fontawesome.min.js" integrity="sha512-NeFv3hB6XGV+0y96NVxoWIkhrs1eC3KXBJ9OJiTFktvbzJ/0Kk7Rmm9hJ2/c2wJjy6wG0a0lIgehHjCTDLRwWw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/js/all.min.js" integrity="sha512-6sSYJqDreZRZGkJ3b+YfdhB3MzmuP9R7X1QZ6g5aIXhRvR1Y/N/P47jmnkENm7YL3oqsmI6AK+V6AD99uWDnIw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/js/brands.min.js" integrity="sha512-N5K6sQXjzT79tR16zvBu7B0AqvYtHKvk3+eKuQWoVNQDGU5kR9W8OP3CTYtm3vVM2EtObrmtm0Jup17F718OyA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/brands.min.css" integrity="sha512-EJp8vMVhYl7tBFE2rgNGb//drnr1+6XKMvTyamMS34YwOEFohhWkGq13tPWnK0FbjSS6D8YoA3n3bZmb3KiUYA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/regular.min.css" integrity="sha512-j+P0XpTXw+hDTK64xqC/cjv62cf629/IR4/0bokmich7J8XdVlWT40+1M/Z58rCQ4F+3QoJIfzh6Ui6TTIP6WQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

<link rel="stylesheet" href="<?= base_url('theme/plugins/icheck-bootstrap/icheck-bootstrap.css') ?>">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

<link rel="stylesheet" href="<?= base_url('theme/plugins/fontawesome-free/css/all.css') ?>">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Playwrite+GB+S:ital,wght@0,100..400;1,100..400&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap" rel="stylesheet">

<?= view('./navbar/index.php') ?>
<main>
    <div class="container mt-5 container-contato">
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
</main>
<?= view('./footer/index.php') ?>

