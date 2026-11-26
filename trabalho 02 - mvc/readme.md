Explicações:

# Operadores ternários

`condição ? se verdadeira : se falsa`

No `form.php` por exemplo, temos:

### `<?= $lutador && $lutador->getId() > 0 ? "Alterar" : "Inserir" ?>`

Nesse caso, estamos verificando, se existe lutador, e seu id for maior que zero, ou seja, se for válido, então ele imprime o alterar, já que estamos mexendo em algo que ja existe. Se não existe o lutador, logo entramos no inserir, pq dai o programa reconhece os campos que são NULL, e precisam ser preenchidos.

# Campos NULL no banco?

Na classe model, temos a declaração de variáveis, que em quase todos os atributos, principalmente do `Lutador.php`, tem a seguinte estrutura: <br> `private ?string $nome;` <br> Fazemos isso pq dessa forma, a variável aceita tanto uma String, quanto um valor null, que vai ser importante, para mostrar as mensagens de campos faltantes no processo de envio do formulário.

# Método construtor

Na classe `LutadorController.php`, temos o seguinte:

```php
public function __construct(){
    $this->lutadorDAO = new LutadorDAO();
}
```

# MAP no DAO

No MAP por exemplo do `CategoriaDAO.php`:

```php
private function map($saida){$categorias = array();

    foreach($saida as $d){$categoria = new Categoria();

        $categoria->setIdCategoria($d["id"]);
        $categoria->setCategoria($d["cat"]);

        array_push($categorias,$categoria); //putting in our array the elements we just got
    }

    return $categorias;
}
```

estamos pegando o que vem do Banco de Dados, em forma de Array Associativo, e transformando em um objeto da class model, que vai modelar, e deixar pronto para fazermos o CRUD no view

<h1>Estrutura geral do projeto</h1>

Como foi solicitado pelo professor fizemos a estrutura MVC
M - MODEL - Onde modelamos os dados vindo do banco para mostrar certo ao usuario
V - VIEW - Tudo o que o usuário vai enxergar, páginas e estrutura visual do projeto
C - CONTROLLER - Controla quem chamar dependendo da requisição solicitada pelo usuário
Temos as 3 camadas explicítas no projeto (model, view e controller).

+ CRUD
C - CREATE - Criar/Inserir, nesse nosso caso, um lutador
R - READ - Ler os dados, e então fica critério do usuário ver o que quer fazer com os dados lidos, no nosso caso, é a listagem
U - UPDATE - Atualizar dados previamente inseridos
D - DELETE - Deletar um dado inserido anteriormente
Temos as 4 camadas divididas (DAO e controller).

A camada util, que serve para conectar com o banco de dados, através da Connection.php e a config.php que é para liberar o acesso ao banco.

O script SQL nomeado: baseLutadores.sql serve para mostrar o processo feito para as criações de tabelas no banco (PHPMyAdmin).

Index.php possui apenas um header, pois toda vez que o projeto é aberto através do localhost, o navegador procura o index para ser a primeira coisa a mostrar ao usuario
e no nosso caso, queremos que ele veja a lista de lutadores, com as opções de inserção, listagem, exclusão e edição.

Por fim a camada include, serve apenas para salvar o cabeçalho (header.php) e o rodapé (footer.php), dessa forma, quando precisarmos inserir html no projeto, seja em qualquer camada, basta encontrar o diretório, e incluir a camada include, que ambos (header e footer) estarão lá, e ajudarão a deixar o código muito mais limpo e organizado.
