<?php
    //Conectando a classe ao projeto
    namespace Projeto\ProjetoLivrariaTINT01T\PHP;
    //Colocar qual classe eu utilizar
    require_once("Pessoa.php");
    require_once("Livro.php");
    require_once("Compra.php");
    require_once("Funcionario.php");
    require_once("Reserva.php");
    //Mostrar quem eu vou usar - reforço
    Use Projeto\ProjetoLivrariaTINT01T\PHP\Pessoa;
    Use Projeto\ProjetoLivrariaTINT01T\PHP\Livro;
    Use Projeto\ProjetoLivrariaTINT01T\PHP\Compra;
    Use Projeto\ProjetoLivrariaTINT01T\PHP\Funcionario;
    Use Projeto\ProjetoLivrariaTINT01T\PHP\Reserva;

    //Instanciar o livro = Dar o valor inicial
    $livro1 = new Livro(1234,
                        "Romeu e Julieta",
                        "Shakespeare", 
                        1,
                        "29/02/1989",
                        100,
                        15,
                        1500);

    //echo $livro1->imprimir();

    

    $func1 = new Funcionario(
                    1,
                    "123414",
                    "Allan",
                    "rara",
                    "Rua",
                    "Vendedor",
                    2500,
                    "Comercial"
                    );
    //echo $func1->imprimir();

    $cliente1 = new Cliente(
        1,
        "124",
        "Allan",
        "telefone",
        "rua",
        1000
    );
    
    /*echo $cliente1->imprimir();

    $reserva1 = new Reserva(
                    1,
                    "Romeu e Julieta",
                    "Allan",
                    2
    );//fim do método

    echo $reserva1->imprimir();*/
    $compra1 = new Compra(
                1, 
                $livro1,
                10,
                100,
                $cliente1,
                $func1
                );
    echo $compra1->imprimir();

    //Teste Reserva de Livros
    $reserva1 = new Reserva(1,$livro1,$cliente1,10);
    echo $reserva1->imprimir();




?>