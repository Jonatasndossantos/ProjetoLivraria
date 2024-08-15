<?php
    namespace Projeto\ProjetoLivrariaTINT01T\PHP;

    require_once("Reserva.php");
    require_once("Livro.php");
    require_once("Cliente.php");
    
    use Projeto\ProjetoLivrariaTINT01T\PHP\ControllerReserva;

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro Reserva</title>
</head>
<body>
    <form method="POST">
        <label>Codigo:</label>
        <input type="text" id="codigo" name="codigo"><br><br>
 
        <label>Quantidade:</label>
        <input type="text" id="quantidade" name="quantidade"><br><br>

        <button>Cadastrar
            <?php
              try{
                $codigo     = $_POST['codigo'];
                $livro      = new Livro(1234,
                                        "Romeu e Julieta",
                                        "Shakespeare", 
                                        1,
                                        "29/02/1989",
                                        100,
                                        15,
                                        1500);
                $cliente     = new Cliente(
                                          1,
                                          "124",
                                          "Allan",
                                          "telefone",
                                          "rua",
                                          1000);
                $quantidade = $_POST['quantidade'];

                $reserva1 = new Reserva($codigo,
                                        $livro,
                                        $cliente,
                                        $quantidade);
              }catch(Exception $erro){
                echo $erro;
              }//fim try
            ?>
        </button><br><br>
        <?php echo $reserva1->imprimir();?>
    </form>
</body>
</html>
