const kelvin = 273.15;

const obtenerClima=()=>{
      let ciudad=document.querySelector("#ciudad").value;
      let pais=document.querySelector("#pais").value;

      if(ciudad.trim()===''|| pais.trim()===''){
            mostrarError("#msj-error", "falta completar campos");
      }

      consultarAPI(ciudad,pais);
}
const consultarAPI= async(ciudad,pais)=>{
      const apiKey="404c8164efe4cda212a2e4dae35e48d2"
      const url=`https://api.openweathermap.org/data/2.5/weather?q=${ciudad},${pais}&appid=${apiKey}`;
      console.log(url);
      const respuesta = await fetch(url);
      const resultado = await respuesta.json();
      console.log(resultado);

      if(resultado.cod =="404"){
            mostrarError("#msj-error","no hay resultado");
            return;
      }

      const {name,main,sys}=resultado;
      if(!name) return null;

      let divResultado = document.querySelector("#divResultado");

      divResultado.innerHTML=`
      
      <div class="resultadoClima">
            <div class= "card">
                  <h2>${name}, ${sys.country}</h2>
                  <h1><span>${parseFloat(main.temp-kelvin,10).toFixed(2)} &#x2103;</span></h1>
                  <h3><span>Temperatura Minima: ${parseFloat(main.temp_min-kelvin,10).toFixed(2)}</span></h3>
                  <h3><span>Temperatura Maxima: ${parseFloat(main.temp_max-kelvin,10).toFixed(2)}</span></h3>
            
            </div>
      </div>
                
      `;      
}

const mostrarError=(elemento,mensaje)=>{
      divError=document.querySelector(elemento);
      divError.innerHTML=`<p>${mensaje}</p>`;
      setTimeout(()=>{divError.innerHTML=``;}, 2000);
}

//fetch('api.openweathermap.org/data/2.5/weather?q=London,uk&APPID=404c8164efe4cda212a2e4dae35e48d2')
//.then(response => response.json)
//.then(data => console.log(data))
