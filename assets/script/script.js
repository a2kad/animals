let type = document.getElementById("type")
let dog = document.getElementById("dog")
let cat = document.getElementById("cat")
type.addEventListener("change", () => {
    if (type.value == "1") {
        cat.style.display = "block";
        dog.style.display = "none";
    } else if (type.value == "2") {
        dog.style.display = "block";
        cat.style.display = "none";
    } else {
        cat.style.display = "none";
        dog.style.display = "none";
    }
})



