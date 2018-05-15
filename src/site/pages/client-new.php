<!doctype html>
<html lang="fr">
    <head>
    
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="Daily Print">
        <meta name="keywords" content="HTML,CSS, PHP, JavaScript">
        <meta name="author" content="Daily Print TEAM">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
		
		<!-- My css -->
        <link rel="stylesheet" href="../css/style.css">      

        <title>Daily Print | Nouvelle demande</title>
        
    </head>
    <body>
    
        <!-- Navbar -->
		<nav class="nav nav-pills nav-justified navbar-dark bg-dark">
		  <a class="nav-item nav-link" href="client-visual.php">Mes demandes</a>
		  <a class="nav-item nav-link active" href="client-new.php">Nouvelle demande</a>
		  <a class="nav-item nav-link" href="client-param.php">Paramètres</a>
		  <a class="nav-item nav-link" href="../index.php">Se déconnecter</a>
		</nav>
        
		<content class="container" role="main">
		
            <div class="row">
                <div class="col-xs-2 col-sm-2 col-md-4 col-lg-4"></div>
                <div class="col-xs-8 col-sm-8 col-md-4 col-lg-4">
                    <img src="../img/logo.png" class="img-fluid" alt="Responsive image" />
                </div>
                <div class="col-xs-2 col-sm-2 col-md-4 col-lg-4"></div>
            </div>
			
            <br/>
			
            <div class="row ">
                <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2"></div>
				
                <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8 panel">
				
                    <legend class="color-blue">Nouvelle demande : </legend>
					
					<form method="POST" action="../scripts/newDemande.php">
					
						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
					
							<legend class="color-blue">Informations générales : </legend>

							
							<div class="form-row">
								<div class="col">
									<label for="inputDate">Date de retour souhaitée :</label>
									<input type="date" class="form-control" id="inputDate" placeholder="jj/mm/aaaa" required>
								</div>
								<div class="col">
									<label for="inputFile">Fichier a imprimer (.pdf) : </label>
									<input type="file" id="inputFile" required>
								</div>
							</div>
							
							<br/>
							
							<div class="form-row">
								<div class="col">
									<label for="inputNbCopies">Nombre de copies :</label>
									<input type="number" min="0" class="form-control" id="inputNbCopies" placeholder="0" required>
								</div>
								<div class="col">
									<label for="inputTypeCopies">Impressions : </label>
									<select class="form-control" id="inputTypeCopies" required>
										<option>Noir et blanc</option>
										<option>Couleurs</option>
									</select>
								</div>
							</div>
							
							<br/>
							
							<div class="form-row">
								<div class="col">
									<label for="inputFinition">Finition : </label>
									<select class="form-control" id="inputFinition" required>
										<option>Aucune finition</option>
										<option>1 agraphe</option>
										<option>2 agraphes</option>
										<option>Livret</option>
										<option>Pliage</option>
										<option>Massicot</option>
									</select>
								</div>
								<div class="col">
									<label for="inputRecto">Recto/verso : </label>
									<select class="form-control" id="inputRecto" name="champRectoVerso" required>
										<option>Recto et verso</option>
										<option>Recto uniquement</option>
									</select>
								</div>
							</div>
							
						</div>
						
						<br/>
						
						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
					
							<legend id="protectedPublicationTitle" class="color-blue">Publication protégée (optionnelle) : </legend>
						
							<div id="protectedPublication" style="display: none;">
								<div class="form-row">
									<div class="col">
										<label for="inputTitre">Titre de la publication :</label>
										<input type="text" class="form-control" id="inputTitre" placeholder="Titre">
									</div>
								</div>
								
								<br/>
								
								<div class="form-row">
									<div class="col">
										<label for="inputAuteur">Auteur :</label>
										<input type="text" class="form-control" id="inputAuteur" placeholder="Auteur" >
									</div>
									<div class="col">
										<label for="inputEditeur">Editeur : </label>
										<input type="text" class="form-control" id="inputEditeur" placeholder="Editeur" >
									</div>
								</div>
								
								<br/>
								
								<div class="form-row">
									<div class="col">
										<label for="inputNbPages">Nombre de pages copiées :</label>
										<input type="number" min="0" class="form-control" id="inputNbPages" placeholder="0">
									</div>
									<div class="col">
										<label for="inputNbExemplaires">Nombre d'éxemplaires par page : </label>
										<input type="number" min="0" class="form-control" id="inputNbExemplaires" placeholder="0">
									</div>
								</div>
							</div>
							
						</div>
						
						<br/>
						
						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
						
							<legend class="color-blue">Validation : </legend>
							
							<button type="submit" class="btn btn-primary">Envoyer la demande</button>
							
						</div>
						
					</form>
					
				</div>
				
				<div class="col-xs-2 col-sm-2 col-md-2 col-lg-2"></div>
			</div>
			
		</content>




        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
        
		<!-- JS to hide 'Publications protégées' -->
		<script type="text/javascript" src="../js/client-new.js"></script>
        
    </body>
</html>
