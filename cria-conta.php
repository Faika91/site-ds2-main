<?php session_start();

$nome = $_POST[`nome`];
$email = $_POST[`email`];
$senha = $_POST[`senha`];
$ConfirmarSenha = $_POST[`ConfirmarSenha`];
$termos = $_POST[`termos`];

$_SESSION[`mensagemErro`] - array();

if(strlen($nome)<1){
    $_SESSION[`mensagemErro`][] = "O campo nome é obrigatório";
}

if(strlen($email)<1){
    $_SESSION[`mensagemErro`][] = "O campo email é obrigatório";
}
if(strlen($senha)<6){
    $_SESSION[`mensagemErro`][] = "O campo senha é obrigatório e deve ter no minino 6 caracteres";
}
if($senha<>$ConfirmarSenha){
    $_SESSION[`mensagemErro`][] = "senhas não conferem";
}

if(isset($termos)){
    $_SESSION[`mensagemErro`][] = "voce deve aceitar os termos";

}

print_r($_SESSION[`mensagemErro`]);
//verficar se o tamanho em posições da variavel $_SESSION[`mensagemErro`]
if(sizeof($_SESSION[`mensagemErro`])>0){
    echo "redirecionar e exibir os erros";
}else{
    echo "continuar com o cadastro";
}

?>