<?php
namespace Controller;

use service\ClienteService;
use template\ClienteTemp;
use template\ITemplate;

class Cliente {
    private ITemplate $template;

    public function __construct() {
        $this->template = new ClienteTemp();
    }

    public function listar() {
        $service = new ClienteService();
        $resultado = $service->listarCliente();
        $this->template->layout("\\public\\cliente\\listar.php",$resultado);
    }
    public function inserir() {
        $nome = $_POST['nome'];
        $desafio = $_POST['desafio'];
        $service = new ClienteService();
        $resultado = $service->inserir($nome, $desafio);
        header("Location: index.php?param=Cliente/listar");
    }
    public function formulario() {
        $this->template->layout("\\public\\cliente\\formulario.php");
    }
    public function alterarFormulario() {
        $id = $_GET['id'];
        $service = new ClienteService();
        $resultado = $service->listarId($id);
        $this->template->layout("\\public\\cliente\\formularioalterar.php",$resultado);
    }
}