/**
 * Created by Maxime on 11/02/2016.
 */

var elements = document.getElementsByClassName("ligneCatalogue");
for(var i = 0; i < elements.length; i++) {
    elements[i].onclick = function () {
        console.log(this.childNodes[7].childNodes[1].childNodes[1].getAttribute("checked"));
        if(this.childNodes[7].childNodes[1].childNodes[1].getAttribute("checked") == null) {
            this.style.borderStyle = "solid";
            this.style.borderColor = "red";
            this.childNodes[7].childNodes[1].childNodes[1].setAttribute("checked", "checked");
        }
        else {
            this.style.borderStyle = "none";
            this.childNodes[7].childNodes[1].childNodes[1].removeAttribute("checked");
        }
        //this.childNodes[4].childNodes[1].childNodes[1].setAttribute("checked", "checked");
    };
}