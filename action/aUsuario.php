<?php

@session_start();
require_once '../model/mUsuario.php';

class aUsuario extends mUsuario {
    
    private $sqlSelect = "select * from usuario";
    private $sqlInsert = "insert into usuario (usu_nome, usu_sobrenome, usu_login, usu_senha, usu_email, usu_setor, usu_dataCadastrado) values (%s, %s, %s, %s, %s, %s, current_timestamp)";
    private $sqlSelectLogin = "select (case when usu_senha = md5(%s) then 'LOGIN_SUCESSO' when usu_senha != md5(%s) then 
            'LOGIN_ERRO'  end), usu_id, usu_nome, usu_sobrenome, usu_login, usu_email from usuario where 
            upper(usu_login) = upper(%s)";
    
    public function Select($where = '') {
        $dao = new dao();
        $sql = sprintf($this->sqlSelect, $where);
        $rs = $dao->Query($sql);
        return $rs;
    }
    
    public function Insert() {
        $dao = new dao();
        $sql = sprintf($this->sqlInsert, $this->quotedstr($this->getUsu_nome()), $this->quotedstr($this->getUsu_sobrenome()),
               $this->quotedstr($this->getUsu_login()), $this->quotedstr(md5($this->getUsu_senha())), 
               $this->quotedstr($this->getUsu_email()), $this->quotedstr($this->getUsu_setor()));
        return $dao->Dml($sql);
    }

    public function SelectLogin($retornaSql = false) {
        $dao = new dao();
        $sql = sprintf($this->sqlSelectLogin, $this->quotedstr($this->getUsu_senha()), $this->quotedstr($this->getUsu_senha()), 
               $this->quotedstr($this->getUsu_login()));
        $rs = $dao->Query($sql, $retornaSql);
        return $rs;
    }
    
}
