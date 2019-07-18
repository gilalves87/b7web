var slideItem = 0;
window.onload = function(){
	// colorir bolinha inicial com vermelho
	document.getElementsByClassName("bolinha")[0].style.backgroundColor = "red";

	setInterval(passarSlide, 4000);

	var slidewidth = document.getElementById("slideshow").offsetWidth;
	var objs = document.getElementsByClassName("slide");
	for (var i in objs) {
		objs[i].style.width = slidewidth + 'px';
	}
}
function passarSlide(){
	var slidewidth = document.getElementById("slideshow").offsetWidth;
	
	if(slideItem >= 3){
		slideItem = 0;
	}else{
		slideItem++;
	}

	document.getElementsByClassName("slideshowarea")[0].style.marginLeft = "-"+(slidewidth * slideItem)+"px";
	// colorir bolinhas cinza e mudar para vermelho de acordo com o índice
	document.getElementsByClassName("bolinha")[0].style.backgroundColor = "#CCC";
	document.getElementsByClassName("bolinha")[1].style.backgroundColor = "#CCC";
	document.getElementsByClassName("bolinha")[2].style.backgroundColor = "#CCC";
	document.getElementsByClassName("bolinha")[3].style.backgroundColor = "#CCC";
	document.getElementsByClassName("bolinha")[slideItem].style.backgroundColor = "red";

}
function mudarSlide(pos){
	slideItem = pos;
	var slidewidth = document.getElementById("slideshow").offsetWidth;
	document.getElementsByClassName("slideshowarea")[0].style.marginLeft = "-"+(slidewidth * slideItem)+"px";
	// colorir bolinhas cinza e mudar para vermelho de acordo com o clique
	document.getElementsByClassName("bolinha")[0].style.backgroundColor = "#CCC";
	document.getElementsByClassName("bolinha")[1].style.backgroundColor = "#CCC";
	document.getElementsByClassName("bolinha")[2].style.backgroundColor = "#CCC";
	document.getElementsByClassName("bolinha")[3].style.backgroundColor = "#CCC";
	document.getElementsByClassName("bolinha")[pos].style.backgroundColor = "red";

}

function toggleMenu() {
	var let = document.getElementById('menu')

	if (menu.style.display === 'none' || menu.style.display == '') {
		menu.style.display = 'block'
	} else {
		menu.style.display = 'none'
	}
}