<?php 
$categorias = ['Infantil','Adolescente','Adulto'];
// Idade entre 6 e 12 anos
$categorias[0] = 'Infantil'; 
// Idade entre 13 e 18 anos
$categorias[1] = 'Adolescente';
// Idade maior que 18 anos
$categorias[2] = 'Adulto';

//print_r($categorias);

$nome = 'Leonardo';
$idade = 18;
//var_dump($nome);
//var_dump($idade);

if($idade >=6 && $idade <=12){
    echo 'O Competidor '.$nome.' concorre na categoria '.$categorias[0];
} 
elseif($idade >=13 && $idade<=18){
    echo 'O Competidor '.$nome.' concorre na categoria '.$categorias[1];
}
elseif($idade>18){
    echo 'O Competidor '.$nome.' concorre na categoria '.$categorias[2];
}
else{
    echo 'O Competidor '.$nome.' não tem idade suficiente para competir ficando Sem Categoria';
}

?>