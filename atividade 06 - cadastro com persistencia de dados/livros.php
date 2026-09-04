<?php 

ini_set('display_errors', 1); //mostrar os erros
ini_set('display_startup_errors', 1); //mostrar os erros
error_reporting(E_ALL); //mostrar os erros

include_once("persistencia.php");
//buscar os livros ja cadastrados do arquivo JSON
$livros = buscarDados("livros.json");

$msg = "";

if (isset($_POST["titulo"])) {

$titulo = $_POST["titulo"];
$genero = $_POST["genero"];
$paginas = $_POST["qtd_paginas"];
$autor = $_POST["autor"];

$erros = array();

if (trim ($titulo) == '') {
    array_push($erros, "Informe o titulo");
    }
    if (trim ($genero) == '') {
        array_push($erros, "Informe o genero");
    }
    if (trim ($paginas) == '') {
        array_push($erros, "Informe a quantidade de paginas");
    }
    if (trim ($autor) == '') {
        array_push($erros, "Informe o autor");
        }
        
    if (count($erros) == 0) {
        $livro = array("id" => uniqid(), "titulo" => $titulo, "genero" => $genero, "paginas" => $paginas, "autor" => $autor);
            
        array_push($livros, $livro);
            
            
        salvarDados ($livros, "livros.json");
            
        header("location: livros.php");      
        }
            
        else {
            //print_r ($erros);
            $msg = implode("<br>", $erros); //pega o array e transforma em uma 
            }
                
    }

?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de livros</title>
</head>
<body>

<h1>Cadastro de livros</h1>

<h3>Cadastre seu livro aqui</h3>
<!--<form method="POST" action="" onsubmit="return validar();">-->
    <form method="POST" action="">

    <div id="erro" style="color: red">
        <?= $msg ?>
    </div>


    <input type="text" name="titulo" id="titulo" 
        placeholder="Informe o título"  />
    
    <br><br> 

    <select name="genero" id="genero">
        <option value="">--Selecione o gênero--</option>
        <option value="D">Drama</option>
        <option value="F">Ficção</option>
        <option value="R">Romance</option>
        <option value="O">Outro</option>
    </select>
    <br><br>

    <input type="number" name="qtd_paginas" id="qtd_paginas" 
        placeholder="Informe o número de páginas">
    <br><br>
    
    <input type="text" placeholder="Digite o nome do autor" name="autor" id="autor">

    <br><br>
    <input type="submit" value="Enviar" />
</form>

<h3>Livros cadastrados</h3>

<table border="1">
    <tr>
        <th>ID</th>
        <th>Título</th>
        <th>Gênero</th>
        <th>Quant. Páginas</th>
        <th>Autor</th>
        <th>Excluir</th>
    </tr>

    <?php 
    
    foreach ($livros as $l): ?>

    <tr>
        <td><?php echo $l["id"]; ?></td>
        <td><?php echo $l["titulo"]; ?></td>
        <td><?php 
        
        if ($l["genero"] == 'D') {
            echo "Drama";
        }
        
        else if ($l["genero"] == 'F') {
            echo "Ficção";
        } 
        
        else if ($l["genero"] == 'R') {
            echo "Romance";
        }
        else if ($l["genero"] == 'O') {
            echo "Outro";
        }

        ?></td>
        <td><?php echo $l["paginas"]; ?></td>
        <td> <?php echo $l["autor"];?></td>
        <td><a href="livro_excluir.php?id=<?php echo $l["id"];?>"
        onclick="return confirm('Confirmar exclusão de <?php echo $l['titulo'] ?>?')">Excluir</a></td>
    
    </tr>

    <?php endforeach; ?>


</table>

<script src="validacao.js"></script>

</body>
</html>
