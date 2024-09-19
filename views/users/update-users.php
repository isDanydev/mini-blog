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
    $userId = $_GET['id'];

    // Obtener los datos del usuario
    $stm = $pdo->prepare("SELECT * FROM users WHERE id = :id");
    $stm->bindValue(':id', $userId, PDO::PARAM_INT);
    $stm->execute();
    $user = $stm->fetch(PDO::FETCH_ASSOC);

    if (!$user) {
        echo "Usuario no encontrado.";
        exit;
    }
}

if (isset($_POST['username']) && isset($_POST['passwordata'])) {
    $username = $_POST['username'];
    $passwordata = $_POST['passwordata'];

    // Actualizar los datos del usuario
    $stm = $pdo->prepare("UPDATE users SET username = :username, password_hash = :password_hash WHERE id = :id");
    $stm->bindValue(':username', $username, PDO::PARAM_STR);
    $stm->bindValue(':password_hash', $passwordata, PDO::PARAM_STR);
    $stm->bindValue(':id', $userId, PDO::PARAM_INT);
    $stm->execute();

    header('Location: http://localhost/mini-blog/users/list-users');
}
?>

<div class="container-fluid h-100 w-100 d-flex flex-column p-5 justify-content-center align-items-center bg-light">
    <form class="col-8 col-lg-6 bg-dark h-75 p-3 rounded d-flex flex-column justify-content-around" method="post">
        <h2 class="text-light text-center">Actualizar Usuario</h2>
        <div>
            <div class="form-floating mb-3">
                <input type="text" class="form-control" name="username" value="<?= htmlspecialchars($user['username']) ?>" placeholder="eleducador" required>
                <label for="username">Usuario</label>
            </div>
            <div class="form-floating">
                <input type="text" class="form-control" name="passwordata" value="<?= htmlspecialchars($user['password_hash']) ?>" required>
                <label for="passwordata">Contraseña</label>
            </div>
        </div>
        <button class="btn btn-primary" type="submit">Actualizar</button>
    </form>
</div>

<?php require_once './views/partials/footer.php'; ?>