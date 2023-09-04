<?php
require __DIR__ . '/vendor/autoload.php';


use Slim\Http\Request as Request;
use Slim\Http\Response as Response;
use Slim\Container;
use Slim\App;
use Slim\Views\PhpRenderer as Render;

$configuration = [
    'settings' => [
       'displayErrorDetails' => true,
    ],
];

$container = new Container($configuration);
$app = new App($container);

$app->get('/', function (Request $request, Response $response, array $args) {

    $response->getBody()->write("<b>Por favor, acesse o endereço http://localhost:8080/frases</b><br><br>");
    $response->getBody()->write("<i>Troque o número da porta se for necessário.</i>");
    return $response;
});


$app->get('/frases[/{nome}]', function (Request $request, Response $response, array $args) {

    $tratamento= ["Senhor", "Dom", "Doutor", "Excelentíssimo", "Caro"];
    $qualidade = ["o príncipe", "o paladino", "o guru"];
    $lugar     = ["das Cataratas", "do Paraná", "do IFPR"];
    $nome      = isset($args['nome']) ? $args['nome'] : 'Anônimo';

    $frase = "Olá ". $tratamento[rand(0, 4)]. " " . $nome;
    $frase .= ", " . $qualidade[rand(0, 2)]. " " . $lugar[rand(0, 2)];

    $response->getBody()->write("<b>Infome seu nome na URL, como: http://localhost:8080/frases/Bob Brow<br><br></b>");

    $response->getBody()->write($frase);
    return $response;
});


$app->run();
