var tab = document.getElementById("tabVisu");
var i = 1;
tab.onclick = function () {
	if(i == ((this.childNodes.length)-1)) {
		var p = document.createElement("p");
		var text = document.createTextNode("Fin de la box !");
		p.appendChild(text);
		this.childNodes[3].childNodes[i].insertBefore(p, this.childNodes[3].childNodes[i].firstChild);
	}
	else {
		this.childNodes[3].childNodes[i].style.display="none";
		i+=2;
		this.childNodes[3].childNodes[i].style.display="table-row";
	}
};