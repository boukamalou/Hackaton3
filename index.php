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
    </head>
    <body>
        <nav> 
            <select id="selection_pays">
                    <option value="1">Chine</option>
                    <option value="2">Usa</option>
                    <option value="3">France</option>
                    <option value="4">Allemagne</option>
                    <option value="5">Royaume-Uni</option>
                    <option value="6">Italie</option>
                    <option value="7">Turquie</option>
                    <option value="8">Algérie</option>
                    <option value="9">Tunisie</option>
                    <option value="10">Maroc</option>
                    <option value="11">Congo</option>
                    <option value="12">Mali</option>
                    <option value="13">Afrique du Sud</option>
                    <option value="14">Australie</option>
                    <option value="15">Brésil</option>
                    <option value="16">Mexique</option>
            </select>
        </nav>

        <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

        <script type="text/javascript">
        google.charts.load('current', {'packages':['line']});
        google.charts.setOnLoadCallback(drawChart);

        function drawChart() {

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
                0: {side: 'top'}
            }
            }
        };

        var chart = new google.charts.Line(document.getElementById('line_top_x'));

        chart.draw(data, google.charts.Line.convertOptions(options));
        }
    </script>
    </head>
    <body>
    <div id="line_top_x"></div>

        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </body>
</html>