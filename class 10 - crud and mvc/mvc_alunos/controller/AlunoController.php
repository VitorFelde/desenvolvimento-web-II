<?php

include_once(__DIR__ . "/../dao/AlunoDAO.php");
include_once(__DIR__ . "/../model/Aluno.php");
include_once(__DIR__ . "/../service/AlunoService.php");



class AlunoController {

    private AlunoDAO $alunoDAO;

    public function __construct(){
        $this->alunoDAO = new AlunoDAO();
        $this->AlunoService = new AlunoService();
    }

    public function listar(){
        return $this->alunoDAO->listar();
    }
}

    function inserir() {}