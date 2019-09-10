// Comentários
// var nome = "Gilberto"

function mudarHtml(nome, idade){
    var area = document.getElementById("area")
    var texto = prompt("Qual seu sobrenome?")

    area.innerHTML = nome + " " + texto + " tem " + idade + " anos."
}

function adicionarIngredientes() {
    let ing = document.getElementById("ingredientes").value
    let listahtml = document.getElementById("lista").innerHTML

    listahtml = listahtml + "<li>" + ing + "</li>"

    document.getElementById("lista").innerHTML = listahtml

}

function adicionarNome() {
    let nome = document.getElementById("nome").value
    let tabela = document.getElementById("tabelaNomes").innerHTML

    tabela = tabela + "<tr><td>" + nome + "</td></tr>"

    document.getElementById("tabelaNomes").innerHTML = tabela
}

function somar() {
    let campo1 = Number(document.getElementById("campo1").value)
    let campo2 = Number(document.getElementById("campo2").value)

    var soma = campo1 + campo2
    alert(soma)
}

function verificar() {
    let x = prompt("Informe um número: ")

    if (x > 10) {
        alert("É maior que 10!")
    } else {
        alert("Não é maior que 10!")
    }
}

function listarNumeros() {
    let lista = document.getElementById("listaNumeros").innerHTML
    let numero = prompt("Infome um número de 1 a 20: ")
    
    if (numero > 20 || numero == 0) {
        alert("Número fora o intervalo solicitado.")
    } else {
        for (let cont = 1; cont <= numero; cont++) {
            lista = lista + "<td>" + cont + "</td>"
            document.getElementById("listaNumeros").innerHTML = lista
        }
    }

    
}