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

