<!DOCTYPE html>
<html>
<style>
body {font-family: Arial, Helvetica, sans-serif;
box-sizing: border-box;}

Set a style for all buttons 
button {
	background-color: #772953;
	color: white;
	padding: 14px 20px;
	margin: 8px 0;
	border: none;
	cursor: pointer;
	width: 100%;
	opacity: 0.3;
	}

modal__button:hover {
	opacity:1;
}

/* Float cancel and delete buttons and add an equal width */
.addbtn, .deletebtn {
	float: left;
	width: 50%;
}

/* Add a color to the cancel button */
.addbtn {
	background-color: #ccc;
	color: black;
}

/* Add a color to the delete button */
.deletebtn {
	background-color: #772953;
}

/* Add padding and center-align text to the container */
.modalcontainer {
	padding: 16px;
	text-align: center;
}/*

/* The Modal (background) */
.modal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    padding-top: 50px;
}

/* Modal Content/Box */
.modal-content {
    background-color: #fefefe;
    margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
    border: 1px solid #888;
    width: 80%; /* Could be more or less, depending on screen size */
}

/* Style the horizontal ruler */
hr {
    border: 1px solid #f1f1f1;
    margin-bottom: 25px;
}

/* The Modal Close Button (x) */
.close {
    position: absolute;
    right: 35px;
    top: 15px;
    font-size: 40px;
    font-weight: bold;
    color: #f1f1f1;
}

.close:hover,
.close:focus {
    color: #772953;
    cursor: pointer;
}

/* Clear floats */
.clearfix::after {
    content: "";
    clear: both;
    display: table;
}

/* Change styles for cancel button and delete button on extra small screens */
@media screen and (max-width: 300px) {
    .addbtn, .deletebtn {
        width: 100%;
    }
}
</style>
<body>
<button onclick="document.getElementById('id01').style.display='block'">Ajouter des statistiques:</button>

    <div id="id01" class="modal">
    <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">×</span>
    <form class="modal-content" action="/action_page.php" method="post">
        <div class="container">
        <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">×</span>
        <h1>Mettre à jour les statistiques</h1>
        <div class="row">
    <div class="col-sm-6">
        <label for="">Pays</label>
            <select id="selecteur_pays">
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
            <label for="date">Date</label>
            <input id="date" type="date" required class="form-control" name="date" value="">
        </div>    
    </div>
</div>
<div class="row">
    <div class="col-sm-6">
        <div class="form-group">
            <label for="new_cas">Nombre de nouveaux cas</label>
            <input id="new_cas" type="number" required class="form-control" name="new_cas" value="">
        </div>    
    </div>
    <div class="col-sm-6">
        <div class="form-group">
            <label for="deces">Nombre de décès</label>
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
            <button type="button" onclick="document.getElementById('id01').style.display='none'" class="addbtn">Ajouter</button>
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

</body>
</html>