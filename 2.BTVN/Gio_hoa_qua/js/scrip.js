// var jlienket = document.getElementById("lienket");
// var jvungchua = document.getElementById("vungchua");

// jlienket.addEventListener("click", hamGiDo);

// function hamGiDo() {
//     var phanTuMoi = document.createElement("h1");
//     phanTuMoi.textContent = "Giá trị";

//     jvungchua.appendChild(phanTuMoi);
// }
document.getElementById("btnShowFruit").innerHTML = "My First JavaScript";
var jfruit = document.getElementById("txtFruit");
var jshowFruit = document.getElementById("btnShowFruit");
var jimgs = document.getElementsByTagName("img");

jshowFruit.addEventListener("click", hamGiDo);

function hamGiDo() {
    if (jfruit.value == "") {
        alert("Bạn chưa nhập giá trị");
    } else {
        var friutList = ['banana', 'orange', 'apple'];
    }

}