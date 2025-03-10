<?php
//

session_start();

//autenticado
$usuario_autenticado =false;

$usuario_id = null;

$usuario_perfil_id = null;

//array de id de usuarios e admins
$perfil = array(1 => 'admin', 2 => 'user');

//usuarios

$usuarios = array(
    array('id' => 1, 'email' => 'trole@teste.com', 'senha' => '123456', 'perfil_id' => 2),
    array('id' => 2, 'email' => 'claudio.brujah@gmail.com', 'senha' => '123456', 'perfil_id' => 1),
    array('id' => 3, 'email' => 'azul@teste.com', 'senha' => 'canabis', 'perfil_id' => 2),
    array('id' => 4, 'email' => 'bluh@teste.com', 'senha' => 'canabis', 'perfil_id' => 1),
);
//logica de verificação de email e senha
foreach($usuarios as $user){
    if($user['email'] == $_POST['email'] && $user['senha'] == $_POST['senha']){
        $usuario_autenticado = true;
        $usuario_id = $user['id'];
        $usuario_perfil_id = $user['perfil_id'];
    }
}

if($usuario_autenticado){
    echo 'usuario autenticado';
    $_SESSION['autenticado'] = 'SIM';
    $_SESSION['id'] = $usuario_id;
    $_SESSION['perfil_id'] = $usuario_perfil_id;
    header('Location: home.php');
} else {
    $_SESSION['autenticado'] = 'NAO';
   header('Location: index.php?login=erro');
}



/*
print_r ($_GET);

echo '<br />';
echo $_GET['email'];

echo '<br />';
echo $_GET['senha'];

*/
/*
print_r($_POST);

echo '<br />';
echo $_POST['email'];

echo '<br />';
echo $_POST['senha'];

*/






?>