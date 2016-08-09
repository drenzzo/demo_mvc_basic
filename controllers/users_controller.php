<?php 

/**
 * Siempre se debe invocar antes al modelo que a la vista
 */
require_once('models/users_model.php');
$user = new users_model();
$data = $user->get_users();

require_once('views/users_view.php');

?>