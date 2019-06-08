<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title></title>
		<link rel="stylesheet" href="">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	</head>
	<body>
		<br><br>
		<div class="container">
			<input type="text" id="search" class="col-md-12">
			<table class="table" >
				<thead>
					<tr>
						<th scope="col">id</th>
						<th scope="col">nome</th>
						<th scope="col">idade</th>
						
					</tr>
				</thead>
				<tbody id="amostragem">
					
				</tbody>
			</table>
		</div>
		<script type="text/javascript" src="./assets/jquery.js"></script>
		<script>
			$(document).ready(function() {
				$.ajax({
						
					method: "POST",
					url: "alvo.php",
					dataType: "json",
						
					
				})
				.done(function(result){
					
					 valores_json = result;	
				
				});
				
				
				
				$("#search").keyup(function(){
					$("#amostragem").empty();
					var palavra_chave = $(this).val();

					$(valores_json).each(function(posicao, elemento){

						if(elemento["nome_pessoa"].match(palavra_chave)){

							$("#amostragem").append(
								$("<tr />")
									.append(
										$("<td />")
											.text(elemento["id_pessoa"])

									)
									.append(
										$("<td />")
											.text(elemento["nome_pessoa"])

									)
									.append(
										$("<td />")
											.text(elemento["idade"])

									)

							)


						}


					

					});




				});
				
							
			
			});
		</script>
	</body>
</html>