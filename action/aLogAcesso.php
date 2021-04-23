<?php
@session_start();
require_once "../model/mLogAcesso.php";

class aLogAcesso extends mLogAcesso{
    private $sqlSelectUltimosAcessos="select *
            from (select a.lac_id,
                         a.lac_data,
                         a.lac_ip,
                         b.usu_nome
                    from log_acesso a, usuario b
                   where a.lac_usu_id = b.usu_id
                     and a.lac_usu_id = %s
                   order by lac_data desc)
            where rownum <= 5";

    private $sqlInsert = "insert into log_acesso (lac_data, lac_usu_id, lac_ip) values
            (current_timestamp, %s, %s);";
    
    public function SelectUltimosAcessos($where = "", $order = "", $rquery = false) {
        $dao = new dao();
        $sql = sprintf($this->sqlSelectUltimosAcessos, $this->quotedstr($this->getLac_usu_id()));
        return $dao->Query($sql, $rquery);
    }
    
    public function Insert() {
        $dao = new dao();
        $sql = sprintf($this->sqlInsert, $this->quotedstr($this->getLac_usu_id()), $this->quotedstr($this->getLac_ip()));
        return $dao->Query($sql);
    }
}

