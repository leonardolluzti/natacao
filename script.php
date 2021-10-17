<?php 
$categorias = ['Infantil', 'Adolescente', 'Adulto'];
$nome = $_POST['nome'];
$idade = $_POST['idade'];
// var_dump($nome);
// var_dump($idade);

// Validações
if(empty($nome)){
    echo "O nome não pode ser vazio!";
    return;
}
if(empty($idade)){
    echo "A idade não pode ser vazia!";
    return;
}
if(strlen($nome)<3){
    echo "O nome não pode ter menos que 3 caracteres.";
    return;
}
if(strlen($nome)>40){
    echo "O nome é muito extenso tem mais de 40 caracteres.";
    return;
}
if(!is_numeric($idade)){
    echo "Valor digitado não é um número!";
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