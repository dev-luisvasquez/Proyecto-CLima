<!DOCTYPE html>
<html lang="en">
<head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" href="style/app.css">
      <title>Clima</title>
</head>
<body>
      <div class="header">
            <h2>CLIMA-TIME</h2>
      </div>
      

      <div class="container">
            <div class="search">
                  <div id="msj-error"></div>
                        <label htmlfor="ciudad" >ciudad</label>
                        <input type="text" name="ciudad" id="ciudad">

                        <label htmlfor="pais">pais</label>
                         <input type="text" name="pais" id="pais">

                        <button type="button" onclick="obtenerClima()">buscar</button>

                  </div>  
            </div>

      <div class="divResultado" id="divResultado">
            
      </div>

      <div id="climas">

      </div>











      

      

      

















      <script src="js/api.js"></script>
      <script src="js/js.js"></script>
      
</body>
</html>