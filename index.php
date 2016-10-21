<?php

require_once 'interface-field.php';
require_once 'abstract-input.php';
require_once 'class-text-input.php';

$inputName = new TextInput( 'partials/text-input', 'nome', 'Nome', 'Por favor, preencha o campo nome.' );

?><!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <title>Formulário com PHP OO</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body>
  <div class="container">
    <div class="row">
      <div class="col-sm-4">
        <h1>Formulário</h1>
        <p>Exemplo de formulário feito com PHP OO.</p>
        <form action="" method="POST">
          <?php $inputName->render(); ?>
          <button class="btn btn-primary" type="submit">Enviar</button>
        </form>
      </div>
    </div>
  </div>
</body>
</html>
