<?php

@session_start();

//require_once "../acessorios/mensagens.php";
//require_once "../config/validadorDeFormulario.php";
//require_once "../phpmailer/class.phpmailer.php";

class configuracoes {

    private $dao;
    public $mensagemPerdaSessao = "Sua sessao expirou, por favor efetue login novamente!";

    public function getDao() {
        return $this->dao;
    }

    public function setDao($dao) {
        $this->dao = $dao;
    }
    
    public function getErroSql() {
        return $this->erroSql;
    }

    public function setErroSql($erroSql) {
        $this->erroSql = $erroSql;
    }

    function verificarRepeticaoPorMD5() {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $hash = md5(implode($_POST));
            if (isset($_SESSION['hash']) && $_SESSION['hash'] == $hash) {
                return $this->setaMensagem('Aviso', 'Este registro já foi cadastrado');
            } else {
                $_SESSION['hash'] = $hash;
                return '';
            }
        }
    }
    
    public function getDataDoSistema() {
        return date("d/m/Y");
    }
        
///////////////////////////////////// Combo ///////////////////////////////////////////////////
            

//    public static function montaCombo($vetor, $valor, $texto, $seleciona = "") {
//        $options = '';
//        foreach ($vetor as $v1) {
//            foreach ($v1 as $v2 => $key) {                
//                if ($v2 == $valor) {
//                    if ($seleciona == $key) {
//                        $options.="<option value='" . $key . "' selected>";
//                    } else {
//                        $options.="<option value='" . $key . "'>";
//                    }
//                }
//                if ($v2 == $texto) {
//                    $options.=$key . "</option>";
//                }
//            }
//        }
//        return $options;
//    }

//    public function montaCombo2($tabela, $valor, $texto, $seleciona = '', $condicao = '', $ordenarPor='') {
//        if ($ordenarPor=='') $ordenarPor = $texto;       
//        $sql = "select " . $valor . ', ' . $texto . ' from ' . $tabela . ' ' . $condicao . ' order by ' . $ordenarPor;
//       $vetor = $this->RunSelect($sql);     
//        return self::montaCombo($vetor, $valor, $texto, $seleciona);
//    }
        
///////////////////////////////////// Aspas ///////////////////////////////////////////////////
    
    public function quotedstr($texto) {
        if (trim($texto) == '') {
            $texto = 'null';
        } else {
            $texto = "'" . $texto . "'";
        }
        return $texto;
    }
//
//    public function quotedstrSemNull($texto) {
//        $texto = "'" . $texto . "'";
//        return $texto;
//    }

///////////////////////////////////// Data ///////////////////////////////////////////////////

//    public function formataData($data) {
//        return implode("/", array_reverse(explode("-", $data)));
//    }
//
//    public function formataDataCrud($data) {
//        if (($data == '') || (stripos($data, '/') > 0)) {
//            return $data;
//        }
//
//        $myDateTime = DateTime::createFromFormat('Y-m-d', $data);
//        return $myDateTime->format('d/m/Y');
//    }
//
//    public function formataDataCrudYMD($data) {
//        if (($data == '') || (stripos($data, '-') > 0)) {
//            return $data;
//        }
//
//        $date = DateTime::createFromFormat('d/m/Y', $data);
//        return $date->format('Y-m-d');
//    }
//
//    public function formataDataCrudDMY($data) {
//        if (($data == '') || (stripos($data, '-') > 0)) {
//            return $data;
//        }
//
//        $date = DateTime::createFromFormat('d/m/Y', $data);
//        return $date->format('d-m-Y');
//    }

///////////////////////////////////// Mensagem ///////////////////////////////////////////////////
    
//    public function setaMensagem($titulo, $msg, $msgTecnica = "") {
//        $mensagem = new mensagens($titulo, $msg, $msgTecnica);
//        return $mensagem->getMensagem();
//    }
    
///////////////////////////////////// Monta Where ///////////////////////////////////////////////////

