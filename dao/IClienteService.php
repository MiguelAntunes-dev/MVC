<?php
namespace dao;

interface IClienteService {
    public function listar();
    public function salvar($dados);
}