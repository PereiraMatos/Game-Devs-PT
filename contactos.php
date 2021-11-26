<?php include "header.php" ?>

    <div class="container-fluid p-0">
        <div class="hero-image">
            <div class="hero-text">
                <h1 id="header-text">Contactos</h1>
                <p>
                Descobre onde estamos ou entra em contacto connosco através do formulário.
                </p>
            </div>
        </div>
    </div>

    <section class="container">
            <div class="row contactos">
                <div class="col-3 morada">
                    <div class="morada1">
                        <h4>Lisboa | Sede</h4>
                        <p>R. Luz Soriano 63 </p>
                        <p>Bairro Alto</p>
                        <p>1200-246 Lisboa</p>
                    </div>
                    <div class="morada2">
                        <h4>photo.gal@gmail.com </h4>
                        <p>+351 916236494</p>
                        <p>+351 916345664</p>
                    </div>
                </div>
                <div class="col-5">
                    <form role="form" class="row formulario" onsubmit="return changeMario();">
                        <div class="form-group">
                            <label class="form-control-label" for="form-group-input">Nome:</label>
                            <input type="text" class="form-control" id="form-group-input" name="name">
                        </div>
                        <div class="form-group">
                            <label class="form-control-label" for="form-group-input">Email:</label>
                            <input type="text" class="form-control" id="form-group-input" name="email">
                        </div>
                        <div class="form-group">
                            <label class="form-control-label" for="form-group-input">Mensagem:</label>
                            <textarea class="form-control" id="form-group-input" name="notes" rows="2"></textarea>
                        </div>
                        <div class="form-group">
                            <button class="btn float-start mt-4" id="butao" for="form-group-input">Enviar</button>
                            <img
                                id="mario"
                                src="./imagens/mario_nosubmit.png"
                                alt="mario"
                                width="80"
                                height="50"
                            />
                        </div>
                    </form>
                </div>
                <div class="col-4 mapa-base">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3113.237476560322!2d-9.147571619958024!3d38.71235644354803!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd19347f27b5e4c3%3A0xba0e79d6d706015a!2sTeatro%20do%20Bairro!5e0!3m2!1spt-PT!2spt!4v1635981481268!5m2!1spt-PT!2spt" width="300" height="300" style="border:1px;" allowfullscreen="" loading="lazy" class="image-fluid float-end mapa"></iframe>   
                </div>
            </div>
    </section>

    <script type="text/javascript" src="js/submit.js"></script>
    
<?php include "footer.php" ?>