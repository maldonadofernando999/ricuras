$(document).ready(function(){
	var formulario = document.formulario_registro,
		elementos = formulario.elements;
	var focusInput = function() {
		this.parentElement.children[1].className = "label active";
		this.parentElement.children[0].className = this.parentElement.children[0].className.replace("error", "");
	};
	var blurInput = function() {
		if (this.value <= 0) {
			this.parentElement.children[1].className = "label";
			this.parentElement.children[0].className = this.parentElement.children[0].className + " error";
		}
	};
	for (var i = 0; i < elementos.length; i++) {
		elementos[i].addEventListener("focus", focusInput);
		elementos[i].addEventListener("blur", blurInput);
	}
});