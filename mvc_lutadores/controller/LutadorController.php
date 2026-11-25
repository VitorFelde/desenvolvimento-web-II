<?php

include_once(__DIR__ . "/../DAO/LutadorDAO.php");
include_once(__DIR__ . "/../model/Lutador.php");
include_once(__DIR__ . "/../model/Categoria.php");
include_once(__DIR__ . "/../model/Estilo.php");

class LutadorController {

    private LutadorDAO $lutadorDAO;

    public function __construct(){
        $this->lutadorDAO = new LutadorDAO();
    }

    public function listar(){
        return $this->lutadorDAO->listar();
    }

    public function inserir(Lutador $lutador){
        $erros = $this->validar($lutador);

        if (empty($erros)) {
            $msgErro = $this->lutadorDAO->inserir($lutador);
            if ($msgErro)
                array_push($erros, $msgErro);
        }

        return $erros;
    }

    public function excluir(int $id){
        return $this->lutadorDAO->excluir($id);
    }

    public function buscarId(int $id): ?Lutador {
        return $this->lutadorDAO->buscarId($id);
    }

    public function editar(Lutador $lutador){
        $erros = $this->validar($lutador);

        if (empty($erros)) {
            $msgErro = $this->lutadorDAO->editar($lutador);
            if ($msgErro)
                array_push($erros, $msgErro);
        }

        return $erros;
    }

    private function validar(Lutador $lutador){
        $erros = array();

        if (empty($lutador->getNome()))
            array_push($erros, "O nome é obrigatório.");

        if (empty($lutador->getApelido()))
            array_push($erros, "O apelido é obrigatório.");

        if (empty($lutador->getTitulo()))
            array_push($erros, "O título é obrigatório.");

        if (empty($lutador->getCategoria()->getIdCategoria()))
            array_push($erros, "A categoria é obrigatória.");

        if (empty($lutador->getEstilo()->getIdEstilo()))
            array_push($erros, "O estilo é obrigatório.");

        return $erros;
    }
}
