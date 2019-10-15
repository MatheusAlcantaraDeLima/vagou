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
    
        <script type="text/javascript">
            var lat;
            var long;
            if(navigator.geolocation){
                navigator.geolocation.getCurrentPosition(showPosition);
            }else{
                window.alert('Seu navegador não suporta  ageolocalização.');
            }
            function showPosition(position){
                lat = position.coords.latitude;
                long = position.coords.longitude;
                //teste para verificar as coordenadas
                console.log(`Latidute ${lat}, Longitude ${long}`);
                var map = new ol.Map({
                    target: 'map',
                    layers: [
                        new ol.layer.Tile({
                            source: new ol.source.OSM()
                        })
                    ],
                    view: new ol.View({
                        //CORRIGIR O ERRO DE COORDENADAS, ESTÁ INDO PARA UM LOCAL TOTALMENTE DIFERENTE DA LOCALIZAÇÃO DO DISPOSITIVO
                        center: ol.proj.fromLonLat([ long, lat]),
                        zoom: 11
                    })
                });
            }
    </script>
    </div>
</body>
</html>