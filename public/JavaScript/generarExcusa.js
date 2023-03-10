function generarExcusa(){

    let excusas = [
    "Lo siento, llegué tarde porque habia mucho tráfico",
    "No pude hacer los deberes porque mi perro se los comió"

    ];

    let excusaGenereda = excusas[Math.floor(Math.random()*excusas.length)];

    let escribirExcusa = document.getElementById("excusa");
    escribirExcusa.textContent = excusaGenereda;

}