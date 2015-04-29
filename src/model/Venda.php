<?php

/**
 * Description of Venda
 *
 * @author Rafael Carlos
 */
class Venda {

    private $id_venda;
    private $data_venda;
    private $valor_venda;
    private $cliente_id_cliente;

    function __construct() {
        
    }

    function getId_venda() {
        return $this->id_venda;
    }

    function getData_venda() {
        return $this->data_venda;
    }

    function getValor_venda() {
        return $this->valor_venda;
    }

    function getCliente_id_cliente() {
        return $this->cliente_id_cliente;
    }

    function setId_venda($id_venda) {
        $this->id_venda = $id_venda;
    }

    function setData_venda($data_venda) {
        $this->data_venda = $data_venda;
    }

    function setValor_venda($valor_venda) {
        $this->valor_venda = $valor_venda;
    }

    function setCliente_id_cliente($cliente_id_cliente) {
        $this->cliente_id_cliente = $cliente_id_cliente;
    }

}
