<?php $title = 'Agregar Usuario'; ?>
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
    $commentId = $_GET['id'];

    // Obtener los datos del usuario
    $stm = $pdo->prepare("SELECT * FROM comments WHERE id = :id");
    $stm->bindValue(':id', $commentId, PDO::PARAM_INT);
    $stm->execute();
    $comment = $stm->fetch(PDO::FETCH_ASSOC);

    if (!$comment) {
        echo "Usuario no encontrado.";
        exit;
    }
}

if (isset($_POST['comment'])) {
    $comment = $_POST['comment'];

    // Actualizar los datos del usuario
    $stm = $pdo->prepare("UPDATE comments SET comment = :comment WHERE id = :id");
    $stm->bindValue(':comment', $comment, PDO::PARAM_STR);
    $stm->bindValue(':id', $commentId, PDO::PARAM_INT);
    $stm->execute();

    header('Location: http://localhost/mini-blog/comments/list-comments');
}
?>

<div class="container-fluid h-100 w-100 d-flex flex-column p-5 justify-content-center align-items-center bg-light">
    <form class="col-8 col-lg-6 bg-dark  p-3 rounded d-flex flex-column justify-content-around" method="post">
        <h2 class="text-light text-center mb-4">Actualizar Comentario</h2>
        <div class="d-flex flex-column gap-3">
            <div>
                <div class="mb-3">
                    <label for="content" class="form-label text-light">Descripcion</label>
                    <textarea class="form-control" name="comment" rows="3" aria-valuetext="Default value" aria-valuemin="0" aria-valuemax="100"><?= htmlspecialchars($comment['comment']) ?></textarea>
                </div>
            </div>

            <button class="btn btn-primary w-100" type="submit">Actualizar</button>
        </div>
    </form>

</div>

<?php require_once './views/partials/footer.php'; ?>