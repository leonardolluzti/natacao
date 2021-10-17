<?php 
$categorias = ['Infantil', 'Adolescente', 'Adulto'];
$nome = $_POST['nome'];
$idade = $_POST['idade'];
// var_dump($nome);
// var_dump($idade);
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