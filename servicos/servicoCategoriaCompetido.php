<?php 
function defineCategoriaCompetidor(string $nome, string $idade){
    $categorias = ['Infantil', 'Adolescente', 'Adulto'];
    // Definir categoria do competidor
    if(validaNome($nome) && validaIdade($idade)){
        removeMensagemErro();
        if($idade>=6 && $idade<=12){
            setarMensagemSucesso(mensagem: "O competidor ".$nome." está na Categoria ".$categorias[0]);
            return null;
        }
        elseif($idade>=13 && $idade<=18){
            setarMensagemSucesso(mensagem: "O competidor ".$nome." está na Categoria ".$categorias[1]);
            return null;
        }
        elseif($idade>=18){
            setarMensagemSucesso(mensagem: "O competidor ".$nome." está na Categoria ".$categorias[2]);
            return null;
        }
        else{
            setarMensagemSucesso(mensagem: "O competidor ".$nome." não tem idade suficiente para competir!");
            return null;
        }
    }
    else{
        removeMensagemSucesso();
        return obterMensagemErro();
    }
}

?>