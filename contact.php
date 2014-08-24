<html lang="en">

<?php 
    $nom = $_POST['nom'];
    if (empty($nom))
        print("y aaaaa rien ");

?>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>BAZART</title>

    <!-- Bootstrap core CSS -->
    <link href="bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="jumbotron-narrow.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="bootstrap/assets/js/ie-emulation-modes-warning.js"></script>

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="bootstrap/assets/js/ie10-viewport-bug-workaround.js"></script>

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body role="document">

 <div> <?php include('header.php'); ?> 
    </div>

 <div class="jumbotron">
        <h1>Anne-Sophie</h1>
        <p class="lead">media interaction design, Ecal student<br> 
        in Lausanne, Switzerland<br> </p>
        <form  role= "form" method="post" action="contact.php">
            <div class= "form-group">
                <label for="inputName" class="col-sm-2 control-label">Nom : </label> 
                <input id= "inputName" placeholder="Nom" class="form-control" name="nom" ></input>
            </div>
             <div class= "form-group">
                <label for="inputMail" class="col-sm-2 control-label">Email : </label> 
                <input id= "inputMail" placeholder="Mail" class="form-control"></input>
            </div>
             <div class= "form-group">
                <label for="inputSubject" class="col-sm-2 control-label">Subject : </label>               
                <input id= "inputSubject" placeholder="Subject" class="form-control"></input>            
            </div>
             <div class= "form-group">
                <label for="inputMessage" class="col-sm-2 control-label"> Message :</label>            
                <textarea class="form-control" rows="3" id= "inputMessage"></textarea>             
             </div>
            <input type="submit" class="btn btn-xs btn-info" role="button"></input>
        </form>



 </div>




<!--elements dynamiques -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="bootstrap/assets/js/docs.min.js"></script>
    
  </body>


</html>

