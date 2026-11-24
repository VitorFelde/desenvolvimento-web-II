<?php 

include_once(__DIR__ . "/../../controller/LutadorController.php");
include_once(__DIR__ . "/../../dao/CategoriaDAO.php");
include_once(__DIR__ . "/../../dao/EstiloDAO.php");

$categoriaDAO = new CategoriaDAO();
$estiloDAO = new EstiloDAO();

$categorias = $categoriaDAO->listar();
$estilos = $estiloDAO->listar();

include_once(__DIR__ . "/../include/header.php");

?>

<h3><?= $lutador && $lutador->getId() > 0 ? "Alterar" : "Inserir" ?></h3>

<div class="row">
    <div class="col-6">

        <form action="" method="POST">

            <div>
                <label for="nome" class="form-label">Nome:</label>
                <input type="text" id="nome" name="nome" placeholder="Digite o nome do seu(ua) lutador(a):" value="<?= $lutador ? $lutador->getNome() : "" ?>" class="form-control">
            </div>

            <div>
                <label for="apelido" class="form-label">Apelido:</label>
                <input type="text" id="apelido" name="apelido" placeholder="Digite o apelido do seu(ua) lutador(a):" value="<?= $lutador ? $lutador->getApelido() : "" ?>" class="form-control">
            </div>

            <!--as duas tabelas relacionadas do lutador serao categoria e estilo-->

            <div>
                <label for="categoria" class="form-label">Categoria:</label>

                <select name="categoria" id="categoria" class="form-control">

                    <option value="">--Escolha a categoria do seu(ua) lutador(a)--</option>

                    <?php foreach ($categorias as $c): ?>
                        <option value="<?= $c->getIdCategoria() ?>" <?= $lutador && $lutador->getCategoria()->getIdCategoria() == $c->getIdCategoria() ? "selected" : "" ?>>
                            <?= $c->getCategoria() ?>
                        </option>
                    <?php endforeach; ?>

                </select>
            </div>

            <div>
                <label for="estilo" class="form-label">Estilo:</label>

                <select name="estilo" id="estilo" class="form-control">

                    <option value="">--Escolha o estilo em que seu(ua) lutador(a) luta--</option>

                    <?php foreach ($estilos as $e): ?>
                        <option value="<?= $e->getIdEstilo() ?>" <?= $lutador && $lutador->getEstilo()->getIdEstilo() == $e->getIdEstilo() ? "selected" : "" ?>>
                            <?= $e->getEstilo() ?>
                        </option>
                    <?php endforeach; ?>

                </select>
            </div>

            <div>
                <label for="titulo" class="form-label">Título:</label>

                <select name="titulo" id="titulo" class="form-control">

                    <option value="">Seu(ua) lutador(a) tem cinturão?</option>

                    <option value="S" <?= $lutador && $lutador->getTitulo() == "S" ? "selected" : "" ?>>
                        Sim
                    </option>

                    <option value="N" <?= $lutador && $lutador->getTitulo() == "N" ? "selected" : "" ?>>
                        Não
                    </option>

                </select>
            </div>

            <div>
                <input type="hidden" name="id" value="<?= $lutador ? $lutador->getId() : 0 ?>">
            </div>

            <div>
                <button class="btn btn-success mt-3">Enviar</button>
            </div>

        </form>

    </div>

    <div class="col-6">

        <?php if (!empty($erros)): ?>
            <div class="alert alert-danger">
                <?php foreach ($erros as $erro): ?>
                    <p><?= $erro ?></p>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>

    </div>
</div>

<a class="btn btn-outline-secondary mt-3" href="listar.php">Voltar</a>

<?php 

include_once(__DIR__ . "/../include/footer.php");

?>