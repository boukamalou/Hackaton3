// requête ajax POST quand submit formulaire modal d'ajout de données
$('#formulaire_ajout').submit(function(event) {
  event.preventDefault();
  $.ajax({
    url: 'ajax.php',
    method: 'POST',
    dataType: 'json',
    data: {
      id_cas: $('#id_cas').val(),
      new_cas: $('#new_cas').val(),
      deces: $('#deces').val(),
      guerison: $('#guerison').val(),
      date: $('#date').val(),
      id_pays: $('#selecteur_pays').val()
    },
    success: function(data) {
      console.log('POST success', data);
      // TODO ? message de  confirmation
    }
  });
});


// requête ajax GET quand changement selecteur de pays
$('#selecteur_pays').change(function() {
  var id_pays = $(this).val();
  $.ajax({
    url: 'ajax.php?id=' + id_pays,
    method: 'GET',
    dataType: 'json',
    success: function(data) {
      console.log('GET success', data);
      // TODO créer et afficher le graphique
    }
  });
});