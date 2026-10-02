    <?php 

    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);

    include_once("Connection.php");
    //1 - receber o ID do time

    $id = 0;
    if (isset ($_GET["id"])) {
        $id = $_GET['id'];
    }

    //1.1 - validar se o ID existe

    if ($id == 0 || !is_numeric($id)) {
        echo "Id inválido";
        echo "<a href='listar.php'>Voltar</a>";
        exit;
    }

    //2 - excluir o time do banco de dados

    $sql = "DELETE FROM times WHERE id = ?"; //prevenção de sql injection - tiramos a concatenação e usamos o = parametro
    $conn = Connection::getConnection();

    $stmt = $conn->prepare($sql); 

    $stmt->execute(array($id));

    //3 - redirecionar para a listagem 

    header("location: listar.php");
