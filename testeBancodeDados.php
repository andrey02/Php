<?php
include "acessoBancodeDados.php";

$banco = new BancoDeDados("localhost","root", "", "andrei");

$banco->conexao();

$banco->listar("select * from cliente");

?>