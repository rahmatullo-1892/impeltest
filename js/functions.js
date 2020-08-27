let elements = document.getElementsByClassName("edit");

let myFunction = function() {
    let id = this.attributes.getNamedItem("id").value;
    let value = this.attributes.getNamedItem("name").value;
    let input = document.getElementById("name");
    input.value = value;
    let form = document.getElementsByTagName("form");
    form[0].setAttribute("action", "/impeltest/public/index.php/update/" + id);
};

for (let i = 0; i < elements.length; i++) {
    elements[i].addEventListener('click', myFunction, false);
}