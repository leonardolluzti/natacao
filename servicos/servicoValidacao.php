<?php 
// Validações
function validaNome(string $nome):bool{
    if(empty($nome)){
        setarMensagemErro( mensagem:'O nome não pode ser vazio!');
        return false;
    }
    else if(strlen($nome)<3){
        setarMensagemErro( mensagem:'O nome não pode ter menos que 3 caracteres.');
        return false;
    }
    else if(strlen($nome)>40){
        setarMensagemErro( mensagem:'O nome é muito extenso tem mais de 40 caracteres.');
        return false;
    }
    return true;

}

function validaIdade(string $idade):bool{
    if(empty($idade)){
        setarMensagemErro( mensagem:'A idade não pode ser vazia!');
        return false;
    }    
    else if(!is_numeric($idade)){
        setarMensagemErro( mensagem:'Valor digitado não é um número!');
        return false;
    }
    return true;
}
?>