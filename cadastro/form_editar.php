<html>
    <head>
        <title>Cadastro de pessoas</title>           
    </head>
    <body>
        <?php
            require_once("menu.php");
        ?>
        <form action="editar.php" method="post">
            Digite o código da pessoa para editar:<br/><input type="text" name="id" />
            Digite o novo nome da pessoa:<br/><input type="text" name="nome" />
            <input type="submit" value="Editar" />
             
        </form>        
    </body>
</html>
<?php
    require_once("menu.php");
    
    session_start();
    
    if(isset($_SESSION["cadastros"])){
        $cadastros = $_SESSION["cadastros"];
        
        foreach($cadastros as $id => $pessoa){
            if($pessoa != null){
                echo "[$id] => $pessoa<br/>";
            }
        }
    }
    else{
        echo "Não existem pessoas cadastradas";
    }

?>
