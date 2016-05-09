<?php require_once 'views/header.php'; ?>
<h1>Lista de usuarios </h1>
<?php

foreach ($this->users as $user )
{
    echo $user['id'] . ' - ' . $user['name'] . '<br>';
}
require_once 'views/footer.php'; 
?>
