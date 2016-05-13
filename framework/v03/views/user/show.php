<?php require_once 'views/header.php'; ?>

<h1>Datos de usuario </h1>
<?php
echo $this->user['id'] . ' - ' . $this->user['name'] . '<br>';

require_once 'views/footer.php';
?>
