var isRed = false

// function changeColor
function changeColor() {
    // verwijst naar het document index.html. dan de body van de html. dan de style van de body (ofterwijl de css) en dan pakt hij de backgroundcolor van de body en zet hem naar red.
    if (isRed) {
        document.body.style.backgroundColor = "red";
        isRed = false
    }
    else {
        document.body.style.backgroundColor = "white";
        isRed = true
    }
}   