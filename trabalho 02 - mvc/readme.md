Explicações:

<h1>Operadores ternários</h1>

condição ? se verdadeira : se falsa

No form.php por exemplo, temos 

###`<?= $lutador && $lutador->getId() > 0 ? "Alterar" : "Inserir" ?>`

Nesse caso, estamos verificando, se existe lutador, e seu id for maior que zero, ou seja, se for válido, então ele imprime o
alterar, já que estamos mexendo em algo que ja existe. Se não existe o lutador, logo entramos no inserir, pq dai o programa
reconhece os campos que são NULL, e precisam ser preenchidos.

<h1>Campos NULL no banco?</h1>

Na classe model, temos a declaração de variáveis, que em quase todos os atributos, principalmente do Lutador.php, tem a seguinte
estrutura: private ?string $nome; - Fazemos isso pq dessa forma, a variável aceita tanto uma String, quanto um valor null,
que vai ser importante, para mostrar as mensagens de campos faltantes no processo de envio do formulário.

<h1>Método construtor</h1>

Na classe LutadorController.php, temos o seguinte: 
<br>
<h4>public function __construct(){
        $this->lutadorDAO = new LutadorDAO();
}</h4>
<br>

Isso existe por duas razões
1 - Sem o método construtor, toda vez que mexêssemos no banco, seja para listar, editar, excluir ou inserir, teriamos que
criar um novo objeto DAO, com o construtor isso fica mto mais fácil, como por exemplo: 
<h4>public function listar(){
        return $this->lutadorDAO->listar();
}</h4><br>
  onde temos um retorno do método listar que está dentro do DAO, com o construtor, acessamos o DAO sem precisar fazer por 
  exemplo:<br> <h4>$dao = new LutadorDAO();</h4>
  2 - Se fizéssemos dessa maneira, não poderiamos esquecer de instanciar o objeto, e caso esquecessemos, teriamos um fatal
  error que nos atrapalharia, então com o construtor, que instancia automaticamente, nao temos esse problema.
