<?php

include_once(__DIR__ . "/../util/AlunoDAO.PHP");

class AlunoController {

    PRIVATE AlunoDAO $alunoDAO;

    public function __construct(){
        $this->alunoDAO = new AlunoDAO();
    }

    public function listar(){
        $this->alunoDAO->listar();
    }
}