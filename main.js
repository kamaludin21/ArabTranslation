var header = document.getElementById("divBtn");
var btns = header.getElementsByClassName("button");
for (var i = 0; i < btns.length; i++) {
  btns[i].addEventListener("click", function() {
    var current = document.getElementsByClassName("is-info is-selected");
    if (current.length > 0) {
      current[0].className = current[0].className.replace(" is-info is-selected", "");
    }
    this.className += " is-info is-selected";

  });
}

function functionInd() {
  var x = document.getElementById("btn-ind");
  var y = document.getElementById("demo");
  var x2 = document.getElementById("btn-ind2");
  var z2 = document.getElementById("btn-ar2");
  document.getElementById("textareaLang").name = "id";

  x2.classList.remove("is-info");
  z2.classList.add("is-info");

  y.innerHTML = "INDONESIA";
}

function functionArb() {
  var y = document.getElementById("demo");
  var z = document.getElementById("btn-ar");
  var x2 = document.getElementById("btn-ind2");
  var z2 = document.getElementById("btn-ar2");
  document.getElementById("textareaLang").name = "ar";

  x2.classList.add("is-info");
  z2.classList.remove("is-info");

  y.innerHTML = "ARAB";
}
