<?php $title = 'Actualizar Usuario'; ?>
<?php session_start(); ?>
<?php require_once './views/partials/header.php'; ?>

<?php
if (isset($_GET['id'])) {
    $postId = $_GET['id'];

    // Obtener los datos del usuario
    $stm = $pdo->prepare(
        "SELECT p.title,p.created_at,u.username,p.content FROM posts p
            INNER JOIN users u on p.user_id=u.id 
            WHERE p.id = :id"
    );
    $stm->bindValue(':id', $postId, PDO::PARAM_INT);
    $stm->execute();
    $post = $stm->fetch(PDO::FETCH_ASSOC);

    if (!$post) {
        echo "Usuario no encontrado.";
        //header('Location: http://localhost/mini-blog/blog');
    }
}

$commentStm = $pdo->prepare(
    "SELECT comment FROM comments WHERE post_id = :post_id"
);
$commentStm->bindValue(':post_id', $postId, PDO::PARAM_INT);
$commentStm->execute();
$comments = $commentStm->fetchAll(PDO::FETCH_ASSOC);

?>

<div class="container-fluid d-grid h-100 w-100 d-flex flex-column p-5 justify-content-center  bg-light">
    <h2 class="text-dark text-center">Detalles del Post</h2>
    <div class=" d-flex flex-column py-5 gap-3 p-3 h-100 bg-dark justify-content-around align-items-center">
        <div class=" mb-3">
            <h3 class="text-light text-center"><?= htmlspecialchars($post['title']) ?></h3>
        </div>
        <div class="mb-3 d-flex flex-column gap-3 justify-content-center align-items-center">
            <div class="d-flex flex-column gap-3 justify-content-center align-items-center w-50">
                <div class=" text-light text-center">
                    <span>Autor: </span>
                    <h4><?php echo htmlspecialchars($post['username']); ?></h4>
                </div>
                <div>
                    <span class="text-light text-center">Fecha de creación: </span>
                    <p class="text-light text-center"><?= htmlspecialchars($post['created_at']) ?></p>
                </div>
            </div>
            <div>
                <span class="text-light text-center">Descripcion: </span>
                <p class="text-light text-center"><?= htmlspecialchars($post['content']) ?></p>
            </div>
            <div class="d-flex flex-column gap-3 justify-content-between align-items-center w-50">
                <span class="text-light text-center">Comentario: </span>
                <?php foreach ($comments as $comment): ?>
                    <div class="d-flex flex-column gap-3 justify-content-center align-items-center">
                        <p class="text-light text-center"><?= htmlspecialchars($comment['comment']) ?></p>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</div>

<?php require_once './views/partials/footer.php'; ?>