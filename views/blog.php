<?php $title = 'Blog'; ?>
<?php
session_start();
?>
<?php require_once 'views/partials/header.php'; ?>

<?php

// Configuración de paginación
$registros_por_pagina = 5; // Número de registros por página
$pagina_actual = isset($_GET['pagina']) ? (int)$_GET['pagina'] : 1;
$offset = ($pagina_actual - 1) * $registros_por_pagina;

// Contar el total de registros
$total_stm = $pdo->prepare("SELECT COUNT(*) FROM posts");
$total_stm->execute();
$total_registros = $total_stm->fetchColumn();
$total_paginas = ceil($total_registros / $registros_por_pagina);

// Obtener los registros para la página actual
$stm = $pdo->prepare(
    "SELECT p.id, p.title, p.content,u.username,p.created_at,p.is_deleted FROM posts p 
     inner join users u on p.user_id = u.id
     where p.is_deleted = 0
     ORDER BY p.id DESC
     LIMIT :offset, :limit"
);
$stm->bindValue(':offset', $offset, PDO::PARAM_INT);
$stm->bindValue(':limit', $registros_por_pagina, PDO::PARAM_INT);
$stm->execute();
$resultado = $stm->fetchAll(PDO::FETCH_ASSOC);

?>



<div class="container-fluid blog py-5 bg-light">
    <div class="container py-5">
        <div class="mx-auto text-center" style="max-width: 600px">
            <h1 class="mb-5 display-3">Ultimos posts</h1>
        </div>
        <div class="row g-5 justify-content-center d-flex gap-3 mx-1">
            <!-- Primeiro Blog -->

            <?php foreach ($resultado as $post): ?>
                <div class="col-md-8 col-lg-5 bg-dark rounded effect__card" style="height: 450px;">
                    <div class="blog-item rounded-bottom grid__item px-2 py-4">
                        <div class="blog-img overflow-hidden position-relative img-border-radius">
                            <img src="./img/back-main.webp" class="img-fluid w-100" alt="Image">
                        </div>
                        <div class="px-4 py-2 bg-light rounded-bottom d-flex flex-column justify-content-between overflow-auto">
                            <div class="blog-text-inner">
                                <a href="<?php echo "http://localhost/mini-blog/posts/detail-posts?id=" . $post['id']; ?>" class="h4"><?php echo htmlspecialchars($post['title']); ?></a>
                                <p class="mt-3 mb-4 "><?php echo htmlspecialchars($post['content']); ?></p>
                            </div>
                            <div class="text-center">
                                <a href="<?php echo "http://localhost/mini-blog/posts/detail-posts?id=" . $post['id']; ?>" class="btn btn-primary w-100">Ver mas</a>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>

        </div>
        <nav class="w-100 d-flex justify-content-end mt-5">
            <ul class="pagination">
                <?php if ($pagina_actual > 1): ?>
                    <li class="page-item">
                        <a class="page-link" href="?pagina=<?php echo $pagina_actual - 1; ?>">Anterior</a>
                    </li>
                <?php endif; ?>

                <?php for ($i = 1; $i <= $total_paginas; $i++): ?>
                    <li class="page-item <?php echo ($i == $pagina_actual) ? 'active' : ''; ?>">
                        <a class="page-link" href="?pagina=<?php echo $i; ?>"><?php echo $i; ?></a>
                    </li>
                <?php endfor; ?>

                <?php if ($pagina_actual < $total_paginas): ?>
                    <li class="page-item">
                        <a class="page-link" href="?pagina=<?php echo $pagina_actual + 1; ?>">Siguiente</a>
                    </li>
                <?php endif; ?>
            </ul>
        </nav>
    </div>
</div>

<?php require_once 'views/partials/footer.php'; ?>