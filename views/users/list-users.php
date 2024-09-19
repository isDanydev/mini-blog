<?php $title = 'Listar Usuarios'; ?>
<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header("Location: login");
    exit;
}
?>
<?php require_once './views/partials/header.php'; ?>
<?php

// Configuración de paginación
$registros_por_pagina = 5; // Número de registros por página
$pagina_actual = isset($_GET['pagina']) ? (int)$_GET['pagina'] : 1;
$offset = ($pagina_actual - 1) * $registros_por_pagina;

// Contar el total de registros
$total_stm = $pdo->prepare("SELECT COUNT(*) FROM users");
$total_stm->execute();
$total_registros = $total_stm->fetchColumn();
$total_paginas = ceil($total_registros / $registros_por_pagina);

// Obtener los registros para la página actual
$stm = $pdo->prepare("SELECT * FROM users LIMIT :offset, :limit");
$stm->bindValue(':offset', $offset, PDO::PARAM_INT);
$stm->bindValue(':limit', $registros_por_pagina, PDO::PARAM_INT);
$stm->execute();
$resultado = $stm->fetchAll(PDO::FETCH_ASSOC);

?>

<div class="container-fluid h-100 w-100 d-flex flex-column bg-light p-3">
    <span< /p><b>Usuario: </b><?php echo htmlspecialchars($_SESSION['username']); ?></span>
        <h1 class="m-0">Lista de Usuarios</h1>
        <table class="table table-striped mt-3">
            <thead>
                <tr class="grid__table_th_users">
                    <th>ID</th>
                    <th>Usuario</th>
                    <th>Fecha de Creación</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($resultado as $usuario): ?>
                    <tr class="grid__table_tr_users <?php echo ($usuario['is_deleted'] == 0) ? 'table-dark' : 'table-light'; ?>">
                        <td><?php echo htmlspecialchars($usuario['id']); ?></td>
                        <td><?php echo htmlspecialchars($usuario['username']); ?></td>
                        <td><?php echo htmlspecialchars($usuario['created_at']); ?></td>
                        <td class="actions">
                            <a href="update-users?id=<?php echo htmlspecialchars($usuario['id']); ?>" class="btn btn-warning w-100">Editar</a>
                            <?php if ($usuario['is_deleted'] == 0): ?>
                                <a href="deactivate-users?id=<?php echo htmlspecialchars($usuario['id']); ?>" class="btn btn-danger w-100">Desactivar</a>
                            <?php else: ?>
                                <a href="active-users?id=<?php echo htmlspecialchars($usuario['id']); ?>" class="btn btn-dark w-100">Activar</a>
                            <?php endif; ?>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
        <nav class="w-100 d-flex justify-content-end">
            <ul class="pagination">
                <?php if ($pagina_actual > 1): ?>
                    <li class="page-item">
                        <a class="page-link" href="?pagina=<?php echo $pagina_actual - 1; ?>">Anterior</a>
                    </li>
                <?php endif; ?>

                <?php for ($i = 1; $i <= $total_paginas; $i++): ?>
                    <li class="page-item <?php echo ($i == $pagina_actual) ? 'active' : ''; ?>">
                        <a class="page-link" href="?pagina=<?php echo $i; ?>"><?php echo $i; ?></a>
                    </li>
                <?php endfor; ?>

                <?php if ($pagina_actual < $total_paginas): ?>
                    <li class="page-item">
                        <a class="page-link" href="?pagina=<?php echo $pagina_actual + 1; ?>">Siguiente</a>
                    </li>
                <?php endif; ?>
            </ul>
        </nav>
</div>

<?php require_once 'views/partials/footer.php'; ?>