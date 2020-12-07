filterSelection("all")
function filterSelection(c) {
    var category, i;
    category = document.getElementsByClassName("product-item");
    if (c == "all") c = "";

    for (i = 0; i < category.length; i++){
        w3RemoveClass (category[i], "show");
        if (category[i].className.indexOf(c) > -1) w3AddClass(category[i], "show")
    }
}

function w3AddClass(element, name) {
    var i, arr1, arr2;
    arr1 = element.className.split(" ");
    arr2 = name.split(" ");
    for (i = 0; i < arr2.length; i++){
        if (arr1.indexOf(arr2[i]) == -1) {
            element.className += " " + arr2[i];
        }
    }
}

function w3RemoveClass(element, name) {
    var i, arr1, arr2;
    arr1 = element.className.split(" ");
    arr2 = name.split(" ");
    for (i = 0; i < arr2.length; i++) {
        while (arr1.indexOf(arr2[i]) > -1){
            arr1.splice(arr1.indexOf(arr2[i]), 1);
        }
    }
    element.className = arr1.join(" ");
}

var btnCategoryContainer = document.getElementById("cont-ctgr-btn");
var btns = btnCategoryContainer.getElementsByClassName("btn");
for (var i = 0; i < btns.length; i++){
    btns[i].addEventListener("click", function(){
        var current = document.getElementsByClassName("selected");
        current[0].className = current[0].className.replace(" selected", "");
        this.className += " selected";
    });
}
