<?php
    namespace Projeto\ProjetoLivrariaTINT01T\PHP;

    require_once("Cliente.php");
    
    use Projeto\ProjetoLivrariaTINT01T\PHP\ControllerCliente;

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro Cliente</title>
</head>
<body>
    <form method="POST">
        <label>codigo:</label>
        <input type="text" id="codigo" name="codigo"><br><br>

        <label>cpf:</label>
        <input type="text" id="cpf" name="cpf"><br><br>

        <label>nome:</label>
        <input type="text" id="nome" name="nome"><br><br>

        <label>telefone:</label>
        <input type="text" id="telefone" name="telefone"><br><br>

        <label>endereco:</label>
        <input type="text" id="endereco" name="endereco"><br><br>
        
        <label>totalCompra:</label>
        <input type="text" id="totalCompra" name="totalCompra"><br><br>
       
        <button>Cadastrar
            <?php
              try{
                $codigo          = $_POST['codigo'];
                $cpf        = $_POST['cpf'];
                $nome         = $_POST['nome'];
                $telefone        = $_POST['telefone'];
                $endereco    = $_POST['endereco'];
                $totalCompra = $_POST['totalCompra'];
                
                $cliente = new Cliente($codigo,
                                        $cpf, 
                                        $nome, 
                                        $telefone, 
                                        $endereco,
                                        $totalCompra);
              }catch(Exception $erro){
                echo $erro;
              }//fim try
            ?>
        </button><br><br>
        <?php echo $cliente->imprimir();?>
    </form>
</body>
</html>
