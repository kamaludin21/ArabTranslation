// function changeLang(){
//   var btnInd = document.querySelector("#btn-ind").id;
//   var btnAr = document.querySelector("#btn-ar").id;
//
//   if (btnInd == "btn-ind") {
//
//     document.getElementById("btn-ind").className = "button is-info is-selected";
//   }
//   else if (btn) {
//
//   }
// }

document.getElementById("sourceLang").addEventListener("click", changeLangInd);

function changeLangInd(){

  var Lang = document.querySelector("#sourceLang").id;

  if (Lang == "Indonesia") {
    alert("Berhasil");
  }
  // document.getElementById("btn-ind").className = "button is-info is-selected";
  // document.getElementById("btn-ar").className = "button";
}

// document.getElementById("btn-ar").addEventListener("click", changeLangAr);
//
// function changeLangAr(){
//   document.getElementById("btn-ar").className = "button is-info is-selected";
//   document.getElementById("btn-ind").className = "button";
// }
