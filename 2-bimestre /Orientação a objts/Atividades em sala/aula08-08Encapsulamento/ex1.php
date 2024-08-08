<?php

    class Pessoa{

        //Atributos
        private $nome;
        private $endereco;
        private $cidade;        
        private $UF;
        private $altura;

        //Metodos


        /**
         * Get the value of nome
         */
        public function getNome()
        {
                return $this->nome;
        }

        /**
         * Set the value of nome
         */
        public function setNome($nome): self
        {
                $this->nome = $nome;

                return $this;
        }

        /**
         * Get the value of endereco
         */
        public function getEndereco()
        {
                return $this->endereco;
        }

        /**
         * Set the value of endereco
         */
        public function setEndereco($endereco): self
        {
                $this->endereco = $endereco;

                return $this;
        }

        /**
         * Get the value of cidade
         */
        public function getCidade()
        {
                return $this->cidade;
        }

        /**
         * Set the value of cidade
         */
        public function setCidade($cidade): self
        {
                $this->cidade = $cidade;

                return $this;
        }

        /**
         * Get the value of UF
         */
        public function getUF()
        {
                return $this->UF;
        }

        /**
         * Set the value of UF
         */
        public function setUF($UF): self
        {
                $this->UF = $UF;

                return $this;
        }

        /**
         * Get the value of altura
         */
        public function getAltura()
        {
                return $this->altura;
        }

        /**
         * Set the value of altura
         */
        public function setAltura($altura): self
        {
                $this->altura = $altura;

                return $this;
        }        
        
        public function getApresentacao(){
            return "Olá mundo, sou " . $this->getNome() . " resido no endereço " . $this->getEndereco() . "," . $this->getCidade() . "-" . $this->getUF() . " e posuo uma altura de " . $this->getAltura() ."\n";
        }


    }

    //o acesso de um atributo privado pode ser feito com GET, SET ou constructor//


    //Programa Principal

$pessoa1 = new Pessoa();
$pessoa1->setNome(readline("Qual o seu nome?"));
$pessoa1->setEndereco(readline("Qual o seu endereço?"));
$pessoa1->setCidade(readline("Em que cidade você vive?"));
$pessoa1->setUF(readline("Qual seu UF?"));
$pessoa1->setAltura(readline("Qual a sua altura?"));
echo $pessoa1->getApresentacao();


$pessoa2 = new Pessoa();
$pessoa2->setNome("jorge")->setEndereco("av jk")
->setCidade("foz")->setUF("PR")->setAltura(1.83);
echo $pessoa2 ->getApresentacao();
