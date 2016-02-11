/**
 * Created by Maxime on 11/02/2016.
 */

var elements = document.getElementsByClassName("ligneCatalogue");
for(var i = 0; i < elements.length; i++) {

    elements[i].onclick = function (event) {


        var mode = (event.target.nodeName);

        if (mode == "TD") {


        if (this.childNodes[7].childNodes[1].childNodes[1].getAttribute("checked") == null) {
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

    }

    };


  elements[i].childNodes[7].childNodes[1].childNodes[3].onclick = function (event){


      elem = this.parentNode.parentNode.parentNode;
      var mode = (event.target.nodeName);

      if (mode == "LABEL") {

          console.log(elem.childNodes[7].childNodes[1].childNodes[1].getAttribute("checked"));

          if (elem.childNodes[7].childNodes[1].childNodes[1].getAttribute("checked") == null) {
              elem.style.border = "solid";
              elem.style.borderColor = "red";
              elem.style.borderBottomWidth = "initial";
              this.setAttribute("checked", "checked");

          } else {

              elem.style.border = "1px solid #d0d0d0";
              elem.style.borderRight = "none";
              elem.style.borderLeft = "none";
              this.removeAttribute("checked");
          }

      }
    }

}