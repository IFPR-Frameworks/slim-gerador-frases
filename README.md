
## Gerador de Frases com Slim PHP :elephant:

Esse projetem tem como objetivo fazer um simples Gerador de Frases. A ideia é apresentar uma nova frase a cada vez que a URL for chamada.


### Instalação do Slim

```
composer require slim/slim:3.*
```


### Estrutura Básica

```
<?php 

    require __DIR__ . "/vendor/autoload.php";

    use Slim\App;
    use Slim\Http\Request;
    use Slim\Http\Response;

    $app = new App();

    $app->get("/", function(Request $request, Response $response, $args){

       //Ações a serem executadas ao se chamar a rota

    });

    $app->run();

```

### Usando o projeto existente

Se você desejar, pode baixar e usar o projeto existente. Para isso basta realizar o download do projeto, e dentro da pasta executar o comando:

```
composer install
```


***Observação:** as vezes, após essa operação, é necessário fechar e abrir novamente o VSCode para que o VSCode “passe a conhecer” os novos arquivos baixados;*

**Pronto, o projeto está baixado e configurado!**
