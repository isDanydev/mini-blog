<?php $title = 'Inicio'; ?>
<?php
session_start();
?>
<?php require_once 'views/partials/header.php'; ?>
<div class="hero-header">
    <div class="container-fluid py-5 rounded">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-7 col-md-12">
                    <h1 class="mb-3 text-light fw-bold">Crud Mini-Blog</h1>
                    <h1 class="mb-5 display-1 text-white fw-lighter">Administrador del Mini-Blog</h1>
                    <div class="d-flex gap-3">
                        <a href="" class="btn btn-light  btn-main">Codigo</a>
                        <a href="" class="btn btn-light  btn-main">Documentacion</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<?php require_once 'views/partials/footer.php'; ?>