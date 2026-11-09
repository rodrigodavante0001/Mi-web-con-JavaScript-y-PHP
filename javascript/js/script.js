// =========================================================
//  Práctica 4 — JavaScript                                =
//  Nombre y apellidos: Rodrigo Delgado Romero             =
// =========================================================

// ===== A1. Mi tarjeta =====
document.getElementById("saludo").innerHTML = "Hola, me llamo Rodrigo Delgado Romero y estudio 2º SMR";
document.getElementById("tarjeta").style.color = "white";
document.getElementById("tarjeta").style.backgroundColor = "navy";


// ===== A2. Lista de la compra =====
function anadir() {
    // Busca en la página el cuadro de texto y lo guarda en la variable caja
    var caja = document.getElementById("producto");

    // Crea una etiqueta <li> nueva y vacía. Todavía no se ve en la página.
    var nuevo = document.createElement("li");

    // Crea un texto con lo que has escrito en el cuadro
    var texto = document.createTextNode(caja.value);

    // Mete el texto dentro del <li>. Ahora está: <li>leche</li>, pero sigue sin verse
    nuevo.appendChild(texto);

    // Busca la lista (<ul id="lista">) y mete el <li> dentro, al final. Aquí ya se añade a la página
    document.getElementById("lista").appendChild(nuevo);

    // Vacía el cuadro de texto para que se pueda escribir otra cosa
    caja.value = "";
}


// ===== A3. Modo noche y modo día =====
function modoNoche() {
    document.body.style.backgroundColor = "black";
    document.body.style.color = "white";
    document.getElementById("modo").innerHTML = "Modo noche activado";
}

function modoDia() {
    document.body.style.backgroundColor = "white";
    document.body.style.color = "black";
    document.getElementById("modo").innerHTML = "Modo día activado";
}


// ===== A4. Colores de la tarjeta =====
function colorTarjeta(color) {
    document.getElementById("tarjeta").style.backgroundColor = color;
}


// ===== A5. Botón que saluda =====
function saludar() {
    alert("Hola, soy Rodrigo Delgado Romero");
    document.getElementById("botonSaludo").style.backgroundColor = "orange";
}