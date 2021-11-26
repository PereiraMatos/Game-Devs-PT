<?php include "header.php" ?>
<!--Cover-->
    <div class="container-fluid p-0">
        <div class="hero-image">
            <div class="hero-text">
                <h1 id="header-text">Forum</h1>
                <p>
                Aqui podes aprender mais sobre o mundo da criação de jogos em
                Portugal.
                </p>
            </div>
        </div>
    </div>

    <section class="container conteudo">
        <div class="row galeria">

        <?php
        
            $sql = "SELECT * FROM galeria
                    WHERE ficheiro <> '' 
                    ORDER BY id_galeria";
            $listaRegistos = mysqli_query($ligacaoBD, $sql);
            
            while($linha = mysqli_fetch_assoc($listaRegistos)){
        
        ?>

            <div class="col-md-3 col-sm-6 galeria-item">
                <div>
                    <a href="imagens/<?=$linha['ficheiro'] ?>" data-fancybox="comida" target="_blank">
                        <img src="imagens/<?=$linha['ficheiro'] ?>" class="img-fluid">
                    </a>
                    <h5><?=$linha['titulo'] ?></h5>
                </div>
            </div>
		
		<?php
		}
		?>

        </div>

        <div class="row conteudo">
            <div class="col-12">
                <h1>Tutoriais</h1>   
            </div>
        </div>
        
        <div class="row galeria">
		
        <?php
        
            $sql = "SELECT * FROM galeria
                    WHERE ficheiro = '' AND youtube <> '' 
                    ORDER BY id_galeria DESC";
            $listaRegistos = mysqli_query($ligacaoBD, $sql);
            
            while($linha = mysqli_fetch_assoc($listaRegistos)){
        
        ?>

            <div class="col-4 galeria-item">
                <div>
                    <a href="https://www.youtube.com/watch?v=<?=$linha['youtube'] ?>" data-fancybox="video" target="_blank">
                        <img src="https://img.youtube.com/vi/<?=$linha['youtube'] ?>/0.jpg" class="img-fluid">
                    </a>
                    <h5><?=$linha['titulo'] ?></h5>
                </div>
            </div>
            
    <?php
    }
    ?>

        </div>
    </section>
<?php include "footer.php" ?>