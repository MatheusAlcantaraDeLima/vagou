<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!--Adicionado CDN do Bootstrap-->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/openlayers/openlayers.github.io@master/en/v6.0.1/css/ol.css" type="text/css">
    <style>
      .map {
        height: 600px;
        width: 100%;
      }
    </style>
    <script src="https://cdn.jsdelivr.net/gh/openlayers/openlayers.github.io@master/en/v6.0.1/build/ol.js"></script>
    <!--Pega a localização do aparelho-->
    <script>
        var btn = document.getElementById('btn');
            btn = document.addEventListener('click', fnPosicao);
            function fnPosicao(){
                if(navigator.geolocation){
                    navigator.geolocation.getCurrentPosition(showPosition);
                }else{
                    window.alert('Seu navegador não suporta  ageolocalização.');
                }
            }
            function showPosition(position){
                window.alert(`Latidute ${position.coords.latitude}, Longitude ${position.coords.longitude}`);
            }
    </script>
    <title>VaGou!</title>
</head>
<body>
    <div class="container">
        <?php
			include_once("menuFuncoes.php");
		?>
        <hr>
        <h2 style="text-align: center;">Mapa</h2>
        <div id="map" class="map"></div>
        <input type="button"  class="btb btn-primary" value="Onde estou" id="btn">
        <script type="text/javascript">
            var map = new ol.Map({
                target: 'map',
                layers: [
                    new ol.layer.Tile({
                        source: new ol.source.OSM()
                    })
                ],
                view: new ol.View({
                    center: ol.proj.fromLonLat([ -43.15, -22.9]),
                    zoom: 13
                })
            });
    </script>
    </div>
</body>
</html>