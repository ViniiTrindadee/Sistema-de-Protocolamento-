

<?php
include "config.php";

// editar os dados cadastrais


if(!empty($_GET['id']))

{

    include_once('config.php');

$id = $_GET['id'];

$sqlSelect = "SELECT * FROM usuarios WHERE id= $id";

$result = $conexao->query($sqlSelect);


print_r($result);


$nome = $_POST['nome'];
$email = $_POST['email'];
$rg = $_POST['rg'];
$cpf = $_POST['cpf'];
$telefone = $_POST['telefone'];
$sexo = $_POST['genero'];
$idade = $_POST['idade'];
$logradouro = $_POST['logradouro'];
$cidade = $_POST['cidade'];
$cep = $_POST['cep'];
$bairro = $_POST['bairro'];
$numero = $_POST['numero'];
$estado = $_POST['estado'];
$senha = $_POST['senha'];

}   
    $result = mysqli_query($conexao, "INSERT INTO usuarios (id, nome, email, rg, cpf, telefone, sexo, idade, logradouro, cidade, cep, bairro, numero, estado, senha) 
    VALUES (NULL, '{$nome}','{$email}','{$rg}','{$cpf}','{$telefone}','{$sexo}','{$idade}','{$logradouro}','{$cidade}','{$cep}','{$bairro}','{$numero}','{$estado}','{$senha}')");

header('Location: login.php');

    if ($result) {
        echo "Formulário enviado com sucesso!";
    } else {
        echo "Falha ao enviar o formulário!";
    }

?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário | GN</title>
    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
            background-image: linear-gradient(to right, rgb(20, 147, 220), rgb(17, 54, 71));
        }

        .box {
            color: white;
            position: absolute;
            top: 55%;
            left: 55%;
            transform: translate(-50%, -50%);
            background-color: rgba(0, 0, 0, 0.6);
            padding: 15px;
            border-radius: 15px;
            width: 20%;
        }

        fieldset {
            border: 3px solid dodgerblue;
        }

        legend {
            border: 1px solid dodgerblue;
            padding: 10px;
            text-align: center;
            background-color: dodgerblue;
            border-radius: 8px;
        }

        .inputBox {
            position: relative;
        }

        .inputUser {
            background: none;
            border: none;
            border-bottom: 1px solid white;
            outline: none;
            color: white;
            font-size: 15px;
            width: 100%;
            letter-spacing: 2px;
        }

        .labelInput {
            position: absolute;
            top: 0px;
            left: 0px;
            pointer-events: none;
            transition: .5s;
        }

        .inputUser:focus~.labelInput,
        .inputUser:valid~.labelInput {
            top: -20px;
            font-size: 12px;
            color: dodgerblue;
        }

        #data_nascimento {
            border: none;
            padding: 8px;
            border-radius: 10px;
            outline: none;
            font-size: 15px;
        }

        #submit {
            background-image: linear-gradient(to right, rgb(0, 92, 197), rgb(90, 20, 220));
            width: 100%;
            border: none;
            padding: 15px;
            color: white;
            font-size: 15px;
            cursor: pointer;
            border-radius: 10px;
        }

        #submit:hover {
            background-image: linear-gradient(to right, rgb(0, 80, 172), rgb(80, 19, 195));
        }
    </style>
</head>
<body>
<a href="sistema.php">Voltar</a>
    <div class="box">
        <form action="" method="POST">
            <fieldset>
                <legend><b>Fórmulário de Solicitantes</b></legend>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="nome" id="nome" class="InputUser" required>
                    <label for="nome">Nome</label>
                </div>
                <br>
                <div class="inputBox">
                    <input type="text" name="email" id="email" class="InputUser">
                    <label for="nome">Email</label>
                </div>
                <br>
                <div class="inputBox">
                    <input type="text" name="rg" id="rg" class="InputUser">
                    <label for="nome">rg</label>
                </div>
                <br>
                <div class="inputBox">
                    <input type="text" name="cpf" id="cpf" class="InputUser">
                    <label for="nome">CPF</label>
                </div>
                <br>
                <div class="inputBox">
                    <input type="tel" name="telefone" id="telefone" class="InputUser">
                    <label for="nome">Telefone</label>
                </div>
                <br>
                <p>Sexo</p>
                <input type="radio" id="Feminino" name="genero" value="Feminino">
                <label for="Feminino">Feminino</label>
                <input type="radio" id="Masculino" name="genero" value="Masculino">
                <label for="Maculino">Masculino</label>
                <input type="radio" id="Outro" name="genero" value="Outro">
                <label for="Outro">Outro</label>
                <div class="inputBox">
                    <br>
                    <input type="number" name="idade" id="idade" class="InputUser">
                    <label for="nome">IDADE</label>
                </div>
                <br>
                <div class="inputBox">
                    <input type="text" name="logradouro" id="logradouro" class="InputUser">
                    <label for="nome">Logradouro</label>
                </div>
                <br>
                <div class="inputBox">
                    <input type="text" name="cidade" id="cidade" class="InputUser">
                    <label for="nome">Cidade</label>
                </div>
                <br>
                <div class="inputBox">
                    <input type="number" name="cep" id="CEP" class="CEP">
                    <label for="nome">CEP</label>
                </div>
                <br>
                <div class="inputBox">
                    <input type="text" name="bairro" id="bairro" class="bairro">
                    <label for="nome">bairro</label>
                </div>
                <br>
                <div class="inputBox">
                    <input type="number" name="numero" id="numero" class="numero">
                    <label for="nome">numero</label>
                </div>
                <br>
                <div class="inputBox">
                    <input type="text" name="estado" id="estado" class="estado">
                    <label for="nome">Estado</label>
                </div>
                <br>
                <div class="inputBox">
                    <input type="text" name="senha" id="senha" class="senha">
                    <label for="nome">Senha</label>
                </div>
                <br>
                <input type="submit" name="submit" id="submit">
            </fieldset>
        </form>
    </div>
</body>
</html>