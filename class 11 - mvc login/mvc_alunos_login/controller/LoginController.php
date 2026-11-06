<?php

include_once(__DIR__ . "/../dao/UsuarioDAO.php");
include_once(__DIR__ . "/../service/LoginService.php");

class LoginController {

    private UsuarioDAO $usuarioDao;
    private LoginService $loginService;

    public function __construct() {
        $this->usuarioDao = new UsuarioDAO();
        $this->loginService = new LoginService();
    }

    public function logar(?string $login, ?string $senha) {
        //Validar os dados do formulário
        $erros = $this->loginService->validar($login, $senha); 

        //Validar as credencias (login e senha) na tabela "usuarios"
        if(empty($erros)) {
        //validar as credenciais (login e senha)    
        $usuario = $this->usuarioDao->findByLoginSenha($login, $senha);
        if ($usuario) {
            $this->loginService->salvarUsuarioSessao($usuario);
        } else {
            array_push($erros, "Login ou senha invalidos");
        }
        //Realizar o login na aplicação utilizando o recurso de sessões
        }
        
        
        return $erros;
    }

    public function usuarioEstaLogado(){     
        return $this->loginService->usuarioEstaLogado();
    }

}   