/**
 * Created by Maxime on 11/02/2016.
 */

var elements = document.getElementsByClassName("ligneCatalogue");
for(var i = 0; i < elements.length; i++) {
    elements[i].onclick = function () {
        if(this.childNodes[7].childNodes[1].childNodes[1].getAttribute("checked") == null) {
            this.style.border = "solid";
            this.style.borderColor = "red";
            this.style.borderBottomWidth = "initial";
            this.childNodes[7].childNodes[1].childNodes[1].setAttribute("checked", "checked");
        }
        else {
            this.style.border = "1px solid #d0d0d0";
            this.style.borderRight = "none";
            this.style.borderLeft = "none";
            this.childNodes[7].childNodes[1].childNodes[1].removeAttribute("checked");
        }
        //this.childNodes[4].childNodes[1].childNodes[1].setAttribute("checked", "checked");
    };
}