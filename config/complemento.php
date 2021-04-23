<?php

require_once '../db/db.class.php';

class complemento extends conexao {

    private $acao, $form, $where, $url, $order;

    public function formVazio() {
        $form = $this->getForm();
        if (empty($form)) {
            $this->setAcao('inserir');
            $form["acao"] = $this->getAcao();
            $this->setForm($form);
            return true;
        }
        return false;
    }

    public function getAcao() {
        return $this->acao;
    }

    public function getForm() {
        return $this->form;
    }

    public function setAcao($acao) {
        $this->acao = $acao;
    }

    public function setForm($form) {
        $this->form = $form;
    }

    public function setaRsNoForm($sql) {
        $this->setForm($this->Select($sql));
        foreach ($this->getForm() as $form) {
            $this->setForm($form);
        }
    }

    function getWhere() {
        return $this->where;
    }

    function setWhere($where) {
        $this->where = $where;
    }

    public function getOrder() {
        return $this->order;
    }

    public function setOrder($order) {
        $this->order = $order;
    }

    public function getUrl() {
        return $this->url;
    }
    
    public function setUrl($url) {
        $this->url = $url;
    }

}
