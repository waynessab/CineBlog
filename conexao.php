<?php
$servidor = "localhost";
$usuario = "root";
$senha ="";
$dbname = "projeto2";
//criar conexão
$conn = mysqli_connect($servidor, $usuario, $senha, $dbname);

$pesquisar_email = $_POST['email_pesquisa'];
$result_email = "SELECT *  FROM usuários where email LIKE '%$pesquisar_email%' LIMIT 220";
$resultado_email = mysqli_query($conn,$result_email);

while($emailexibe = mysqli_fetch_array($resultado_email)){
    echo "email já cadastrado ".$email_exibe['email']."<br>";
    header('Location:series.html');
}
echo "erro no acesso, insira os dados corretos! "
?>