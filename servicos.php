<?php include "header.php" ?>

<!--Cover-->
    <div class="container-fluid p-0">
        <div class="hero-image">
            <div class="hero-text">
                <h1 id="header-text">Estúdios / Vagas</h1>
                <p>
                Descobre os Estúdios portugueses e muitas das vagas!
                </p>
            </div>
        </div>
    </div>

    <section class="container conteudo">
        <div class="destaques">
            <div class="row destaques-base">

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

        <div class="row conteudo">
            <div class="col-12">
                <h1>Estúdios</h1>   
            </div>
        </div>

        <div class="container estudios"> 
            <div class="row">
                <table class="table table-stripped table-hover">
                    <thead>
                        <tr>
                            <th scope="col">Estúdio</th>
                            <th scope="col">Cidade</th>
                            <th scope="col">Website</th>
                            <th scope="col">Categorias</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row" colspan="3">A</th>
                        </tr>
                        <tr>
                            <td rowspan="2">AfterYou</td>
                            <td>Lisboa</td>
                            <td rowspan="2">
                                <a href="http://www.afteryou.pt/">
                                    <div>
                                            http://www.afteryou.pt/
                                    </div>
                                </a>
                            </td>
                            <td rowspan="2">
                                <i class="bi bi-controller"></i>
                                <i class="bi bi-window-plus"></i>
                            </td>
                        </tr>
                        <tr>
                            <td>Faro</td>
                        </tr>
                            <tr>
                                <th scope="row" colspan="3">B</th>
                            </tr>
                        <tr>
                            <td>Battlesheep</td>
                            <td>Lisboa</td>
                            <td>
                                <a href="https://battlesheep.com/">
                                    <div>
                                        https://battlesheep.com/
                                    </div>
                                </a>
                            </td>
                            <td rowspan="2">
                                <i class="bi bi-controller"></i>
                            </td>
                        </tr>
                        </tr>
                        <tr>
                            <th scope="row" colspan="3">C</th>
                        </tr>
                        <tr>
                            <td>Camel 101</td>
                            <td>Lisboa</td>
                            <td>
                                <a href="http://www.camel101.com/">
                                    <div>
                                        http://www.camel101.com/
                                    </div>
                                </a>
                            </td>
                            <td rowspan="2">
                                <i class="bi bi-controller"></i>
                                <i class="bi bi-window-plus"></i>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row" colspan="3">D</th>
                        </tr>
                        <tr>
                            <td>DreamStudios</td>
                            <td>Online</td>
                            <td>
                                <a href="http://www.dreamstudios.pt/">
                                    <div>
                                        <del>http://www.dreamstudios.pt/</del>
                                    </div>
                                </a>
                            </td>
                            <td rowspan="2">
                                <i class="bi bi-controller"></i>
                                <i class="bi bi-dice-5"></i>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row" colspan="3">E</th>
                        </tr>
                        <tr>
                            <td>Edigma</td>
                            <td>Online</td>
                            <td>
                                <a href="http://www.edigma.com/">
                                    <div>
                                        http://www.edigma.com/
                                    </div>
                                </a>
                            </td>
                            <td rowspan="2">
                                <i class="bi bi-controller"></i>
                                <i class="bi bi-window-plus"></i>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row" colspan="3">F</th>
                        </tr>
                        <tr>
                            <td rowspan="2">Fun Punch</td>
                            <td rowspan="2">Lisboa</td>
                            <td>
                                <a href="http://funpunchgames.com/">
                                    <div>
                                        http://funpunchgames.com/
                                    </div>
                                </a>
                            </td>
                            <td rowspan="2">
                                <i class="bi bi-controller"></i>
                                <i class="bi bi-badge-vr"></i>
                                <i class="bi bi-window-plus"></i>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <a href="https://www.facebook.com/funpunchgames">
                                    <div>
                                        facebook.com/funpunchgames
                                    </div>
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row" colspan="3">H</th>
                        </tr>
                        <tr>
                            <td rowspan="2">Headless Studio</td>
                            <td>Lisboa</td>
                            <td rowspan="2">
                                <a href="http://headless.com/">
                                    <div>
                                        http://headless.com/
                                    </div>
                                </a>
                            </td>
                            <td rowspan="2">
                                <i class="bi bi-controller"></i>
                                <i class="bi bi-badge-vr"></i>
                            </td>
                        </tr>
                        <tr>
                            <td>Porto</td>
                        </tr>
                        <tr>
                            <th scope="row" colspan="3">L</th>
                        </tr>
                        <tr>
                            <td>Lisbon Labs</td>
                            <td>Lisboa</td>
                            <td>
                                <a href="http://apps.lisbonlabs.com/">
                                    <div>
                                        http://apps.lisbonlabs.com/
                                    </div>
                                </a>
                            </td>
                            <td rowspan="2">
                                <i class="bi bi-controller"></i>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row" colspan="3">M</th>
                        </tr>
                        <tr>
                            <td>Miniclip Portugal</td>
                            <td>Lisboa</td>
                            <td>
                                <a href="https://www.miniclip.com/games/pt">
                                    <div>
                                        https://www.miniclip.com/
                                    </div>
                                </a>
                            </td>
                            <td rowspan="2">
                                <i class="bi bi-controller"></i>
                                <i class="bi bi-badge-vr"></i>
                                <i class="bi bi-window-plus"></i>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row" colspan="3">N</th>
                        </tr>
                        <tr>
                            <td>Nerd Monkeys</td>
                            <td>Lisboa</td>
                            <td>
                                <a href="http://www.nerdmonkeys.pt/">
                                    <div>
                                        http://www.nerdmonkeys.pt/
                                    </div>
                                </a>
                            </td>
                            <td rowspan="2">
                                <i class="bi bi-controller"></i>
                                <i class="bi bi-window-plus"></i>
                            </td>
                        </tr>
                    <tfoot>
                        <tr>
                            <td colspan="3"><b>Legenda:</b> O rasurado, significa que não
                                <br> encontrei indícios de ainda estarem activos! 
                                <br><b>Update:</b> 29/Setembro/2021<br><br>
                                <i class="bi bi-controller"> Videogames </i>
                                <i class="bi bi-badge-vr"> Virtual Reality </i>
                                <i class="bi bi-dice-5"> Board Games </i>
                                <i class="bi bi-window-plus"> Web/Apps </i>
                            </td>
                        </tr>
                    </tfoot>
                    </tbody>
                </table>
            </div>
        </div>

        <div class="row conteudo">
            <div class="col-12">
                <h1>Vagas</h1>   
            </div>
        </div>

        <div class="container vagas">        
            <div class="row d-flex justify-content-center">
                <div class="list-group col-10">
                    <a href="#" class="list-group-item list-group-item-action flex-column align-items-start active">
                        <div class="d-flex w-100 justify-content-between">
                        <h5 class="mb-1">UX / UI Designer</h5>
                        <small>2 dias</small>
                        </div>
                        <p class="mb-1">A nerd Monkeys está a contratar um UX / UI Designer para o estúdio em Lisboa.</p>
                        <small>Nerd Monkeys - Lisboa</small>
                    </a>
                    <a href="#" class="list-group-item list-group-item-action flex-column align-items-start">
                        <div class="d-flex w-100 justify-content-between">
                        <h5 class="mb-1">Unity Dev</h5>
                        <small class="text-muted">3 dias</small>
                        </div>
                        <p class="mb-1">Precisamos de um Unity Dev Senior para um novo projecto. Oferecemos contrato de trabalho com opção para trabalho remoto.</p>
                        <small class="text-muted">Fun Punch - Remoto</small>
                    </a>
                    <a href="#" class="list-group-item list-group-item-action flex-column align-items-start">
                        <div class="d-flex w-100 justify-content-between">
                        <h5 class="mb-1">3D Generalista</h5>
                        <small class="text-muted">1 semana</small>
                        </div>
                        <p class="mb-1">Se 3D é a tua praia e adoras projectos ambiciosos na áreas dos videojogos, então envia o teu CV.</p>
                        <small class="text-muted">Funcom - Lisboa</small>
                    </a>
                    <a class="d-flex justify-content-center mt-4" href="#">
                        <button class="mt-4" id="butao" >Mais Vagas</button>
                    </a>
                </div>
            </div>     
        </div>
    </section>
<?php include "footer.php" ?>