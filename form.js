document.querySelector("#submit").addEventListener("click", e => {
  e.preventDefault();

  //INGRESE UN NUMERO DE WHATSAPP VALIDO AQUI:
  const telefono = "5610181667";
//Todos los datos ingresados se guardaran aqui
  const cliente = document.querySelector("#cliente").value;
  const fecha = document.querySelector("#fecha").value;
  const hora = document.querySelector("#hora").value;
  const empleado = document.querySelector("#empleado").value;
  const producto = document.querySelector("#productos").value;
  const resp = document.querySelector("#respuesta");

  resp.classList.remove("fail");
  resp.classList.remove("send");
//Te manda al numero de whassapp valido ingresado
//Se muestran las variables ingresadas que guardan la informacion
  const url = `https://api.whatsapp.com/send?phone=$5610181667}&text=
		*Cotizaciones de*%0A
		*Productos*%0A%0A
		*¿Cuál es tu nombre?*%0A
		${cliente}%0A
		*Indica la fecha de tu llamada de cotización*%0A
		${fecha}%0A
		*Indica la hora de tu llamada de cotización*%0A
		${hora}%0A
		*Teléfono de contacto*%0A
		${empleado}%0A
		*Productos para su cotización*%0A
		${producto}`;

  if (cliente === "" || fecha === "" || hora === "") {
    resp.classList.add("fail");
    resp.innerHTML = `Faltan algunos datos ${cliente}`;
    return false;
  }
	//mensaje de que se envio correctamente la informacion
  resp.classList.remove("fail");
  resp.classList.add("send");
  resp.innerHTML = `Se ha enviado tu reserva ${cliente}`;

  window.open(url);
});
