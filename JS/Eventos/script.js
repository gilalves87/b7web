function apertouMouse() {
    console.log("Apertou o mouse!")
}

function soltouMouse() {
    console.log("Soltou o mouse!")
}

function mouseEmCima() {
    console.log("Mouse em cima!")
}

function mouseSaiuDeCima() {
    console.log("Mouse saiu de cima!")
}

function moveuMouse() {
    console.log("Mouse foi movido!")
}

function clicou() {
    console.log("Clicou")
}

function botaoDireito() {
    console.log("Botão direito")
    return false
}

function cliqueDuplo() {
    console.log("Clique duplo")
}

// EVENTOS TECLADO
function apertouTecla(event) {
    console.log("Apertou tecla: " + event.keyCode)
}

function soltouTecla(event) {
    console.log("Soltou tecla: " + event.keyCode)
}

function pressionouTecla(event) {
    if(event.shiftKey == true && event.keyCode == 69) {
        console.log("Pressionou tecla shift + E ")
    }
}

function digitou(e){
    if(e.keyCode == 13 && e.ctrlKey == true){ // Se Crtl + Entrer for pressionado
        texto = document.getElementById("campo").value

        console.log(texto)
    }
}

// Eventos de página
function carregou() {
    alert("Página carregada!")
}

// Eventos de formulário
function mudouOpcao(cidade) {
    console.log("Selecionou: " + cidade.value)
}

function focou() {
    console.log("Focou no campo 1")
}

function desfocou() {
    console.log("Desfocou do campo 1")
}