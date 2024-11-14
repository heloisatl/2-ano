<?php 

class Pedido{
    //Atributos
    private string $nomeCliente;
    private string $nomeGarcom;
    private string $nomeCaixeiro;


    //Métodos
    public function menu(){
        $menuArray = array();
        echo "Bem-vindo à nossa Cafeteria!

        Aqui está o nosso menu:";
        $menuArray = 
        // Bebidas Quentes
        new Bebida(1, "Espresso", 8.00);
        new Bebida(2, "Cappuccino", 6.00);
        new Bebida(3, "Latte", 4.00);
        new Bebida(4, "Mocha", 6.00);
        new Bebida(5, "Americano", 6.00);

        // Bebidas Frias
        new Bebida(6, "Café Gelado", 8.00);
        new Bebida(7, "Suco de Laranja", 6.00);
        new Bebida(8, "Smoothie de Morango", 4.00);
        new Bebida(9, "Chá Gelado", 6.00);
        new Bebida(10, "Refrigerante", 6.00);

        // Comidas - Doces
        new Comida(1, "Bolo de Chocolate", 12.00);
        new Comida(2, "Croissant de Chocolate", 7.00);
        new Comida(3, "Muffin de Banana", 6.00);
        new Comida(4, "Torta de Limão", 15.00);
        new Comida(5, "Bolo de Cenoura", 10.00);
        new Comida(6, "Brownie de Chocolate", 8.00);
        new Comida(7, "Cookies de Chocolate", 5.00);

        // Comidas - Salgadas
        new Comida(8, "Sanduíche de Presunto e Queijo", 14.00);
        new Comida(9, "Sanduíche de Frango", 15.00);
        new Comida(10, "Quiche de Frango com Espinafre", 18.00);
        new Comida(11, "Torrada com Abacate", 10.00);
        new Comida(12, "Croissant de Queijo", 8.00);
        new Comida(13, "Panini de Peito de Peru", 14.00);
        new Comida(14, "Sopa do Dia", 16.00);
        new Comida(15, "Wrap de Legumes", 14.00);


        return $menuArray;
    }
    


    public function __toString()
    {
        $dados = "O Cliente: ". $this->getNomeCliente();
        $dados .= "Foi atendido pelo garçom  ".  $this->getNomeGarcom();
        $dados .= "E pelo caixeiro ".$this->getNomeCaixeiro();
        $dados .= "\n";

        return $dados;
    }


    //Gets e Sets
    /**
     * Get the value of nomeCliente
     */
    public function getNomeCliente(): string
    {
        return $this->nomeCliente;
    }

    /**
     * Set the value of nomeCliente
     */
    public function setNomeCliente(string $nomeCliente): self
    {
        $this->nomeCliente = $nomeCliente;

        return $this;
    }

    /**
     * Get the value of nomeGarcom
     */
    public function getNomeGarcom(): string
    {
        return $this->nomeGarcom;
    }

    /**
     * Set the value of nomeGarcom
     */
    public function setNomeGarcom(string $nomeGarcom): self
    {
        $this->nomeGarcom = $nomeGarcom;

        return $this;
    }

    /**
     * Get the value of nomeCaixeiro
     */
    public function getNomeCaixeiro(): string
    {
        return $this->nomeCaixeiro;
    }

    /**
     * Set the value of nomeCaixeiro
     */
    public function setNomeCaixeiro(string $nomeCaixeiro): self
    {
        $this->nomeCaixeiro = $nomeCaixeiro;

        return $this;
    }
}


