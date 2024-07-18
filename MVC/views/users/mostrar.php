<h2>Listado de usuarios</h2>

<?php
while($user = $users->fetch_object()):?>
    <?=$user->email?> - <?=$user->apellidos?><br>

<?php endwhile;?>