<?php $title = 'Login'; ?>

<?php
session_start();
require_once './views/partials/header.php'; ?>

<?php

if (isset($_POST['username']) && isset($_POST['passwordata'])) {
    $username = $_POST['username'];
    $passwordata = $_POST['passwordata'];

    // Obtener los datos del usuario
    $stm = $pdo->prepare("SELECT * FROM users WHERE username = :username and password_hash = :passwordata");
    $stm->bindValue(':username', $username, PDO::PARAM_STR);
    $stm->bindValue(':passwordata', $passwordata, PDO::PARAM_STR);
    $stm->execute();
    $user = $stm->fetch(PDO::FETCH_ASSOC);

    if (!$user) {
        echo "Usuario no encontrado.";
        exit;
    }

    $_SESSION['user_id'] = $user['id'];
    $_SESSION['username'] = $user['username'];
    header('Location: http://localhost/mini-blog/comments/list-comments');
}
?>

<div class="container-fluid h-100 w-100 d-flex flex-column p-5 justify-content-center align-items-center bg-light">
    <form class="col-8 col-lg-6 bg-dark h-75 p-3 rounded d-flex flex-column justify-content-around" method="post">
        <h2 class="text-light text-center">Iniciar Session</h2>
        <div>
            <div class="form-floating mb-3">
                <input type="text" class="form-control" name="username" placeholder="eleducador" required>
                <label for="username">Usuario</label>
            </div>
            <div class="form-floating">
                <input type="password" class="form-control" name="passwordata" required>
                <label for="passwordata">Contraseña</label>
            </div>
        </div>
        <button class="btn btn-primary" type="submit">Iniciar session</button>
    </form>
</div>

<?php require_once './views/partials/footer.php'; ?>