<?php
?>
<!doctype html>
<html lang="en">
    <head>
        <title>Graphique</title>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href="style.css" />
    </head>
    
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item dropdown">
                        <select class="dropdown-item" id ="selectionner_pays">
                            <option class="dropdown-item" value="1">Chine</option>
                            <option class="dropdown-item" value="2">Usa</option>
                            <option class="dropdown-item" value="3">France</option>
                            <option class="dropdown-item" value="4">Allemagne</option>
                            <option class="dropdown-item" value="5">Royaume-Uni</option>
                            <option class="dropdown-item" value="6">Italie</option>
                            <option class="dropdown-item" value="7">Turquie</option>
                            <option class="dropdown-item" value="8">Algérie</option>
                            <option class="dropdown-item" value="9">Tunisie</option>
                            <option class="dropdown-item" value="10">Maroc</option>
                            <option class="dropdown-item" value="11">Congo</option>
                            <option class="dropdown-item" value="12">Mali</option>
                            <option class="dropdown-item" value="13">Afrique du Sud</option>
                            <option class="dropdown-item" value="14">Australie</option>
                            <option class="dropdown-item" value="15">Brésil</option>
                            <option class="dropdown-item" value="16">Mexique</option>
                        </select>
                    </li>
                </ul>
            </div>

            <button onclick="document.getElementById('id01').style.display='block'">Ajouter des statistiques</button>

            <div id="id01" class="modal">
            <form id="formulaire_ajout" class="modal-content" method="post">
                <div class="container">
                <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">×</span>
                <h1>Mettre à jour les statistiques</h1>
                <div class="row">
            <div class="col-sm-6">
                <label for="add_pays">Pays</label>
                    <select id="add_pays">
                        <option value="13">Afrique du sud</option>
                        <option value="8">Algérie</option>
                        <option value="4">Allemagne</option>
                        <option value="14">Australie</option>
                        <option value="15">Brésil</option>
                        <option value="1">Chine</option>
                        <option value="11">Congo</option>
                        <option value="3">France</option>
                        <option value="6">Italie</option>
                        <option value="12">Mali</option>
                        <option value="10">Maroc</option>
                        <option value="16">Mexique</option>
                        <option value="5">Royaume-Uni</option>
                        <option value="9">Tunisie</option>
                        <option value="7">Turquie</option>
                        <option value="2">USA</option>
                    </select>
                </div>

            <div class="col-sm-6">
                <div class="form-group">
                    <label for="date_k">Date:</label>
                    <input id="date_k" type="date" required class="form-control" name="date_k" value="">
                </div>    
            </div>
            </div>
            <div class="row">
            <div class="col-sm-6">
                <div class="form-group">
                    <label for="new_cas">Nombre de nouveaux cas:</label>
                    <input id="new_cas" type="number" required class="form-control" name="new_cas" value="">
                </div>    
            </div>
            <div class="col-sm-6">
                <div class="form-group">
                    <label for="deces">Nombre de décès:</label>
                    <input id="deces" type="number" required class="form-control" name="deces" value="">
                </div>    
            </div>
            </div>
            <div class="form-group">
            <div class="form-group">
                    <label for="guerison">Nombre de guérison:</label>
                    <input id="guerison" type="number" required class="form-control" name="guerison" value="">
                </div> 
            </div>

                <div class="clearfix">
                    <button type="submit" id="ajouter" onclick="document.getElementById('id01').style.display='none'" class="addbtn">Ajouter</button>
                </div>
                </div>
            </form>
            </div>

            <script>
            // Get the modal
            var modal = document.getElementById('id01');

            // When the user clicks anywhere outside of the modal, close it
            window.onclick = function(event) {
            if (event.target == modal) {
            modal.style.display = "none";
            }
            }
            </script>
        </nav>
    </head>
    <body>
                <div id="line_top_x"></div>



        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
        <script src="script.js"></script>
    </body>
</html>