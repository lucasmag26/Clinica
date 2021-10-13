<?php
	include_once("conecta.php");
?>

<!DOCTYPE html >
<meta charset="utf-8"> 
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

<html>
    <head>
        <title>Clinica </title>
    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="#">Navbar</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item active">
                        <a class="nav-link" href="formularios/beneficiario.php">Cadastrar Beneficiário <span class="sr-only"></span></a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="formularios/medico.php">Cadastrar Médico <span class="sr-only"></span></a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="formularios/procedimento.php">Cadastrar Procedimento <span class="sr-only"></span></a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="formularios/especialidade.php">Cadastrar Especialidade <span class="sr-only"></span></a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="formularios/Local.php">Cadastrar Local <span class="sr-only"></span></a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="formularios/Atendimento.php">Atendimento Médico <span class="sr-only"></span></a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="graficos.php">Gráficos <span class="sr-only"></span></a>
                    </li>
                </ul>
            </div>
        </nav>
        <div>
            <table class="table table-dark" style=" width: 50%; position: absolute; top: 25%; left: 50%; transform: translate(-50%, -50%);"> 
                <h3>Beneficiários</h3>
                <thead>
                    <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Data Nascimento</th>
                    <th scope="col">Sexo</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                            $result_beneficiario = "SELECT * FROM beneficiario";
                            $resultado_beneficiario = mysqli_query($conexao, $result_beneficiario);
                
                            while($rows_cursos = mysqli_fetch_assoc($resultado_beneficiario)){ ?>
								<tr>
									<td><?php echo $rows_cursos['beneficiarioID']; ?></td>
									<td><?php echo $rows_cursos['nome']; ?></td>
                                    <td><?php echo $rows_cursos['dataNascimento']; ?></td>
                                    <td><?php echo $rows_cursos['sexo']; ?></td>
								</tr>
							<?php } ?>

                </tbody>
            </table>
        </div>
        <div>
            <table class="table table-dark" style=" width: 50%; position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%);"> 
                <h3 style="position: absolute; top: 50%;">Médico</h3>
                <thead>
                    <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nome</th>
                    <th scope="col">CRM</th>
                    <th scope="col">Data Nascimento</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                            $result_medico= "SELECT * FROM medico";
                            $resultado_medico = mysqli_query($conexao, $result_medico);
                
                            while($rows_cursos = mysqli_fetch_assoc($resultado_medico)){ ?>
								<tr>
									<td><?php echo $rows_cursos['medicoID']; ?></td>
									<td><?php echo $rows_cursos['nome']; ?></td>
                                    <td><?php echo $rows_cursos['crm']; ?></td>
                                    <td><?php echo $rows_cursos['dataNascimento']; ?></td>
								</tr>
							<?php } ?>

                </tbody>
            </table>
        </div>
        <div>
            <table class="table table-dark" style=" width: 50%; position: absolute; top: 75%; left: 50%; transform: translate(-50%, -50%);"> 
                <h3 style="position: absolute; top: 50%;">Médico</h3>
                <thead>
                    <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nome</th>
                    <th scope="col">CRM</th>
                    <th scope="col">Data Nascimento</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                            $result_medico= "SELECT * FROM medico";
                            $resultado_medico = mysqli_query($conexao, $result_medico);
                
                            while($rows_cursos = mysqli_fetch_assoc($resultado_medico)){ ?>
								<tr>
									<td><?php echo $rows_cursos['medicoID']; ?></td>
									<td><?php echo $rows_cursos['nome']; ?></td>
                                    <td><?php echo $rows_cursos['crm']; ?></td>
                                    <td><?php echo $rows_cursos['dataNascimento']; ?></td>
								</tr>
							<?php } ?>

                </tbody>
            </table>
        </div>
    </body>
</html>