// requête ajax POST quand submit formulaire modal d'ajout de données
$('#formulaire_ajout').submit(function(event) {
  console.log('submitted', this, event);
  event.preventDefault();
  var data = {
    new_cas: $('#new_cas').val(),
    deces: $('#deces').val(),
    guerison: $('#guerison').val(),
    date: $('#date_k').val(),
    id_pays: $('#add_pays').val()
  };
  $.ajax({
    url: 'ajax.php',
    method: 'POST',
    data: data,
    success: function() {
      alert('Les données ont bien été enregistrées.')
    },
    error: function() {
      alert('Erreur lors de l\enregistrement des données.');
    }
  });
});


// requête ajax GET quand changement selecteur de pays
$('#selectionner_pays').change(function() {
  var id_pays = $(this).val();
  var title = $(this).find(":selected").text();
  $.ajax({
    url: 'ajax.php?id=' + id_pays,
    method: 'GET',
    dataType: 'json',
    success: function(data) {
      var rows = data.map(function(cas) {
        return [
          new Date(cas.date),
          parseInt(cas.new_cas),
          parseInt(cas.deces),
          parseInt(cas.guerison)
        ];
      });
      drawChart(title, rows);
    }
  });
});


google.charts.load('current', {'packages': ['line']});

function drawChart(title, rows) {
  var data  = new google.visualization.DataTable();
  var chart = new google.charts.Line($('#line_top_x')[0]);
  data.addColumn('date', 'Date');
  data.addColumn('number', 'Nouveaux cas');
  data.addColumn('number', 'Décès');
  data.addColumn('number', 'Guérison');
  data.addRows(rows);
  chart.draw(data, google.charts.Line.convertOptions({
    chart: {
      title: 'Evolution du virus en ' + title
    },
    width: 798,
    height: 600,
    colors: ['red', 'black', 'green'],
    axes: {
      x: {
          0: { side: 'top' }
      }
    }
  }));
};
