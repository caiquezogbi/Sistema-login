<?php
session_start();
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sistema de Cadastro - PHP + MySQL</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">


    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="images/icons/favicon.ico" />
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="css/util.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <!--===============================================================================================-->


</head>

<body>



    <div class="limiter">
        <div class="container-login100">
            <div class="wrap-login100">



                <form class="login100-form validate-form" action="cadastrar.php" method="POST">


                    <span class="login100-form-title p-b-26">
                        Sistema de Cadastro
                    </span>
                    <span class="login100-form-title p-b-48">
                        <i class="zmdi zmdi-font"></i>
                    </span>






                    <div class="wrap-input100 validate-input" data-validate="Valid email is: a@b.c">
                        <input class="input100" type="text" name="nome">
                        <span class="focus-input100" data-placeholder="Nome"></span>
                    </div>

                    <div class="wrap-input100 validate-input" data-validate="Valid email is: a@b.c">
                        <input class="input100" type="text" name="usuario">
                        <span class="focus-input100" data-placeholder="usuario"></span>
                    </div>



                    <div class="wrap-input100 validate-input" data-validate="Enter password">
                        <span class="btn-show-pass">
                            <i class="zmdi zmdi-eye"></i>
                        </span>
                        <input class="input100" type="password" name="senha">
                        <span class="focus-input100" data-placeholder="senha"></span>
                    </div>


                    <div class="wrap-input100 validate-input" data-validate="Enter password">
                        </span>
                        <input class="input100" type="password" name="confirma_senha">
                        <span class="focus-input100" data-placeholder="Confirmar senha"></span>
                    </div>



                    <?php
                    if ($_POST) {
                        $senha          = $_POST['senha'];
                        $senhaConfirma  = $_POST['senha_confirma'];
                        if ($senha == "") {
                            $mensagem = "<span class='aviso'><b>Aviso</b>: Senha não foi alterada!</span>";
                        } else if ($senha == $senhaConfirma) {
                            $mensagem = "<span class='sucesso'><b>Sucesso</b>: As senhas são iguais: " . $senha . "</span>";
                        } else {
                            $mensagem = "<span class='erro'><b>Erro</b>: As senhas não conferem!</span>";
                        }
                        echo "<p id='mensagem'>" . $mensagem . "</p>";
                    }
                    ?>


                    <div class="container-login100-form-btn">
                        <div class="wrap-login100-form-btn">
                            <div class="login100-form-bgbtn"></div>
                            <button class="login100-form-btn">
                                Cadastrar
                            </button>
                        </div>
                    </div>

                    <?php
                    if (isset($_SESSION['status_cadastro'])) :
                    ?>
                        <div class="text-center p-t-115">
                            <span class="txt1">
                                <p>Cadastro efetuado!</p>
                                <p>Faça login informando o seu usuário e senha <a href="login.php">AQUI</a></p>
                            </span>
                        </div>
                    <?php
                    endif;
                    unset($_SESSION['status_cadastro']);
                    ?>

                    <?php
                    if (isset($_SESSION['usuario_existe'])) :
                    ?>
                        <div class="text-center p-t-115">
                            <span class="txt1">
                                <p>O usuário escolhido já existe. Informe outro e tente novamente.</p>
                            </span>
                        </div>
                    <?php
                    endif;
                    unset($_SESSION['usuario_existe']);
                    ?>


                </form>

            </div>
        </div>
    </div>







    <div id="dropDownSelect1"></div>

    <!--===============================================================================================-->
    <script src="vendor/jquery/jquery-3.2.1.min.js"></script>
    <!--===============================================================================================-->
    <script src="vendor/animsition/js/animsition.min.js"></script>
    <!--===============================================================================================-->
    <script src="vendor/bootstrap/js/popper.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <!--===============================================================================================-->
    <script src="vendor/select2/select2.min.js"></script>
    <!--===============================================================================================-->
    <script src="vendor/daterangepicker/moment.min.js"></script>
    <script src="vendor/daterangepicker/daterangepicker.js"></script>
    <!--===============================================================================================-->
    <script src="vendor/countdowntime/countdowntime.js"></script>
    <!--===============================================================================================-->
    <script src="js/main.js"></script>










</body>





</html>