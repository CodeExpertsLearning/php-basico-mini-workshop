<?php 
chdir(dirname(__DIR__));

define('VIEW', 'views/');
/**
 * Paga a pagina via codição/operador ternária.
 * @var string
 */
$page = isset($_GET['page'])? $_GET['page'] : 'home';

/**
 * Paginas Permitidas
 */
$paginasPermitidas = ['home', 'sobre', 'contato'];

if(!in_array($page, $paginasPermitidas)) return die("Página não permitida!");

$page = VIEW . $page . '.phtml';

if(!file_exists($page)) return die("Página não encontrada!");

require $page;