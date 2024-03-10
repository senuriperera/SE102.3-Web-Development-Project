function toggleDatalist(checkboxId, inputId, datalistId) {
    var checkbox = document.getElementById(checkboxId);
    var datalist = document.getElementById(datalistId);
    var input = document.getElementById(inputId);

    if (checkbox.checked) {
        input.setAttribute("list", datalistId);
        input.style.display = "inline-block"; // Show the input field
    } else {
        input.removeAttribute("list");
        input.style.display = "none"; // Hide the input field
    }
}