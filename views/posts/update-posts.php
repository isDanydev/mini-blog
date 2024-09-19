<?php $title = 'Actualizar Usuario'; ?>
<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header("Location: login");
    exit;
}
?>
<?php require_once './views/partials/header.php'; ?>
<?php
if (isset($_GET['id'])) {
    $postId = $_GET['id'];

    // Obtener los datos del usuario
    $stm = $pdo->prepare("SELECT * FROM posts WHERE id = :id");
    $stm->bindValue(':id', $postId, PDO::PARAM_INT);
    $stm->execute();
    $post = $stm->fetch(PDO::FETCH_ASSOC);

    if (!$post) {
        echo "Usuario no encontrado.";
        exit;
    }
}

if (isset($_POST['title']) && isset($_POST['content'])) {
    $title = $_POST['title'];
    $content = $_POST['content'];

    // Actualizar los datos del usuario
    $stm = $pdo->prepare("UPDATE posts SET title = :title, content = :content WHERE id = :id");
    $stm->bindValue(':title', $title, PDO::PARAM_STR);
    $stm->bindValue(':content', $content, PDO::PARAM_STR);
    $stm->bindValue(':id', $postId, PDO::PARAM_INT);
    $stm->execute();

    header('Location: http://localhost/mini-blog/posts/list-posts');
}
?>

<div class="container-fluid h-100 w-100 d-flex flex-column p-5 justify-content-center align-items-center bg-light">
    <form class="col-8 col-lg-6 bg-dark  p-3 rounded d-flex flex-column justify-content-around" method="post">
        <h2 class="text-light text-center">Actualizar Post</h2>
        <div>
            <div class="form-floating mb-3">
                <input type="text" class="form-control" name="title" value="<?= htmlspecialchars($post['title']) ?>">
                <label for="title">Titulo</label>
            </div>
            <div class="mb-3">
                <label for="content" class="form-label text-light">Descripcion</label>
                <textarea class="form-control" name="content" rows="3" aria-valuetext="Default value" aria-valuemin="0" aria-valuemax="100"><?= htmlspecialchars($post['content']) ?></textarea>
            </div>
        </div>
        <button class="btn btn-primary" type="submit">Actualizar</button>
    </form>
</div>

<?php require_once './views/partials/footer.php'; ?>