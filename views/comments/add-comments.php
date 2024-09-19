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



$stm = $pdo->prepare(
    "SELECT p.id, p.title, p.content,u.username,p.created_at,p.is_deleted FROM posts p 
     inner join users u on p.user_id = u.id
     ORDER BY p.id DESC"
);
$stm->execute();
$resultado = $stm->fetchAll(PDO::FETCH_ASSOC);

if (isset($_POST['post_id']) && isset($_POST['comment']) && isset($_SESSION['user_id'])) {
    $idPost = $_POST['post_id'];
    $comment = $_POST['comment'];
    $idUser = $_SESSION['user_id'];
    $idPost = intval($idPost);
    $idUser = intval($idUser);

    $stm = $pdo->prepare(
        "INSERT INTO comments (post_id, comment, user_id) VALUES (:post_id, :comment, :user_id)"
    );
    $stm->bindValue(':post_id', $idPost, PDO::PARAM_INT);
    $stm->bindValue(':comment', $comment, PDO::PARAM_STR);
    $stm->bindValue(':user_id', $idUser, PDO::PARAM_INT);
    $stm->execute();
    header('location: http://localhost/mini-blog/comments/list-comments');
}
?>

<div class="container-fluid h-100 w-100 d-flex flex-column p-5 justify-content-center align-items-center bg-light">
    <span><b>Usuario: </b><?php echo htmlspecialchars($_SESSION['username']); ?></span>
    <form class="col-8 col-lg-6 bg-dark  p-3 rounded d-flex flex-column justify-content-around" method="post">
        <h2 class="text-light text-center mb-4">Agregar Posts</h2>
        <div class="d-flex flex-column gap-3">
            <select id="postSelect" class="form-select form-select-sm" aria-label=".form-select-sm example">
                <option selected>Selecciona el Posts a comentar</option>
                <?php foreach ($resultado as $postsData): ?>
                    <option value="<?php echo htmlspecialchars($postsData['id']); ?>" data-content="<?php echo htmlspecialchars($postsData['content']); ?>">
                        <?php echo htmlspecialchars($postsData['title']); ?>
                    </option>
                <?php endforeach; ?>
            </select>

            <textarea name="comment" class="form-control" rows="4" placeholder="Escribe tu comentario aquí..." required></textarea>
            <input type="hidden" name="post_id" id="post_id">


            <div id="postContent" class="post-content">
                <h5 class="text-light text-center">Contenido del post</h5>
            </div>

            <button class="btn btn-primary w-100" type="submit">Agregar</button>
        </div>
    </form>

</div>

<?php require_once './views/partials/footer.php'; ?>