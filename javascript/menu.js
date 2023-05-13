document.getElementById("btn-open").addEventListener("click",open_close);
var body = document.getElementById("body");
var menu_side = document.getElementById("side");
var btn = document.getElementById("btn-open");
function open_close(){
    body.classList.toggle("body2");
    menu_side.classList.toggle("menu2");

}