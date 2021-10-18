<?php 
session_start();

$categorias = ['Infantil', 'Adolescente', 'Adulto'];
$nome = $_POST['nome'];
$idade = $_POST['idade'];
// var_dump($nome);
// var_dump($idade);

// Validações
if(empty($nome)){
    $_SESSION['mensagem-de-erro'] = 'O nome não pode ser vazio!';
    echo ("<meta http-equiv='refresh' content='0;url=index.php'/>");
    return;
}
else if(empty($idade)){
    $_SESSION['mensagem-de-erro'] = 'A idade não pode ser vazia!';
    echo ("<meta http-equiv='refresh' content='0;url=index.php'/>");
    return;
}
else if(strlen($nome)<3){
    $_SESSION['mensagem-de-erro'] = 'O nome não pode ter menos que 3 caracteres.';
    echo ("<meta http-equiv='refresh' content='0;url=index.php'/>");
    return;
}
else if(strlen($nome)>40){
    $_SESSION['mensagem-de-erro'] = 'O nome é muito extenso tem mais de 40 caracteres.';
    echo ("<meta http-equiv='refresh' content='0;url=index.php'/>");
    return;
}
else if(!is_numeric($idade)){
    $_SESSION['mensagem-de-erro'] = 'Valor digitado não é um número!';
    echo ("<meta http-equiv='refresh' content='0;url=index.php'/>");
    return;
}

// Definir categoria do competidor
if($idade>=6 && $idade<=12){
    echo "O competidor ".$nome." está na Categoria ".$categorias[0];
}
elseif($idade>=13 && $idade<=18){
    echo "O competidor ".$nome." está na Categoria ".$categorias[1];
}
elseif($idade>=18){
    echo "O competidor ".$nome." está na Categoria ".$categorias[2];
}
else{
    echo "O competidor ".$nome." não tem idade suficiente para competir!";
}
?>