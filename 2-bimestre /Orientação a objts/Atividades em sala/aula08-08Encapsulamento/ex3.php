<?php

    class Livro{
        private $titulo;
        private $autor;
        private $genero;
        private $numeroPag;
    
    
        
        public function getTitulo()
        {
                return $this->titulo;
        }


        public function setTitulo($titulo): self
        {
                $this->titulo = $titulo;

                return $this;
        }


        public function getAutor()
        {
                return $this->autor;
        }


        public function setAutor($autor): self
        {
                $this->autor = $autor;

                return $this;
        }


        public function getGenero()
        {
                return $this->genero;
        }


        public function setGenero($genero): self
        {
                $this->genero = $genero;

                return $this;
        }


        public function getNumeroPag()
        {
                return $this->numeroPag;
        }


        public function setNumeroPag($numeroPag): self
        {
                $this->numeroPag = $numeroPag;

                return $this;
        }
    }

    //Programa Principal

for ($i=1; $i <= 3 ; $i++) { 
    $li = new Livro;
    $li->setTitulo(readline("Qual o título do livro" . $i . "?"));    
    $li->setAutor(readline("Qual o autor do livro" . $i . "?"));
    $li->setGenero(readline("Qual o gênero do livro" . $i . "?"));
    $li->setNumeroPag(readline("Quantas páginas o livro" . $i . " tem?"));
}