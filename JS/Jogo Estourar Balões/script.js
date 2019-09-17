function addBola() {
    let bola = document.createElement("div")
    bola.setAttribute("class", "bola")

    let p1 = Math.floor(Math.random() * 500)
    let p2 = Math.floor(Math.random() * 400)
    let cor = gera_cor()
    
    bola.setAttribute("style", "left: " + p1 + "px; top: " + p2 + "px; background-color: "+ cor +";" )

    bola.setAttribute("onclick", "estourar(this)")

    document.body.appendChild(bola)

}

function gera_cor() {
    let hexadecimais = "0123456789ABCDEF"
    let cor = "#"
    
    for (let i = 0; i < 6; i++) {
        cor += hexadecimais[Math.floor(Math.random() * 16)]
    }
    return cor
}

function estourar(elemento) {
    document.body.removeChild(elemento)
    let placar = document.getElementById("placar")
    placar.innerHTML++

    if (placar > 5) {
        setInterval(addBola, 500)
    }

    else if (placar > 10) {
        setInterval(addBola, 200)
    }

    else if (placar > 15) {
        setInterval(addBola, 50)
    }

    
}


function iniciar() {
    setInterval(addBola, 1000)
}