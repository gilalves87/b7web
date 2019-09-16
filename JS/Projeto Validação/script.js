function validar() {
    var valor = document.getElementById("numero").value
    if (valor.length > 2) {
        alert("Você digitou um número com mais de 2 dígitos")
        return false
    } else {
        alert("Enviado com sucesso!")
        return true
    }
}