<!DOCTYPE html>
<html lang="en">
<head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" href="style/app.css">
      <link href="https://unpkg.com/ionicons@4.5.10-0/dist/css/ionicons.min.css" rel="stylesheet">
      <title>Clima</title>
</head>
<body>
      <div class="container">
            <div class="search">
                  <div id="msj-error"></div>
                  
                  <label htmlfor="pais">País</label>
                  <i  class="icon ion-md-map"></i>
                  <input type="text" name="pais" id="pais">

                  <label htmlfor="ciudad" >Ciudad</label>
                  <i class="icon ion-md-pin"></i>
                  <input type="text" name="ciudad" id="ciudad">

                  <button type="button" onclick="obtenerClima()">Buscar</button>

            
                  <div class="divResultado" id="divResultado"></div>
                  <div id="climas"></div>
            </div>
            
      </div>
      











      

      

      

















      <script src="js/api.js"></script>
      <script src="js/js.js"></script>
      
</body>
</html>