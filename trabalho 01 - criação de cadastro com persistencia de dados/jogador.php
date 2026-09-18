<?php ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pen</title>
  </head>
  <body>
    <h1>Cadastro de jogadores/jogadoras de futebol</h1>

    <h3>Cadastar um novo jogador(a)</h3>

    <form method="POST" action=""'>
    
    <input type="text" placeholder="Digite o nome do jogador(a)">
    
    <br><br>
    
    <select id="perna" name="perna"'>
        <option>----Perna dominante-----</option>
        <option value ="D">Direita</option>
        <option value ="E">Esquerda</option>
        <option value = "A">Ambidestro(a)</option>
    </select>
    
    <br><br>

    <input type="number" placeholder="Quantidade de gols" min=0>

    <br><br>
    
    <input type="number" placeholder="Quantidade de assistências" min=0>

    <br><br>

  
    <input type="number" placeholder="Quantidade de títulos">

    <br><br>
    
    <button>Enviar</button>

    </form>

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
      
        <tr>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td><a>Excluir</a></td>
        </tr>  
    </table>
    
  </body>
</html>
