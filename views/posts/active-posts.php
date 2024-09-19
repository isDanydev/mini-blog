<?php $title = 'Activar Post'; ?>
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

    $stm = $pdo->prepare("UPDATE posts SET is_deleted = FALSE WHERE id = :id");
    $stm->bindValue(':id', $postId);
    $stm->execute();

    header('Location: http://localhost/mini-blog/posts/list-posts');
}
?>

<?php require_once './views/partials/footer.php'; ?>
