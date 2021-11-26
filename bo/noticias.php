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
                <h1>Notícias</h1>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-4 bg-fundo-soft p-3">

            <?php
                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    $uploadOk = 1;
                    $titulo = $_POST["titulo"];
                    $descricao = $_POST["descricao"];
                    $ficheiro = basename($_FILES["ficheiro"]["name"]);

                    if ($titulo == "") {
                        echo "Falta o título";
                        $uploadOk = 0;
                    }
                    if ($ficheiro == "") {
                        echo "Falta o ficheiro";
                        $uploadOk = 0;
                    }
                    if ($descricao == "") {
                        echo "Falta a descricao";
                        $uploadOk = 0;
                    }
                    
                    if($uploadOk == 1){
                                
                        $target_dir = "../imagens/upload/";
                        $target_file = $target_dir . basename($_FILES["ficheiro"]["name"]);
                        
                        $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
                        // Check if image file is a actual image or fake image
                        if(isset($_POST["submit"])) {
                            $check = getimagesize($_FILES["ficheiro"]["tmp_name"]);
                            if($check !== false) {
                                echo "File is an image - " . $check["mime"] . ".";
                                $uploadOk = 1;
                                } else {
                                echo "File is not an image.";
                                $uploadOk = 0;
                            }
                        }
                    
                    
                        // Check if file already exists
                        if (file_exists($target_file)) {
                            echo "Sorry, file already exists.";
                            $uploadOk = 0;
                        }
                        
                        // Check file size
                        if ($_FILES["ficheiro"]["size"] > 500000) {
                            echo "Sorry, your file is too large.";
                            $uploadOk = 0;
                        }			
                        
                        // Allow certain file formats
                        if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif" && $imageFileType != "webp" ) {
                            echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
                            $uploadOk = 0;
                        }
                        
                    }
                    // Check if $uploadOk is set to 0 by an error
                    if ($uploadOk == 0) {
                        echo "Sorry, your file was not uploaded.";
                        // if everything is ok, try to upload file
                        } else {
                        if (move_uploaded_file($_FILES["ficheiro"]["tmp_name"], $target_file)) {
                            
                            $sql = "INSERT INTO noticia (titulo, descricao, ficheiro)
                            VALUES ('$titulo', '$descricao', '$ficheiro')";
                            
                            if(mysqli_query($ligacaoBD, $sql)){
                                echo "The file ". htmlspecialchars( basename( $_FILES["ficheiro"]["name"])). " has been uploaded.";
                                } else {
                                echo "ERRO: " . mysqli_error($ligacaoBD);
                            }				
                            
                            } else {
                            echo "Sorry, there was an error uploading your file.";
                        }
                    }
                    
                }
                
            ?>


                <form class="bo-form" action="noticias.php" method="POST" enctype="multipart/form-data">
                    
                    <label for="titulo">Título</label><br>
                    <input type="text" name="titulo"><br>

                    <label for="descricao">Descrição</label><br>
                    <textarea name="descricao"></textarea><br>

                    <label for="ficheiro">Imagem</label><br>
                    <input type="file" name="ficheiro"><br>

                    <input id="butao" type="submit" value="Enviar">
                    
                </form>
                


            </div>
        </div>
    </section>
<?php include "footer.php" ?>