<?php

require 'bdconfig.php';

/*PORTFOLIO*/
$portfolio = R::dispense('portfolio');
$portfolio->imagem = 'p01-small.jpg';
R::store($portfolio);


/*MEMBRO*/
$membro = R::dispense('membro');
$membro->nome = 'Jaudir Aguiar';
$membro->descricao = 'Ola, meu nome é Jaudir e eu gosto muito de viagens';
$membro->foto = 'jaudir.png';
R::store($membro);


/*USUARIO*/
$usuario = R::dispense('usuario');
$usuario->login = 'administrador';
$usuario->senha = md5("nada"."admin");
R::store($usuario);

R::close();

?>