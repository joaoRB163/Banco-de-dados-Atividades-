<html>
    <head>
        <style>
            body{
                background: black;
                background-image: url(img/o-planeta-que-pode-acabar-com-a-vida-na-terra-1679542997906_1280.webp);
            }
        </style>
    </head>
    <body>
        <?php
        //dados do banco de dados. obs: é o que ewstá em nosso phpmyadmin
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "frontEbackEnd";

        //aqui é realizado a conexão com o banco de dados
        $conn = new mysqli($servername, $username, $password, $dbname);

        //verificar se a conexão com o db deu boa tchô!
        if ($conn -> connect_error){
            die("Erro na conexão com o banco de dados: " . $conn -> connect_error);
        }

        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $telefone = $_POST['telefone'];

        $sql = "INSERT INTO contatos (nome, email, telefone) VALUES ('$nome','$email','$telefone')";
        
        if ($conn -> query($sql) == TRUE){
            //echo "Dados inseridos com sucesso!"
            echo "<div style = 'background-color: #dff0d8, padding, 10px; border: 1px solid #3c763d;
                border-radius: 5px;'>Dados inseridos com sucesso!</div>";
            echo "<div class = 'message' style = 'background-color: #dff0d8; padding: 10px; border: 1px solid #3c763;
            border-radius: 5px;'><a hraf = 'formulario.html'>Retornar à página inicial</a></div>";
        } else {
            echo "Erro ao inserir dados: " . $conn -> error;
        }

        //fechar a conexão com o banco de dados
        $conn -> close();
        ?>
    </body>
</html>