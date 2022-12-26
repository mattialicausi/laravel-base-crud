import './bootstrap';
import '~resources/scss/app.scss';
import * as bootstrap from 'bootstrap';
import.meta.glob([
    '../img/**'
])
let modalCollection = document.getElementsByClassName("myModal");

let btnCollection = document.getElementsByClassName("myBtn");

let spanColllection = document.getElementsByClassName("close");

let btn_close = document.getElementById("btn-close")

for(let i=0; i<btnCollection.length; i++){

    btnCollection[i].onclick = function(e) {
        e.preventDefault();
        modalCollection[i].style.display = "block";
    }

    spanColllection[i].onclick = function() {
        modalCollection[i].style.display = "none";
    }
}

window.onclick = function(event) {

    for(let i=0; i<modalCollection.length; i++){
        if (event.target == modalCollection[i] || event.target == btn_close) {
            modalCollection[i].style.display = "none";
        }
    }
}