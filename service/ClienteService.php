<?php
namespace service;

use dao\mysql\ClienteDAO;

class ClienteService extends ClienteDAO {
    public function listarCliente() {
        return parent::listar();
    }
    public function inserir($nome, $desafio) {
        return parent::inserir($nome, $desafio);
    }
    public function alterar($id, $nome, $desafio) {
        return parent::alterar($id, $nome, $desafio);
    }
    public function listarId($id) {
        return parent::listarId($id);
    }
}