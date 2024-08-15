<?php 
    namespace Projeto\ProjetoLivrariaTINT01T\PHP;

    use Projeto\ProjetoLivrariaTINT01T\PHP\Reserva;

    class Reserva{
        private int $codigo;
        private Livro $livro;
        private Cliente $cliente;
        private int $quantidade;

        public function __construct(
            int $codigo,
            Livro $livro,
            Cliente $cliente,
            int $quantidade
        ){
            $this->codigo     = $codigo;
            $this->livro      = $livro;
            $this->cliente     = $cliente;
            $this->quantidade = $quantidade;
        }//fim do construtor

        public function __get(string $name):mixed{
            return $this->name;
        }//fim do get

        public function __set(string $name, mixed $value):void
        {
            $this->name = $value;
        }//fim do set

        public function imprimir():string
        {
            return "<br><br>Código: ".$this->codigo.
                   "<br>Livro: ".$this->livro->imprimir().
                   "<br>Cliente: ".$this->cliente->imprimir().
                   "<br>Quantidade: ".$this->quantidade;
        }//fim do imprimir
    }//fim da classe
?>