<!DOCTYPE html>
	<html>
		<head>
			<title> Test Ajax et JQuery</title>
			<meta charset="UTF-8">
			<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8/jquery.min.js"></script>
		</head>
		
		<body>
		
			<div>
				<input id="a" type="button" value="a"/> 
				<input id="b" type="button" value="b"/>
				<input id="c" type="button" value="c"/>
			</div>
			
			<div id="monDiv" style="height:150px; width:650px;">
				Nous vous proposons de sélectionner le motif de votre demande dans le menu ci-dessous. Vous y trouverez un texte d'information qui répond aux cas fréquents rencontrés par nos utilisateurs et clients.
				Notre page d'aide en ligne est également disponible. Vous y retrouverez de nombreuses informations sur l'utilisation du site. Si vous souhaitez obtenir plus de réponse à votre question, vous pouvez détailler votre demande via le formulaire de contact, nous y apporterons une réponse sous 24 heures. Toutefois, si elle nécessite une expertise plus approfondie, ce délai peut être étendu à 6 jours ouvrés.
				Attention : notre service client est fermé les jours fériés.
			</div>
			 <script>
			 $(document).ready(function(){

					 $('#a').click(function() {
						 $.ajax({
							 async:true,
							 type : 'get',
							 url:"ajax.php?bouton=boutonA", 
								//url:"ajax.php", ==> avec méthode POST, et changer dans ajax.php GET par POST
								//type:'post',
								//data:"post=a",
							 success:function(data){
								$('#monDiv').html(data);
							 }
						 });
					});
					 $('#b').click(function() {
						 $.ajax({
							 async:true,
							 type : 'get',
							 url:"ajax.php?bouton=boutonB",
							 success:function(data){
								$('#monDiv').html(data);
							 }
						 });
					});
					$('#c').click(function() {
						 $.ajax({
							 async:true,
							 type : 'get',
							 url:"ajax.php?bouton=boutonC",
							 success:function(data){
								$('#monDiv').html(data);
							 }
						 });
					 });
				});
			 </script>
		</body>
	</html>