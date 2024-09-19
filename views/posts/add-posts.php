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


if (isset($_POST['title']) && isset($_POST['content']) && isset($_POST['user'])) {
    $title = $_POST['title'];
    $content = $_POST['content'];
    $user = $_POST['user'];
    $stm = $pdo->prepare(
        "INSERT INTO posts (title, content, user_id) VALUES (:title, :content, :user)"
    );
    $stm->bindValue(':title', $title, PDO::PARAM_STR);
    $stm->bindValue(':content', $content, PDO::PARAM_STR);
    $stm->bindValue(':user', $user, PDO::PARAM_INT);
    $stm->execute();
    header('location: http://localhost/mini-blog/posts/list-posts');
}
?>

<div class="container-fluid h-100 w-100 d-flex flex-column p-5 justify-content-center align-items-center bg-light">
    <form class="col-8 col-lg-6 bg-dark  p-3 rounded d-flex flex-column justify-content-around" method="post">
        <h2 class="text-light text-center mb-4">Agregar Posts</h2>
        <div>
            <div class="form-floating mb-3">
                <input type="text" class="form-control" name="title" placeholder="Harry Potter y la cripta" required>
                <label for="title">Titulo</label>
            </div>
            <div class="mb-3">
                <label for="content" class="form-label text-light">Descripcion</label>
                <textarea class="form-control" name="content" rows="3"></textarea>
            </div>
            <div class="form-floating visually-hidden">
                <input type="number" class="form-control" name="user" value="<?= htmlspecialchars($_SESSION['user_id']) ?>">
                <label for="user">Usuario</label>
            </div>
            <button class="btn btn-primary w-100" type="submit">Agregar</button>
        </div>
    </form>

</div>

<?php require_once './views/partials/footer.php'; ?>