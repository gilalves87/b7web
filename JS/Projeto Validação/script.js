function validar() {
    var valor = document.getElementById("numero").value
    if (valor.length > 2 || valor.length == -1) {
        alert("Digite um número conforme solicitado.")
        return false
    } else {
        alert("Enviado com sucesso!")
        return true
    }
}