<?php
	include_once("conecta.php");
?>
<!DOCTYPE html>
<html lang="br">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Colorlib Templates">
    <meta name="author" content="Colorlib">
    <meta name="keywords" content="Colorlib Templates">

    <!-- Title Page-->
    <title>cadastro de Atendimento</title>

    <!-- Icons font CSS-->
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css/main.css" rel="stylesheet" media="all">
</head>

<body>
    <div class="page-wrapper bg-gra-02 p-t-130 p-b-100 font-poppins">
        <div class="wrapper wrapper--w680">
            <div class="card card-4">
                <div class="card-body">
                    <h2 class="title">Atendimento</h2>
                    <form action="CadastraAtendimento.php" method="POST">
                    <div class="row row-space">
                            <div class="col-2">
                            <label class="label">Beneficiário</label>
                                        <select class="input--style-4" type="select" name="beneficiario" required>
                                            <option>selecione</option>
                                            <?php
                                                $result_nome_beneficiario = "SELECT beneficiarioId, nome FROM beneficiario";
                                                $resultado = mysqli_query($conexao, $result_nome_beneficiario);
                                                while($row_resultado = mysqli_fetch_assoc($resultado)){ ?>
                                                    <option value="<?php echo $row_resultado['beneficiarioId']; ?>"><?php echo $row_resultado['nome']; ?></option> <?php
                                                }
                                            ?>
                                        </select> 
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                <label class="label">Especialidade</label>
                                        <select class="input--style-4" type="select" name="especialidade" required>
                                            <option>selecione</option>
                                            <?php
                                                $result_nome_especialidade = "SELECT especialidadeId, especialidade FROM especialidade";
                                                $resultado = mysqli_query($conexao, $result_nome_especialidade);
                                                while($row_resultado = mysqli_fetch_assoc($resultado)){ ?>
                                                    <option value="<?php echo $row_resultado['especialidadeId']; ?>"><?php echo $row_resultado['especialidade']; ?></option> <?php
                                                }
                                            ?>
                                        </select>
                                    
                                </div>
                            </div>
                        </div>
                        <div class="row row-space">
                            <div class="col-2">
                            <label class="label">Médico</label>
                                        <select class="input--style-4" type="select" name="medico" required>
                                            <option>selecione</option>
                                            <?php
                                                $result_nome_medico = "SELECT medicoId, nome FROM medico";
                                                $resultado = mysqli_query($conexao, $result_nome_medico);
                                                while($row_resultado = mysqli_fetch_assoc($resultado)){ ?>
                                                    <option value="<?php echo $row_resultado['medicoId']; ?>"><?php echo $row_resultado['nome']; ?></option> <?php
                                                }
                                            ?>
                                        </select>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                <label class="label">Local</label>
                                        <select class="input--style-4" type="select" name="local" required>
                                            <option>selecione</option>
                                            <?php
                                                $result_nome_local = "SELECT localId, endereco FROM localatendimento";
                                                $resultado = mysqli_query($conexao, $result_nome_local);
                                                while($row_resultado = mysqli_fetch_assoc($resultado)){ ?>
                                                    <option value="<?php echo $row_resultado['localId']; ?>"><?php echo $row_resultado['endereco']; ?></option> <?php
                                                }
                                            ?>
                                        </select>
                                    
                                </div>
                            </div>
                        </div>
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                        <label class="label">Procedimento</label>
                                        <select class="input--style-4" type="select" name="procedimento" required>
                                            <option>selecione</option>
                                            <?php
                                                $result_nome_procedimento = "SELECT procedimentoId, tipoProcedimento FROM procedimento";
                                                $resultado = mysqli_query($conexao, $result_nome_procedimento);
                                                while($row_resultado = mysqli_fetch_assoc($resultado)){ ?>
                                                    <option value="<?php echo $row_resultado['procedimentoId']; ?>"><?php echo $row_resultado['tipoProcedimento']; ?></option> <?php
                                                }
                                            ?>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <label for="data" class="label">Data</label>
                                    <div class="input-group-icon">
                                        <input class="input--style-4" type="date" id="data" name="data" required>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="p-t-15">
                            <button class="btn btn--radius-2 btn--blue" type="submit">Enviar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Jquery JS-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <!-- Vendor JS-->
    <script src="vendor/select2/select2.min.js"></script>
    <script src="vendor/datepicker/moment.min.js"></script>
    <script src="vendor/datepicker/daterangepicker.js"></script>

    <!-- Main JS-->
    <script src="js/global.js"></script>

</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>
<!-- end document-->