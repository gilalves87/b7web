function mudarIcone() {
    let simbolo = document.querySelector(".simbolo")
    let check = document.querySelector("#check")

    if (check.checked) {
        simbolo.innerHTML = "+"
    } else {
        simbolo.innerHTML ="-"
    }
}

$(document).ready(function(){
    
    // Variaveis locais
    var _containerBtn = $(".jbtn-voltar")
    var _btnLink = $(".btn-voltar-link")

    // Mostra o botão voltar ao topo
    $(window).scroll(function(){
        if($(this).scrollTop() > 70){
            _containerBtn.fadeIn(0)
        } else {
            _containerBtn.fadeOut(0)
        }
    })


    // Clique e volte ao topo
    _containerBtn.click(function(){
        $("html, body").animate({scrollTop: 0}, 800)

        return false
    })
    

})
