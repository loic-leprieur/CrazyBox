var tab = document.getElementById("tabVisu");
var i = 1;
tab.onclick = function () {

	console.log(i);
	console.log(this.childNodes.length -1);


	if(i == ((this.childNodes.length))) {

		this.childNodes[3].childNodes[i].style.display="none";

		var p = document.createElement("h3");
		var text = document.createTextNode("Fin de la box !");
		p.className="orange-text text-darken-4 center-align";

		var p2 = document.createElement("h3");
		var text2 = document.createTextNode("Nous espérons que vous avez apprécié votre pochette !");
		p2.className="orange-text text-darken-4 center-align";

		p.appendChild(text);
		p2.appendChild(text2);

		this.childNodes[3].appendChild(p);
		this.childNodes[3].appendChild(p2);

	}else {

		this.childNodes[3].childNodes[i].style.display="none";
		i+=2;
		this.childNodes[3].childNodes[i].style.display="table-row";
	}
};