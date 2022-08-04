var anchors=document.getElementsByTagName("a");
var icon=document.getElementById('click');


function openNav(){
        var list=document.getElementById("List");
        list.classList.toggle("show");
      //  anchors.Style.display="flex";



        if (icon.classList.contains("fa-bars")){
            icon.classList.replace("fa-bars","fa-times");
        }
        else{
            icon.classList.replace("fa-times","fa-bars");

        }


}