//    public function montaWhere($where) {
//        $campo_busca = "";
//        $tipo_busca = "";
//        $busca1 = "";
//        $busca2 = "";
//
//        if (isset($where["campos_busca"])) {
//            $campo_busca = $where["campos_busca"];
//        }
//
//        if (isset($where["tipo_busca"])) {
//            $tipo_busca = $where["tipo_busca"];
//        }
//
//        if (isset($where["busca1"])) {
//            $busca1 = $where["busca1"];
//        }
//
//        if (isset($where["busca2"])) {
//            $busca2 = $where["busca2"];
//        }
//
//        switch ($tipo_busca) {
//            case 'igual':
//                $str_where = 'and upper(' . $campo_busca . ')=upper(' . $this->quotedstr($busca1) . ')';
//                break;
//            case 'contem':
//                $str_where = 'and UPPER(' . $campo_busca . ") like UPPER('%" . $busca1 . "%')";
//                break;
//            case 'maiorque':
//                $str_where = 'and ' . $campo_busca . '>' . $busca1;
//                break;
//            case 'maiorouigual':
//                $str_where = 'and ' . $campo_busca . '>=' . $busca1;
//                break;
//            case 'menorque':
//                $str_where = 'and ' . $campo_busca . '<' . $busca1;
//                break;
//            case 'menorouigual':
//                $str_where = 'and ' . $campo_busca . '<=' . $busca1;
//                break;
//            case 'entrevalores':
//                $str_where = 'and ' . $campo_busca . ' between ' . $busca1 . ' and ' . $busca2;
//                break;
//            case 'entredatas':
//                $str_where = "and trunc(" . $campo_busca . ") between to_date('" . $busca1 . "','dd/mm/yyyy') 
//                    and to_date('" . $busca2 . "','dd/mm/yyyy')";
//                break;
//        }
//        if (!empty($str_where)) {
//            return $str_where;
//        } elseif (!is_array($where)) {
//            return $where;
//        }
//    }
    
///////////////////////////////////// Email PHPMAILER ///////////////////////////////////////////////////    

    public function phpMailer($from, $fromName, $destinatario, $subject, $body) {
            $mail = new PHPMailer();

            $mail->IsSMTP(); // Define que a mensagem será SMTP
//            $mail->Host = "ssl://smtp.gmail.com:465";  // Specify main and backup server
            $mail->Host = 'smtp.gmail.com';
            $mail->Port = 587;
            $mail->SMTPAuth = true;            // Enable SMTP authentication
            $mail->Username = 'helpdesk.semtabes@gmail.com';        // SMTP username
            $mail->Password = 'cgtihelpdesk';      // SMTP password
            $mail->SMTPSecure = 'tls';      // tls or ssl connection as req

            $mail->From = $from; // Seu e-mail
            $mail->FromName = $fromName; // Seu nome
//            $mail->SMTPDebug = 3;
            // Define o(s) destinatário(s)  
            $mail->AddAddress("$destinatario");

            // Define os dados técnicos da Mensagem
            $mail->IsHTML(true); // Define que o e-mail será enviado como HTML

            // Define a mensagem (Texto e Assunto)
            $mail->Subject  = $subject;
            $mail->Body = $body;

            // Define os anexos (opcional)
            //$mail->AddAttachment("c:/temp/documento.pdf", "novo_nome.pdf");  // Insere um anexo
            
            // Envia o e-mail
            $enviado = $mail->Send();

            // Limpa os destinatários e os anexos
            $mail->ClearAllRecipients();
            $mail->ClearAttachments();
            
            if (!$enviado) {
                print "Não foi possível enviar o e-mail! Entre em contato com o suporte!<br/><br/>";
                print "<b>Informações do erro:</b> <br />" . $mail->ErrorInfo;
            } else {
                return true;
            }

    }
    
    public function getHashMD5($string) {
        return md5($string);
    }

}
