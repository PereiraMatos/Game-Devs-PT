<?php include "header.php" ?>

	<div class="container-fluid p-0">
        <div class="hero-image-bo">
            <div class="hero-text">
                <h1 id="header-text">BACK OFFICE</h1>
            </div>
        </div>
    </div>
				
	<section class="container conteudo">
		<div class="row">
			<div class="col-12">
				<h1>Destaques</h1>
			</div>
		</div>
		<div class="row justify-content-center">
			<div class="col-4 bg-fundo-soft p-3">

			<?php
				if ($_SERVER["REQUEST_METHOD"] == "POST") {
					$uploadOk = 1;
					$titulo = $_POST["titulo"];
					$descricao = $_POST["descricao"];
					$ficheiro = $_POST["ficheiro"];

					if ($titulo == "") {
						echo "Falta o título";
						$uploadOk = 0;
					}
					if ($ficheiro == "") {
						echo "Falta o icon";
						$uploadOk = 0;
					}
					if ($descricao == "") {
						echo "Falta a descricao";
						$uploadOk = 0;
					}
					
					if($uploadOk == 1){
								
						$sql = "INSERT INTO destaque (titulo, descricao, ficheiro)
							VALUES ('$titulo', '$descricao', '$ficheiro')";
		
							if(mysqli_query($ligacaoBD, $sql)){
								echo "Sucesso";
								} else {
								echo "ERRO: " . mysqli_error($ligacaoBD);
							}				
					}
					
				}
				
			?>


				<form class="bo-form" action="destaques.php" method="POST" enctype="multipart/form-data">
					
					<label for="titulo">Título</label><br>
					<input type="text" name="titulo"><br>

					<label for="descricao">Descrição</label><br>
					<textarea name="descricao"></textarea><br>

					<label for="ficheiro">Icon</label><br>
					<input type="text" name="ficheiro"><br>

					<input id="butao" type="submit" value="Enviar">
					
				</form>
				


			</div>
		</div>
	</section>
<?php include "footer.php" ?>