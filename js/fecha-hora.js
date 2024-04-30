function mostrarFechaYHora() {
    var diasSemana = ["Domingo", "Lunes", "Martes", "Miércoles", "Jueves", "Viernes", "Sábado"];
    var meses = ["Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre"];
    
    var fecha = new Date();
    var diaSemana = diasSemana[fecha.getDay()];
    var dia = fecha.getDate();
    var mes = meses[fecha.getMonth()];
    var hora = fecha.getHours();
    var minutos = fecha.getMinutes();
    var segundos = fecha.getSeconds();

    // Formatear la fecha y la hora
    var fechaHora = diaSemana + " " + dia + " de " + mes + " - Hora: " + hora + ":" + minutos + ":" + segundos;

    // Mostrar la fecha y la hora en un elemento HTML con el id "fecha-hora"
    document.getElementById("fechaYHora").textContent = fechaHora;
}

// Llamar a la función para mostrar la fecha y la hora al cargar la página
window.onload = function() {
    mostrarFechaYHora(); // Llamar por primera vez
    setInterval(mostrarFechaYHora, 1000); // Actualizar cada segundo
};