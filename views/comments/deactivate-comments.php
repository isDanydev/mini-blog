<?php $title = 'Desactivar Comentario'; ?>
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

    $stm = $pdo->prepare("UPDATE comments SET is_deleted = TRUE WHERE id = :id");
    $stm->bindValue(':id', $commentId);
    $stm->execute();

    header('Location: http://localhost/mini-blog/comments/list-comments');
}
?>

<?php require_once './views/partials/footer.php'; ?>
