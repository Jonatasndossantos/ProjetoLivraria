<?php
    //Definir o Projeto = Especificar as pastas
    namespace Projeto\ProjetoLivrariaTINT01T\PHP;
    //Específica qual classe eu vou utilizar
    use Projeto\ProjetoLivrariaTINT01T\PHP\Pessoa;

    class Pessoa{
        //Encapsular as variáveis
        //Declaração de Variáveis
        protected string $cpf;
        protected string $nome;
        protected string $telefone;
        protected string $endereco;

        //Instanciar = dar um valor inicial
        //Método Construtor
        public function __construct(
            string $cpf, 
            string $nome, 
            string $telefone, 
            string $endereco)
        {
            $this->cpf      = $cpf;
            $this->nome     = $nome;
            $this->telefone = $telefone;
            $this->endereco = $endereco;
        }//fim do método construtor

        //Métodos Gets e Sets - Acesso e Modificação
        public function getCPF():string
        {
            return $this->cpf;
        }//fim do método retornar cpf

        public function setCPF(string $cpf):void
        {
            $this->cpf = $cpf;
        }//fim do método alterar CPF

        public function getNome():string
        {
            return $this->nome;
        }//fim do método consultarNome

        public function setNome(string $nome):void
        {
            $this->nome = $nome;
        }//fim do alterar nome

        public function getTelefone():string
        {
            return $this->telefone;
        }//fim do método

        public function setTelefone(string $telefone):void
        {
            $this->telefone = $telefone;
        }//fim do método alterar Telefone

        public function getEndereco():string
        {
            return $this->endereco;
        }//fim do consultarEndereco

        public function setEndereco(string $endereco):void
        {
            $this->endereco = $endereco;
        }//fim do alterar Endereço

        public function imprimir():string
        {
            return "<br>CPF: ".$this->getCPF().
                   "<br>Nome: ".$this->getNome().
                   "<br>Telefone: ".$this->getTelefone().
                   "<br>Endereço: ".$this->getEndereco()."<br><br>";
        }//fim do imprimir

    }//fim da classe
?>