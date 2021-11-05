var editor;

window.onload = function () {
    editor = ace.edit("editor");
    editor.setTheme("ace/theme/monokai");
    editor.session.setMode("ace/mode/");

};

function  changeLanguage() {

    let language = $("#languages").val();

    if(language =='c' || language == 'cpp')editor.session.setMode("ace/mode/c_cpp");
    else if (language == 'php')editor.session.setMode("ace/mode/php");
    else if (language == 'python')editor.session.setMode("ace/mode/python");
    else if (language == 'node')editor.session.setMode("ace/mode/node");


};
function executeCode() {

    $path = "./compiler.php";

    $.ajax({

        url: $path,

        method:"POST",

        data:{
            language: $("#languages").val(),
            code: editor.getSession().getValue()
        },

        success: function(response){
            $("#output").text(response)
        }
    })
}
var loader = document.querySelector(".loader");
window.addEventListener("load",vanish);
function vanish(){
    setTimeout(function () {
        loader.classList.add("disapper");

    },1000)

}



