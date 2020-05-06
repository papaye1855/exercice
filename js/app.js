function valider() {
    let input = document.querySelectorAll("input");
    let vide = false;
    for (let i = 0; i < input.length; i++) {
        if (input[i].value.trim() == "") {
            vide = true
        }
    }
    if (vide) {
        alert("Tous les champs sont obligaoire sauf la description");
    } else {
        document.getElementById("form").submit();
    }
}