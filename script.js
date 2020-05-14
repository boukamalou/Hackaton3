// requête ajax POST quand submit formulaire modal d'ajout de données
$('#formulaire_ajout').submit(function(event) {
  console.log('submitted', this, event);
  event.preventDefault();
  var data = {
    //id_cas: $('#id_cas').val(),
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
    success: function(data) {
      console.log('POST success', data);
      // TODO ? message de confirmation
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


function drawLineChart(data, options) {
  var chart = new google.charts.Line(document.getElementById('TODO_ID_ELEMENT__GRAPHIQUE'));
  chart.draw(data, google.charts.Line.convertOptions(options));

};

// ---8<---

google.charts.load('current', {'packages': ['line']});
google.charts.setOnLoadCallback(drawChart);

function _drawChart() {
  var data = new google.visualization.DataTable();
  data.addColumn('number', 'Heures');
  data.addColumn('number', 'Nouveaux cas');
  data.addColumn('number', 'Cas mortel');
  data.addColumn('number', 'Cas remis');
  data.addRows([
      [1,  37.8, 80.8, 41.8],
      [2,  30.9, 69.5, 32.4],
      [3,  25.4,   57, 25.7],
      [4,  11.7, 18.8, 10.5],
      [5,  11.9, 17.6, 10.4],
      [6,   8.8, 13.6,  7.7],
      [7,   7.6, 12.3,  9.6],
      [8,  12.3, 29.2, 10.6],
      [9,  16.9, 42.9, 14.8],
      [10, 12.8, 30.9, 11.6],
      [11,  5.3,  7.9,  4.7],
      [12,  6.6,  8.4,  5.2],
      [13,  4.8,  6.3,  3.6],
      [14,  4.2,  6.2,  3.4]
  ]);
  var options = {
      chart: {
        title: 'Nom du pays consulté',
        subtitle: 'Nombre de cas'
      },
      width: 900,
      height: 500,
      axes: {
        x: {
            0: { side: 'top' }
        }
      }
  };
  var chart = new google.charts.Line(document.getElementById('line_top_x'));
  chart.draw(data, google.charts.Line.convertOptions(options));
}