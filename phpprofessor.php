
<html>
<head>
<title> Cadastro de Professores </title>
</head>
</html>

<?php
$host = "localhost";
$user = "root";
$pass = "";
$banco = "formulario";

$conexao = mysqli_connect($host, $user, $pass, $banco );
//$link = mysqli_connect("HOST", "USUARIO", "SENHA", "BASE");
 
if (!$conexao) {
    echo "Error: Falha ao conectar-se com o banco de dados MySQL." . PHP_EOL;
    echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
    echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
    exit;
}
 else echo "Sucesso: Sucesso ao conectar-se com a base de dados MySQL." . PHP_EOL;


$db_selected = mysqli_select_db($conexao, $banco) or die (mysqli_error());

if (!$db_selected) {
    die ('Can\'t use foo : ' . mysql_error());
}
?>

<?php

    $nome     =$_POST['nome'];
    $sexo     =$_POST['sexo'];
    $telefone      =$_POST['tel'];
    $cep      =$_POST['cep'];
    $contato   =$_POST['cont'];
    $psw   =$_POST['psw'];
    $nas   =$_POST['nas'];
    $email   =$_POST['email'];
    $cpf   =$_POST['cpf'];
    $endereco   =$_POST['ende'];
    $numero   =$_POST['num'];
//inserindo na tabela
$sql = "INSERT INTO professor(nome,sexo, tel, cep,cont, psw, nas, email, cpf, ende, num)
                    VALUES('$nome ','$sexo','$telefone','$cep','$contato','$psw', '$nas', '$email','$cpf', '$endereco', '$numero')";

if (mysqli_query($conexao, $sql)) {
      echo "New record created successfully";
} else {
echo "Error: " . $sql . "<br>" . mysqli_error($conexao);}
	  
	  mysqli_close($conexao);

?>