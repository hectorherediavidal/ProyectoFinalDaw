function generarExcusa(){

    let excusas = [
    "Lo siento, llegué tarde porque habia mucho tráfico",
    "No pude hacer los deberes porque mi perro se los comió",
    "Se me rompio el coche de camino, por lo que llegaré tarde hoy",
    "Me encantaría ayudar, pero tengo muchisimo trabajo",
    "Tuve un problema de salud inesperado, asi que no hice el trabajo",
    "Perdí mi teléfono y no pude comunicarme contigo"

    ];

    let excusaGenereda = excusas[Math.floor(Math.random()*excusas.length)];

    let escribirExcusa = document.getElementById("excusa");
    escribirExcusa.textContent = excusaGenereda;

}