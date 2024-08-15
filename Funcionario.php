<?php
    namespace Projeto\ProjetoLivrariaTINT01T\PHP;
    
    require_once("Pessoa.php");
    Use Projeto\ProjetoLivrariaTINT01T\PHP\Funcionario;
    Use Projeto\ProjetoLivrariaTINT01T\PHP\Pessoa;

    Class Funcionario extends Pessoa{
        protected int $codigo;
        protected string $cargo;
        protected float $salario;
        protected string $setor;

        public function __construct(
            int $codigo,
            string $cpf,
            string $nome,
            string $telefone,
            string $endereco,
            string $cargo,
            float $salario,
            string $setor,
        ){
            parent::__construct($cpf,$nome,$telefone,$endereco);
            $this->codigo = $codigo;
            $this->cargo  = $cargo;
            $this->salario = $salario;
            $this->setor   = $setor;
        }//fim do construtor

        public function __get(string $name):mixed
        {
            return $this->name;
        }//fim dos gets

        public function __set(string $name, mixed $value):void
        {
            $this->$name = $value;
        }//fim do set

        public function imprimir():string
        {
            
            return parent::imprimir().
                   "<br><br>Código: ".$this->codigo.
                   "<br>Cargo: ".$this->cargo.
                   "<br>Salário: ".$this->salario.
                   "<br>Setor: ".$this->setor;
        }//fim do método



    }//fim da classe
?>