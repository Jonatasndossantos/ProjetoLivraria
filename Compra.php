<?php
    namespace Projeto\ProjetoLivrariaTINT01T\PHP;
    require_once("Cliente.php");
    require_once("Funcionario.php");
    require_once("Livro.php");

    use Projeto\ProjetoLivrariaTINT01T\PHP\Compra;
    use Projeto\ProjetoLivrariaTINT01T\PHP\Cliente;
    use Projeto\ProjetoLivrariaTINT01T\PHP\Funcionario;
    use Projeto\ProjetoLivrariaTINT01T\PHP\Livro;

    class Compra{
        private int $codigoCompra;
        private Livro $livro;//Objeto Livro
        private int $quantidadeCompra;
        private float $totalCompra;
        private Cliente $cliente;//Objeto Cliente
        private Funcionario $funcionario;//Objeto Funcionario

        public function __construct(
            int $codigoCompra,
            Livro $livro,
            int $quantidadeCompra,
            float $totalCompra,
            Cliente $cliente,
            Funcionario $funcionario)
        {
            $this->codigoCompra = $codigoCompra;
            $this->livro = $livro;
            $this->quantidadeCompra = $quantidadeCompra;
            $this->totalCompra = $totalCompra; 
            $this->cliente = $cliente;
            $this->funcionario = $funcionario;
        }//fim do construtor

        public function __get(string $name):mixed
        {
            return $this->name;
        }//fim do método get

        public function __set(string $name, mixed $value):void
        {
            $this->name = $value;
        }//fim do set

        public function imprimir():string
        {
            return "<br><br>Código Compra: ".$this->codigoCompra.
                   "<br>Livro: ".$this->livro->imprimir().
                   "<br>Total: ".$this->totalCompra.
                   "<br>Cliente: ".$this->cliente->imprimir().
                   "<br>Funcionário: ".$this->funcionario->imprimir();
        }//fim do método





    }//fim da classe compra
?>