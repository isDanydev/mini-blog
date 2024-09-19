<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="http://localhost/mini-blog/css/bootstrap.min.css">
    <link rel="stylesheet" href="http://localhost/mini-blog/css/global.css">
    <title><?= $title; ?></title>
    <link rel="icon" href="http://localhost/mini-blog/img/icon.png" type="image/x-icon">
</head>

<body class="container-fluid">
    <div class="" style="z-index: 2;">
        <nav class="navbar navbar-dark bg-dark navbar-expand-xl py-3 px-3 d-flex justify-content-center">
            <button class="navbar-toggler py-2 px-3" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-menu-2">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                    <path d="M4 6l16 0" />
                    <path d="M4 12l16 0" />
                    <path d="M4 18l16 0" />
                </svg>
            </button>
            <div class="collapse navbar-collapse " id="navbarCollapse">
                <div class="navbar-nav w-100 d-flex align-self-start">
                    <a href="<?php echo "http://localhost/mini-blog/"; ?>" class="nav-item nav-link active">Inicio</a>
                    <?php if (isset($_SESSION['user_id'])): ?>
                        <a href="<?php echo "http://localhost/mini-blog/users/list-users"; ?>" class="nav-item nav-link">Usuarios</a>
                        <a href="<?php echo "http://localhost/mini-blog/posts/list-posts"; ?>" class="nav-item nav-link">Posts</a>
                        <a href="<?php echo "http://localhost/mini-blog/comments/list-comments"; ?>" class="nav-item nav-link">Comentarios</a>
                        <a href="<?php echo "http://localhost/mini-blog/blog"; ?>" class="nav-item nav-link">Blog</a>
                    <?php else : ?>
                        <a href="<?php echo "http://localhost/mini-blog/blog"; ?>" class="nav-item nav-link">Blog</a>
                    <?php endif; ?>
                </div>
                <?php if (isset($_SESSION['user_id'])): ?>
                    <div class="navbar-nav w-100 d-flex align-self-end end-0 align-items-end align-content-end justify-content-end">
                        <a href="<?php echo "http://localhost/mini-blog/logout"; ?>" class="nav-item nav-link">Logout</a>
                    </div>
                <?php else: ?>
                    <div class="navbar-nav w-100 d-flex align-self-end end-0 align-items-end align-content-end justify-content-end">
                        <a href="<?php echo "http://localhost/mini-blog/login"; ?>" class="nav-item nav-link">Login</a>
                        <a href="<?php echo "http://localhost/mini-blog/users/add-users"; ?>" class="nav-item nav-link">Registrar</a>
                    </div>
                <?php endif; ?>
            </div>
        </nav>
    </div>