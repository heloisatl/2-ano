<?php

require_once("Prato.php");

class Pedido {

        private string $nomeCliente;
        private string $nomeGarcom;
        private Prato $prato;

        public function getNomeCliente(): string {
                return $this->nomeCliente;
        }

        public function setNomeCliente(string $nomeCliente): self {
                $this->nomeCliente = $nomeCliente;

                return $this;
        }

        public function getNomeGarcom(): string {
                return $this->nomeGarcom;
        }

        public function setNomeGarcom(string $nomeGarcom): self {
                $this->nomeGarcom = $nomeGarcom;

                return $this;
        }

        public function getPrato(): Prato {
                return $this->prato;
        }


        public function setPrato(Prato $prato): self {
                $this->prato = $prato;

                return $this;
        }

        public function __toString() {

            $imprimir = "Nome: " . $this->getNomeCliente() . "\n" . 
            "Nome garçom: " . $this->getNomeGarcom() . "\n" . 
            "Número: " . $this->getPrato()->getNumero() . "\n" . 
            "Nome prato: " . $this->getPrato()->getNome() . "\n" . 
            "Valor: " . $this->getPrato()->getValor() . "\n\n";

            return $imprimir;
        }
    }