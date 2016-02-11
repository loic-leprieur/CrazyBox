var tab = document.getElementById("tabVisu");
var i = 1;
tab.onclick = function () {
	console.log(this.childNodes[3]);
	this.childNodes[3].childNodes[i].style.display="none";
	i+=2;
	this.childNodes[3].childNodes[i].style.display="table-row";
};