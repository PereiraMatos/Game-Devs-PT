<?php include "header.php" ?>


    <section class="container-fluid">
        <div class="row">
            <div class="col-12 p-0">               
                <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-indicators">

                    <?php

                        $sql = "SELECT * FROM slide";
                        $listaRegistos = mysqli_query($ligacaoBD, $sql);
                        
                        $i = 1;
                        while($linha = mysqli_fetch_assoc($listaRegistos)){

                    ?>
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="<?= $i-1 ?>" <?php if($i == 1) echo ' class="active" aria-current="true"';?> aria-label="<?= $linha['titulo'] ?>"></button>
                    
                    <?php
                            $i++;
                        }
                    ?>    
                    
                    </div>
                    <div class="carousel-inner">

                        <?php

                            $sql = "SELECT * FROM slide";
                            $listaRegistos = mysqli_query($ligacaoBD, $sql);
                            
                            $i = 1;
                            while($linha = mysqli_fetch_assoc($listaRegistos)){

                        ?>


                        <div class="carousel-item<?php if($i == 1) echo " active";?>">
                            <img src="imagens/<?= $linha['ficheiro'] ?>" class="d-block w-100" alt="slide">
                            <div class="carousel-caption d-none d-md-block">
                                <h5><?= $linha['titulo'] ?></h5>
                                <p><?= $linha['descricao'] ?></p>
                                <button class="mb-5 p-2.2" id="butao">Sabe Mais</button>
                            </div>
                        </div>

                        <?php
                                $i++;
                            }
                        ?>

                    </div>

                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>      
        </div>    
    

        <div class="container destaques">

            <div class="row intro">
            <div class="col-5 intro-image">
            <img src="imagens/imagem-intro.png" alt="imagem-intro" />
            </div>
                <div class="col-6 intro-text">
                <h2>Queres saber sobre o mundo dos jogos em Portugal?</h2>
                <p>
                    Aqui descobre as
                    <ins>principais notícias, artigos e conteúdo formativo</ins> sobre a
                    <strong>indústria de jogos em Portugal.</strong> Neste site também
                    podes participar num forum onde podes expor as tuas dúvidas e
                    receberes feedback da nossa comunidade.
                </p>
                </div>
            </div>

            <div class="row conteudo">
                <div class="col-12">
                    <h1>Contributo</h1>   
                </div>
            </div>

            <div class="row">

            <?php

                $sql = "SELECT * FROM destaque";
                $listaRegistos = mysqli_query($ligacaoBD, $sql);
                while($linha = mysqli_fetch_assoc($listaRegistos)){

            ?>

                <div class="col-md-4 col-sm-6">   
                    <div class="destaques-item">
                        <i class="bi <?= $linha['icon'] ?>"></i>
                        <h3><?= $linha['titulo'] ?></h3>
                        <span><?= $linha['descricao'] ?></span>
                    </div>
                </div> 

            <?php
                }
            ?>
                
            </div>     
        </div>

        <div class="container noticias">
            <div class="row conteudo">
                <div class="col-12">
                    <h1>Notícias</h1>   
                </div>
            </div>
            <div class="row artigos">

                <?php

                    $sql = "SELECT * FROM noticia";
                    $listaRegistos = mysqli_query($ligacaoBD, $sql);
                    while($linha = mysqli_fetch_assoc($listaRegistos)){

                ?>

                <article class="col-md-4 col-sm-6">   
                    <div class="artigos-item">
                        <a href="https://www.magazine-hd.com/apps/wp/portugal-jogos-mobile-casino/">
                            <img src="imagens/<?= $linha['ficheiro'] ?>" class="img-fluid">
                        </a>
                        <h5><?= $linha['titulo'] ?></h5>
                        <span><?= $linha['descricao'] ?></span>
                    </div>
                </article>

            <?php
                }
            ?> 

            </div>     
        </div>
    </section>
<?php include "footer.php" ?>