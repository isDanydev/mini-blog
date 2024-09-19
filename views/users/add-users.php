<?php $title = 'Agregar Usuario'; ?>
<?php require_once './views/partials/header.php'; ?>

<?php


if (isset($_POST['username']) && isset($_POST['passwordata'])) {
    $username = $_POST['username'];
    $passwordata = $_POST['passwordata'];
    $stm = $pdo->prepare("INSERT INTO users (username, password_hash) VALUES (:username, :password_hash)");
    $stm->bindValue(':username', $username, PDO::PARAM_STR);
    $stm->bindValue(':password_hash', $passwordata, PDO::PARAM_STR);
    $stm->execute();
    header('location: http://localhost/mini-blog/users/list-users');
}



?>

<div class="container-fluid h-100 w-100 d-flex flex-column p-5 justify-content-center align-items-center bg-light">
    <form class="col-8 col-lg-6 bg-dark h-75 p-3 rounded d-flex flex-column justify-content-around" method="post">
        <h2 class="text-light text-center">Agregar Usuario</h2>
        <div>
            <div class="form-floating mb-3">
                <input type="text" class="form-control" name="username" placeholder="eleducador">
                <label for="username">Usuario</label>
            </div>
            <div class="form-floating">
                <input type="password" class="form-control" name="passwordata" placeholder="123456">
                <label for="passwordata">Contraseña</label>
            </div>
        </div>
        <button class="btn btn-primary" type="submit">Agregar</button>
    </form>

</div>

<?php require_once './views/partials/footer.php'; ?>