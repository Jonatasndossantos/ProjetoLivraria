<?php
    namespace Projeto\ProjetoLivrariaTINT01T\PHP;
    
    require_once("Funcionario.php");
    require_once("Cliente.php");
    require_once("Livro.php");
    require_once("Compra.php");
    
    use Projeto\ProjetoLivrariaTINT01T\PHP\ControllerLivro;

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro Compra</title>
</head>
<body>
    <form method="POST">
        <label>Codigo de Compra:</label>
        <input type="text" id="codigoCompra" name="codigoCompra"><br><br>

        <label>Quantidade de Compra:</label>
        <input type="text" id="quantidadeCompra" name="quantidadeCompra"><br><br>

        <label>Total de Compra:</label>
        <input type="text" id="totalCompra" name="totalCompra"><br><br>

        <button>Cadastrar
            <?php
              try{
                $codigoCompra          = $_POST['codigoCompra'];
                $livro = new Livro(1234,
                                    "Romeu e Julieta",
                                    "Shakespeare", 
                                    1,
                                    "29/02/1989",
                                    100,
                                    15,
                                    1500);
                $quantidadeCompra         = $_POST['quantidadeCompra'];
                $totalCompra        = $_POST['totalCompra'];
                $cliente = new Cliente(
                                        1,
                                        "124",
                                        "Allan",
                                        "telefone",
                                        "rua",
                                        1000);
                $func = new Funcionario(
                                        1,
                                        "123414",
                                        "Allan",
                                        "rara",
                                        "Rua",
                                        "Vendedor",
                                        2500,
                                        "Comercial");

                $compra1 = new Compra($codigoCompra,
                                    $livro,
                                    $quantidadeCompra,
                                    $totalCompra,
                                    $cliente,
                                    $func);
              }catch(Exception $erro){
                echo $erro;
              }//fim try
            ?>
        </button><br><br>
        <?php echo $compra1->imprimir();?>
    </form>
</body>
</html>
