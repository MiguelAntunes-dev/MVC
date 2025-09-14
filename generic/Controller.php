<?php
namespace generic;

class Controller {
    private $arrChamadas = [];
    public function __construct() {
        $this->arrChamadas = [
            'Cliente/listar' => new Acao( 'Cliente','listar'),
            'Cliente/salvar' => new Acao( 'Cliente','salvar'),
            'Cliente/formulario' => new Acao( 'Cliente','formulario'),
            'Cliente/formularioalterar' => new Acao( 'Cliente','formularioalterar'),
            'Cliente/inserir' => new Acao( 'Cliente','inserir')

        ];
    }
    public function verificarChamadas($rota){
        if (isset($this->arrChamadas[$rota])){
            $acao = $this->arrChamadas[$rota];
            $acao->executar();
            return;
        }
        echo "Rota não encontrada";
    }
}