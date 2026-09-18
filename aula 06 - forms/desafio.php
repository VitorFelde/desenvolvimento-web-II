

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    
    <h4>Login</h4>
    
    <?php 

$login = $_POST["login"];
$senha = $_POST["senha"];

if ($login == "ifpr" && $senha == "tads") {
    echo "Bem vindo ao TADS!";
    echo "<form style= 'display: none'>";
    }
    
    else {
        echo "<form action='' method='POST'>";
        }
        
        ?>
       
    
        <input type="text" placeholder="login" name="login"> 
        <br><br>
        <input type="password" placeholder="senha" name="senha">
        <br><br>
        <button>Enviar</button>
        </form>

</body>
</html>

