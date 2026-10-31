<?php 

include_once(__DIR__ .  "/../include/header.php");

?>

<form method="POST">

<div>
        <label>Nome:</label>
        <input type="text" placeholder="Digite o nome do seu(ua) lutador(a): " style="width: 225px;">
</div>

<div>
    <label>Apelido:</label>
    <input type="text" placeholder="Digite o apelido do seu(ua) lutador(a):" style="width: 230px;">
</div>

<!--as duas tabelas relacionadas do lutador serao categoria e genero-->
<div>
    <label>Categoria:</label>
    <select>
        <option>--Escolha a categoria do seu(ua) lutador(a)--</option>
        <option>Peso-Mosca</option>
        <option>Peso-Leve</option>
        <option>Peso-Meio Pesado</option>
        <option>Peso-Pesado</option>
    </select>
</div>

<div>
    <label>Gênero:</label>
    <select>
        <option value="">--Escolha o gênero em que seu(ua) lutador(a) luta--</option>
        <option>Masculino</option>
        <option>Feminino</option>
    </select>
</div>

<div>
    <label>Título:</label>
    <select>
        <option>Seu(ua) lutador(a) tem cinturão?</option>
        <option>Sim</option>
        <option>Não</option>
    </select>
</div>

<button>Enviar</button>

</form>

<?php 
    include_once(__DIR__ . "/../include/footer.php");
?>