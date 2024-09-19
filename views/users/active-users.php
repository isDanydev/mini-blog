<?php $title = 'Eliminar Usuario'; ?>
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
    $userId = $_GET['id'];

    $stm = $pdo->prepare("UPDATE users SET is_deleted = FALSE WHERE id = :id");
    $stm->bindValue(':id', $userId);
    $stm->execute();

    header('Location: http://localhost/mini-blog/users/list-users');
}
?>

<?php require_once './views/partials/footer.php'; ?>
