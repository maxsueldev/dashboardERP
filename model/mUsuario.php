<?php

@session_start();
require_once '../db/dao.php';

class mUsuario extends dao {

    private $usu_id;
    private $usu_nome;
    private $usu_sobrenome;
    private $usu_login;
    private $usu_senha;
    private $usu_email;
    private $usu_setor;
    
    function getUsu_id() {
        return $this->usu_id;
    }

    function getUsu_nome() {
        return $this->usu_nome;
    }

    function getUsu_sobrenome() {
        return $this->usu_sobrenome;
    }

    function getUsu_login() {
        return $this->usu_login;
    }

    function getUsu_senha() {
        return $this->usu_senha;
    }

    function getUsu_email() {
        return $this->usu_email;
    }

    function getUsu_setor() {
        return $this->usu_setor;
    }

    function setUsu_id($usu_id) {
        $this->usu_id = $usu_id;
    }

    function setUsu_nome($usu_nome) {
        $this->usu_nome = $usu_nome;
    }

    function setUsu_sobrenome($usu_sobrenome) {
        $this->usu_sobrenome = $usu_sobrenome;
    }

    function setUsu_login($usu_login) {
        $this->usu_login = $usu_login;
    }

    function setUsu_senha($usu_senha) {
        $this->usu_senha = $usu_senha;
    }

    function setUsu_email($usu_email) {
        $this->usu_email = $usu_email;
    }

    function setUsu_setor($usu_setor) {
        $this->usu_setor = $usu_setor;
    }
    
}

