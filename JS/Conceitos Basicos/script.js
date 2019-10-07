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

function azul() {
    limpar();
    document.getElementById("titulo").classList.add('azul');
}

function vermelho() {
    limpar();
    document.getElementById("titulo").classList.add('vermelho');
}

function verde() {
    limpar();
    document.getElementById("titulo").classList.add('verde');
}

function limpar() {
    document.getElementById("titulo").classList.remove('azul');
    document.getElementById("titulo").classList.remove('vermelho');
    document.getElementById("titulo").classList.remove('verde');
}

function mostrarTelefone(elemento) {
    document.getElementById("telefone").style.display = "block";
    elemento.style.display = "none";
}

// ARRAY
let alimentos = [
    ["Maça", "Laranja", "Mamão", "Manga"],
    ["Arroz", "Feijão", "Milho"]
];

console.log(alimentos[1][1]);

let carros = [
    'Palio',
    'Uno',
    'Corolla',
    'Ferrari'
];

// FUNÇÕES DENTRO DE UMA ARRAY
let carro = {
    nome: 'Fiat',
    modelo: 'Uno',
    peso: '800kg',
    ligado: false,
    ligar: function(){
        console.log("Ligando o "+this.modelo);
        console.log("Vrum vrum!!");
        this.ligado = true;
    },
    acelerar: function() {
        if (this.ligado == true){
            console.log("Riiiihiii");
        } else {
            console.log(this.nome+" "+this.modelo+" não está ligado!");
        }
    }
};

console.log("Modelo: "+carro.modelo);

carro.ligar();
carro.acelerar();

// OBJETOS DENTRO DE UMA ARRAY
let veiculos = [
    {nome:'Fiat', modelo:'Palio'},
    {nome:'Fiat', modelo:'Uno'},
    {nome:'Toyota', modelo:'Corolla'},
    {nome:'Ferrari', modelo:'Spider'}
];

console.log(veiculos[2].nome+" "+veiculos[2].modelo);