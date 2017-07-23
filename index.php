<?php

  include "bdc.php";
  //include "val.php";
 //include "validarNivel.php";
  
  
  if(isset($_POST['cadastro'])){
    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $areaInteresse = $_POST["areaInteresse"];
    $cidade = $_POST["cidade"];
      
    $sql = "INSERT INTO `usuario`( `nm_usuario`, `nm_email`, `id_area`, `nm_cidade`) VALUES ('{$nome}','{$email}','{$areaInteresse}','{$cidade}')";
    
	$sql = mysql_query($sql);
  }
  
  //query
 //  $area = "SELECT * FROM `area`;";
//	$res = mysql_query($area);
	

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Hackathon Smart Cities</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <link rel="stylesheet" href="css/home.css">
</head>

<body>

    <div class="jumbotron img-responsive">
        <div class="container">
            <br> <br>  <br> <br> <br> <br> <br> <br> <br> <br>  <br> <br> <br> <br> <br> <br>    
            <div class="col-xs-offset-10 col-sm-offset-10 col-md-offset-10 col-lg-offset-10 position">
                <p>
                    <a class="btn btn-secundary btn-lg show-button">Learn more</a>
                </p>
            </div>

             <br> <br> <br> <br> <br> <br>
        </div>
    </div>

    <div class="container">

        <div class="row">
            <div class="col-xs-12 col-sm-5 col-md-5 col-lg-5">
                <h1 class="primary-color">O Evento</h1>
                <p>Lorem Ipsum é simplesmente uma simulação de texto da indústria tipográfica e de impressos, e vem sendo utilizado
                    desde o século XVI, quando um impressor desconhecido pegou uma bandeja de tipos e os embaralhou para
                    fazer um livro de modelos de tipos. Lorem Ipsum sobreviveu não só a cinco séculos, como também ao salto
                    para a editoração eletrônica, permanecendo essencialmente inalterado. Se popularizou na década de 60,
                    quando a Letraset lançou decalques contendo passagens de Lorem Ipsum, e mais recentemente quando passou
                    a ser integrado a softwares de editoração eletrônica como Aldus PageMaker.</p>
            </div>
        </div>

        <hr class="featurette-divider">

        <h2 class="text-center featurette-divider primary-color">O que você ganha</h2>

        <div class="row">
            <div class="col-lg-4">
                <div class="text-center">
                    <img class="img-circle img-color" src="img/aviao.png" alt="Generic placeholder image" width="140" height="140">
                    <h2>Heading</h2>
                    <p>Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies
                        vehicula ut id elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo
                        cursus magna.</p>
                </div>
            </div>
            <!-- /.col-lg-4 -->
            <div class="col-lg-4">
                <div class="text-center">
                    <img class="img-circle img-color" src="img/aviao.png" alt="Generic placeholder image" width="140" height="140">
                    <h2>Heading</h2>
                    <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras
                        mattis consectetur purus sit amet fermentum. Fusce dapibus, tellus ac cursus commodo, tortor mauris
                        condimentum nibh.
                    </p>
                </div>
            </div>
            <!-- /.col-lg-4 -->
            <div class="col-lg-4">
                <div class="text-center">
                    <img class="img-circle img-color " src="img/aviao.png" alt="Generic placeholder image" width="140" height="140">
                    <h2>Heading</h2>
                    <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula
                        porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh,
                        ut fermentum massa justo sit amet risus.</p>
                </div>
            </div>
            <!-- /.col-lg-4 -->
        </div>


        <hr class="featurette-divider">

        <h2 class="text-center featurette-divider primary-color">Quem já participou</h2>

        <div class="row">
            <div class="col-lg-4">
                <h2>Heading</h2>
                <p>Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies vehicula
                    ut id elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna.</p>
            </div>
            <!-- /.col-lg-4 -->
            <div class="col-lg-4">
                <h2>Heading</h2>
                <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis
                    consectetur purus sit amet fermentum. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum
                    nibh.
                </p>
            </div>
            <!-- /.col-lg-4 -->
            <div class="col-lg-4">
                <h2>Heading</h2>
                <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta
                    felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum
                    massa justo sit amet risus.</p>
            </div>
            <!-- /.col-lg-4 -->
        </div>

        <hr class="featurette-divider">

        <div class="row">
            <div class="col-md-offset-3 col-md-6">
			<form name="cadastro" action = "#" method="post" id="formulario" role="form">
              
                    <legend>
                        <h2 class="primary-color">Inscreva-se</h2>
                    </legend>

                    <div class="form-group">
                        <label for="nome">Nome</label>
                        <input type="text" class="form-control" name="nome" id="nome" placeholder="Nome">
                    </div>

                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="text" class="form-control" name="email" id="email" placeholder="Email">
                    </div>

                    <div class="form-group">
                        <label for="cidade">Cidade</label>
                        <input type="text" class="form-control" name="cidade" id="cidade" placeholder="Cidade">
                    </div>

                    <div class="form-group">
										<label  for="areaDeInteresse"> Area De Interesse</label>									
										 <select class="form-control" type="text" class="input" name="areaInteresse"  >
										 <option value="1">Designer</option>
										 <option value="2">Programador</option>
										 <option value="3">Vendas</option>
										 <option value="4">Markting</option>
										 </select>
                    </div>


										 
				
                    <button name="cadastro" value="Cadastrar" type="submit" class="btn btn-primary btn-block" onClick="alertInfo()">Inscreva-se</button>

                </form>
            </div>
        </div>

        <hr class="featurette-divider">
    </div>
    
    <footer class="footer">
        <div class="container">
            <span class="text-muted">footer</span>
        </div>
    </footer>
	
	  <div class="modal fade" id="modal-id">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <strong>Formulario</strong>
                </div>
                <div class="modal-body">
                    <p>Formulario Enviado com Sucesso!</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
</body>

</html>