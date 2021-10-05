<?php

class Pedido{
    private $codigo;
    private $codCliente;
    private $taxaEntrega;
    private $tipoEntrega;
    private $dataPedido;
    private $status;
    private $itens; // array de objetos do tipo ItemCarrinho

	public function getCodigo()
	{
		return $this->codigo;
	}

	public function setCodigo($codigo)
	{
		$this->codigo = $codigo;

		return $this;
	}

	public function getCodCliente()
	{
		return $this->codCliente;
	}

	public function setCodCliente($codCliente)
	{
		$this->codCliente = $codCliente;

		return $this;
	}

	public function getTaxaEntrega()
	{
		return $this->taxaEntrega;
	}

	public function setTaxaEntrega($taxaEntrega)
	{
		$this->taxaEntrega = $taxaEntrega;

		return $this;
	}

	public function getTipoEntrega()
	{
		return $this->tipoEntrega;
	}

	public function setTipoEntrega($tipoEntrega)
	{
		$this->tipoEntrega = $tipoEntrega;

		return $this;
	}

	public function getDataPedido()
	{
		return $this->dataPedido;
	}

	public function setDataPedido($dataPedido)
	{
		$this->dataPedido = $dataPedido;

		return $this;
	}

	public function getStatus()
	{
		return $this->status;
	}

	public function setStatus($status)
	{
		$this->status = $status;

		return $this;
	}

	public function getItens()
	{
		return $this->itens;
	}

	public function setItens($itens)
	{
		$this->itens = $itens;

		return $this;
	}
}

?>