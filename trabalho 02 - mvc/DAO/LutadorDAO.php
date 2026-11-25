<?php

include_once(__DIR__ . "/../util/Connection.php");
include_once(__DIR__ . "/../model/Lutador.php");
include_once(__DIR__ . "/../model/Categoria.php");
include_once(__DIR__ . "/../model/Estilo.php");

class LutadorDAO {
    //funcao para listar os lutadores que serao inseridos

    public function listar(){
        $sql = "SELECT
                    lutador.id,
                    lutador.nome,
                    lutador.apelido,
                    lutador.titulo,
                    categoria.id AS id_categoria,
                    categoria.cat AS categoria,
                    estilo.id AS id_estilo,
                    estilo.est AS estilo
                FROM lutador
                INNER JOIN categoria ON lutador.id_categoria = categoria.id
                /*aqui entramos dentro da tabela categoria, atraves do id categoria que criamos relacionado na tabela lutador, e selecionamos pelo id*/
                INNER JOIN estilo ON lutador.id_estilo = estilo.id";
                /*mesma coisa aqui, mas estamos fazendo para o estilo*/

        $conn = Connection::getConnection();

        $stmt = $conn->prepare($sql);

        $stmt->execute();

        $saida = $stmt->fetchAll();

        return $this->map($saida);
    }

    //funcao para buscar pelo id, que sera usada para editarmos baseado no id
    public function buscarId($id){
        $sql = "SELECT
                    lutador.id,
                    lutador.nome,
                    lutador.apelido,
                    lutador.titulo,
                    categoria.id AS id_categoria,
                    categoria.cat AS categoria,
                    estilo.id AS id_estilo,
                    estilo.est AS estilo
                FROM lutador
                INNER JOIN categoria ON lutador.id_categoria = categoria.id
                INNER JOIN estilo ON lutador.id_estilo = estilo.id
                WHERE lutador.id = ?";

        $conn = Connection::getConnection();

        $stmt = $conn->prepare($sql);

        $stmt->execute([$id]);

        $saida = $stmt->fetchAll();

        $lutadores = $this->map($saida);

        if(count($lutadores) == 1)
            return $lutadores[0];
        elseif(count($lutadores) == 0)
            return null;

        die("LutadorDAO.buscarId - Erro: mais de um lutador encontrado para o ID " . $id);
    }

    //funcao para inserir lutadores na lista
    public function inserir(Lutador $lutador){
        $sql = "INSERT INTO lutador (nome, apelido, titulo, id_categoria, id_estilo) VALUES (?, ?, ?, ?, ?)";

        try {
            $conn = Connection::getConnection();

            $stmt = $conn->prepare($sql);

            $stmt->execute(array(
                $lutador->getNome(),
                $lutador->getApelido(),
                $lutador->getTitulo(),
                $lutador->getCategoria()->getIdCategoria(),
                $lutador->getEstilo()->getIdEstilo()
            ));

        } catch (PDOException $e) {
            return "Erro ao inserir lutador: " . $e->getMessage();
        }

        return "";
    }

    //funcao para editar dados de um lutador na lista
    public function editar(Lutador $lutador){
        $sql = "UPDATE lutador SET
                    nome = ?,
                    apelido = ?,
                    titulo = ?,
                    id_categoria = ?,
                    id_estilo = ?
                WHERE id = ?";

        try {
            $conn = Connection::getConnection();

            $stmt = $conn->prepare($sql);

            $stmt->execute(array(
                $lutador->getNome(),
                $lutador->getApelido(),
                $lutador->getTitulo(),
                $lutador->getCategoria()->getIdCategoria(),
                $lutador->getEstilo()->getIdEstilo(),
                $lutador->getId()
            ));

        } catch (PDOException $e) {
            return "Erro ao editar lutador: " . $e->getMessage();
        }

        return "";
    }

    //funcao para excluir um lutador da lista
    public function excluir(int $id){
        $sql = "DELETE FROM lutador WHERE id = ?";

        try {
            $conn = Connection::getConnection();

            $stmt = $conn->prepare($sql);

            $stmt->execute(array($id));

        } catch (PDOException $e) {
            return "Erro ao excluir lutador: " . $e->getMessage();
        }

        return "";
    }

    //funcao usada para pegar os dados do banco que vem em formato de array, e transformamos em valores do tipo categoria, estilo e lutador
    private function map($saida){
        $lutadores = array();

        foreach($saida as $l){

            /*LUTADOR*/

            $lutador = new Lutador();

            $lutador->setId($l["id"]);
            $lutador->setNome($l["nome"]);
            $lutador->setApelido($l["apelido"]);
            $lutador->setTitulo($l["titulo"]);

            /*CATEGORIA*/

            $categoria = new Categoria();

            $categoria->setIdCategoria($l["id_categoria"]);
            $categoria->setCategoria($l["categoria"]);
            $lutador->setCategoria($categoria);

            /*ESTILO*/

            $estilo = new Estilo();

            $estilo->setIdEstilo($l["id_estilo"]);
            $estilo->setEstilo($l["estilo"]);
            $lutador->setEstilo($estilo);

            array_push($lutadores, $lutador);
        }

        return $lutadores;
    }

}
