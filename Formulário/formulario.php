<?php
/* function incluirClasses($nomeClasse){
    if(file_exists($nomeClasse . ".php")){
        require_once ($nomeClasse . ".php");
    }
}

spl_autoload_register("incluirClasses");
*/

if (isset($_POST['submit'])){
    echo ($_POST['nome']);
    echo ($_POST['email']);
    echo ($_POST['telefone']);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" type="text/css" href="estilo.css"> -->
    <title>Formulário</title>
    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
            background-image: linear-gradient(to left, rgb(20,147,220), rgb(17,54,71)) ;
        }

        .box{
            position: absolute;
            top: 50%; 
            left: 50%;
            transform: translate(-50%, -50%);
            background-color: rgba(0, 0, 0, 0.6);
            padding: 15px;
            border-radius: 15px;
            color: white;
        }

        .ext{
            border: 3px solid dodgerblue;
            border-radius: 5px;
        }

        .legext{
            text-align: center;
            padding: 10px;
            background-color: dodgerblue;
            border-radius: 8px;
        }

        .inputBox{
            position: relative;
        }

        .inputUser{
            background: none;
            border: none;
            border-bottom: 1px solid white;
            outline: none;
            color: white;
            font-size: 15px;
            width: 100%;
            letter-spacing: 2px;

        }

        .labelinput{
            position: absolute;
            top: 0px;
            left: 0px;
            pointer-events: none;
            transition: .5s;

        }

        .inputUser:focus ~ .labelinput,
        .inputUser:valid ~ .labelinput{
            top: -20px;
            font-size: 12px;
            color: dodgerblue;
        }

        #data_nascimento{
            border: none;
            padding: 8px;
            border-radius: 10px;
            outline: none;
            text-align: center;
            font-size: 15px;

        }

        #submit{
            background-image: linear-gradient(to right, rgb(0,92,197), rgb(90,20,220));
            width: 100%;
            border: none;
            padding: 15px;
            border-radius: 10px;
            font-size: 20px;
            transition: 0.6s;
            height: 55px;
        }
        #submit:hover{
            background-image: linear-gradient(to right, rgb(0,80,172), rgb(80,19,195));
            text-align: center;
            color: dodgerblue;
            font-size: 25px;
            color: white;
            cursor: pointer;
            transition: 0.6s;
        }
    </style>
</head>

<body>
    <div class="box">
        <form action="formulario.php" method="POST">
            <fieldset class="ext">
                <legend class="legext"><strong> Formulário de Clientes </strong></legend>
                <br>
                <div class="inputBox">
                    <input type="text" name="nome" id="nome" class="inputUser" required>
                    <labeL for="nome" class="labelinput">Nome Completo</labeL>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="email" id="email" class="inputUser" required>
                    <labeL for="email" class="labelinput">Email</labeL>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="tel" name="telefone" id="telefone" class="inputUser" required>
                    <labeL for="telefone" class="labelinput">Telefone</labeL>
                </div>
                <br><br>
                <fieldset id="sexo" class="int">
                    <legend class="legint">Sexo: </legend>
                    <input type="radio" id="feminino" name="genero" value="feminino" required>
                    <label for="feminino">Feminino</label>
                    <input type="radio" id="masculino" name="genero" value="masculino" required>
                    <label for="masculino">Masculino</label>
                    <input type="radio" id="outro" name="genero" value="outro" required>
                    <label for="outro">Outro</label>
                </fieldset>
                <br><br>
                <div class="inputBox">
                    <label for="data_nascimento"><b>Data de Nascimento </b></label>
                    <input type="date" name="data_nascimento" id="data_nascimento" required>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="cidade" id="cidade" class="inputUser" required>
                    <labeL for="cidade" class="labelinput">Cidade</labeL>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="estado" id="estado" class="inputUser" required>
                    <labeL for="estado" class="labelinput">Estado</labeL>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="endereco" id="endereco" class="inputUser" required>
                    <labeL for="endereco" class="labelinput">Endereço</labeL>
                </div>
                <br><br>
                <input type="submit" name="submit" id="submit">
                <br>
            </fieldset> 
        </form>
    </div>
</body>
</html>