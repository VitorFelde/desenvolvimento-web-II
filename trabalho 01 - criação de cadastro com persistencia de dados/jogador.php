<?php 

//criando as variaveis para melhor controle das inputs/resps do user

/*if (!file_exists("arquivos")) {
    mkdir("arquivos", 0777, true); // Tenta criar a pasta automaticamente
}quando estavamos tentando resolver o problema de nao estar sendo incluido na table, pesquisamos e esse resultado seria basicamente pra criar a pasta arquivos
mas nao foi necessario*/

/*ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

fizemos igual na aula, e ajudou mto a resolver o que tava ficando erradi*/

include_once('persistenciatop.php');  

$jogadores = buscaDados('jogadores.json');

$mensagem = "";
$nome = "";
$perna = "";
$gols = "";
$assist = "";
$titulos = "";

$msgErro = array();

if (isset($_POST["nome"])) {

    $nome = $_POST["nome"];
    $perna = $_POST["perna"];
    $gols = $_POST["gols"];
    $assist = $_POST["assist"];
    $titulos = $_POST["titulos"];


    if (trim ($nome) == '') {
        array_push($msgErro, "Informe o nome do(a) jogador(a)");
    }
        
    if (trim ($perna) == '' || $perna == '----Perna dominante-----') { //essa foi a forma que achei de verificar quando o usuario nao poe nada
        array_push($msgErro, "Informe a perna dominante do(a) jogador(a)");
    }

    if (trim ($gols) == '') {
        array_push($msgErro, "Informe a quantidade de gols do(a) jogador(a)");
    }

    if (trim ($assist) == '') {
        array_push($msgErro, "Informe a quantidade de assistencia do(a) jogador(a)");
    }

    if (trim ($titulos) == '') {
        array_push($msgErro, "Informe a quantidade de titulos do(a) jogador(a)");
    }

    //print_r($msgErro);

    if (count($msgErro) == 0) {
      $jogador = array("id" => uniqid(), "nome" => $nome, "perna" => $perna, "gols" => $gols, "assists" => $assist, "titulos" => $titulos);
      
      array_push($jogadores, $jogador);

      salvarDados($jogadores, 'jogadores.json');
  
      header("location: jogador.php");
      
      
      }
      
      
      else {
        $mensagem = implode("<br>", $msgErro);
        }
      }
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jogador(a) fera demais</title>
  </head>
  <body>
    <h1>Cadastro de jogadores/jogadoras de futebol</h1>

    <h3>Cadastar um novo jogador(a)</h3>

    <form method="POST" action="">
    
    <input type="text" placeholder="Digite o nome do jogador(a)" name = "nome" value="<?=$nome?>"/>
    
    <br><br>
    
    <select id="perna" name="perna">
      <option>----Perna dominante-----</option>
      <option value="D" <?= $perna == "D" ? "selected" : "" ?>>Direita</option>
      <option value="E" <?= $perna == "E" ? "selected" : "" ?>>Esquerda</option>
      <option value="A" <?= $perna == "A" ? "selected" : "" ?>>Ambidestro(a)</option>
    </select>
    
    <br><br>

    <input type="number" placeholder="Quantidade de gols" min=0 name = "gols" value="<?=$gols?>">

    <br><br>
    
    <input type="number" placeholder="Quantidade de assistências" min=0 name = "assist" value="<?=$assist?>">

    <br><br>

  
    <input type="number" placeholder="Quantidade de títulos" name = "titulos" value="<?=$titulos?>">

    <br><br>
    
    <button>Enviar</button>

    </form>

    <div id="mensagem"><?= $mensagem ?></div>

    <br><br><br><br>

      <h3>Jogadores(as) cadastrados(as): </h3>
    
    <table border=2>
      
        <tr>
          <td>Nome</td>
          <td>Perna dominante</td>
          <td>Gols</td>
          <td>Assistencias</td>
          <td>Títulos</td>
          <td>Excluir</td>
        </tr>

      <?php

      foreach ($jogadores as $j):
      
      ?>

        <tr>
          <td><?= $j["nome"]?></td>  
          <!--aqui aquela verificação pra caso o user esquecer de preencher um dos
          campos e o formulario seja enviaod, não seja resetado as infos que ja haviam sido preenchidas-->
          <td><?php
           
           if ($j["perna"] == "D") {
            echo "Direita";
           }
           if ($j["perna"] == "E") {
            echo "Esquerda";
           }
           if ($j["perna"] == "A") {
            echo "Ambidestro(a)";
           }
           
           ?></td>
          <td><?= $j["gols"]?></td>
          <td><?= $j["assists"]?></td>
          <td><?= $j["titulos"]?></td>
          <td><a href="excluir.php?id=<?= $j["id"] ?>">Excluir</a></td>
        </tr>  

        <?php endforeach ; ?>
    </table>
    
  </body>
</html>
