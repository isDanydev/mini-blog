<?php $title = 'Salir session'; ?>
<?php require_once 'views/partials/header.php'; ?>
<?php
session_start();
session_destroy(); // Destruir todas las sesiones
header("Location: users/add-users"); // Redirigir a la página de login
exit;
?>



<?php require_once 'views/partials/footer.php'; ?>