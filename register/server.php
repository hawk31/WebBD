<?php

$usuario = $_POST['usuario'];
$pass = $_POST['pass'];
$name = $_POST['name'];
$email = $_POST['email'];
$tel = $_POST['tel'];


$mysqli = new mysqli('localhost', 'root', '', 'juguete');

/* verificar conexión */
if (mysqli_connect_errno()) {
    printf("Error de conexión: %s\n", mysqli_connect_error());
    exit();
}

$stmt = $mysqli->prepare("INSERT INTO cliente VALUES (?, ?, ?, ?, ?)");
$stmt->bind_param('sssss', $usuario, $pass, $name, $tel, $email);


/* ejecuta sentencias prepradas */
$stmt->execute();


/* cierra sentencia y conexión */
$stmt->close();



/* cierra la conexión */
$mysqli->close();

echo '<button type="button" class="btn btn-success">Hecho</button>
';
?>