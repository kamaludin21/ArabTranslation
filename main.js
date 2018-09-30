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
  y.innerHTML = "INDONESIA";
}

function functionArb() {
  var y = document.getElementById("demo");
  var z = document.getElementById("btn-ar");
  y.innerHTML = "ARAB";
}
