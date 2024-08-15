<?php
    //declarei o projeto
    namespace Projeto\ProjetoLivrariaTINT01T\PHP;
    //fiz a conexão
    use Projeto\ProjetoLivrariaTINT01T\PHP\Livro;

    class Livro{
        private int $isbn;
        private string $titulo;
        private string $autor;
        private int $edicao;
        private string $dtLancamento;
        private int $quantidade;
        private float $precoUnitario;
        private float $total;

        public function __construct(
                int $isbn,
                string $titulo,
                string $autor,
                int $edicao,
                string $dtLancamento,
                int $quantidade,
                float $precoUnitario,
                float $total)
        {
            $this->isbn = $isbn;
            $this->titulo = $titulo;
            $this->autor  = $autor;
            $this->edicao = $edicao;
            $this->dtLancamento = $dtLancamento;
            $this->quantidade = $quantidade;
            $this->precoUnitario = $precoUnitario;
            $this->total = $total; 
        }//fim do construct

        public function getISBN():int
        {
            return $this->isbn;
        }//fim do getISBN

        public function setISBN(int $isbn):void
        {
            $this->isbn = $isbn;
        }//fim do setISBN

        public function getTitulo():string
        {
            return $this->titulo;
        }//fim do getTitulo

        public function setTitulo(string $titulo):void
        {
            $this->titulo = $titulo;
        }//fim do setTitulo

        public function getAutor():string
        {
            return $this->autor;
        }//fim do método

        public function setAutor(string $autor):void
        {
            $this->autor = $autor;
        }//fim do método

        public function getEdicao():int
        {
            return $this->edicao;
        }//fim do método

        public function setEdicao(int $edicao):void
        {
            $this->edicao = $edicao;
        }//fim do método

        public function getLancamento():string
        {
            return $this->dtLancamento;
        }//fim do método

        public function setLancamento(int $edicao):void
        {
            $this->edicao = $edicao;
        }//fim do método

        public function getQuantidade():int
        {
            return $this->quantidade;
        }//fim do método

        public function setQuantidade(int $quantidade):void
        {
            $this->quantidade = $quantidade;
        }//fim do método

        public function getPrecoUnitario():float
        {
            return $this->precoUnitario;
        }//fim do método

        public function setPrecoUnitario(float $preco):void
        {
            $this->precoUnitario = $preco;
        }//fim do método

        public function getTotal():float
        {
            return $this->total;
        }//fim do método

        public function setTotal(float $total):void
        {
            $this->total = $total;
        }//fim do método

        public function calcularTotal():float
        {
            $this->setTotal($this->getPrecoUnitario() * $this->getQuantidade());
            //$this->getTotal();
        }//fim do método   

        public function imprimir():string
        {
            return "<br>ISBN: ".$this->getISBN().
                   "<br>Titulo: ".$this->getTitulo().
                   "<br>Autor: ".$this->getAutor().
                   "<br>Edição: ".$this->getEdicao().
                   "<br>Data de Lançamento: ".$this->getLancamento().
                   "<br>Quantidade: ".$this->getQuantidade().
                   "<br>Preço Unitário: ".$this->getPrecoUnitario().
                   "<br>Preço Total: ".$this->getTotal();
        }//fim do método imprimir
    
    
    
    }//fim da classe
?>