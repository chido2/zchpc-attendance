var yearButton = document.getElementById("yearButton");
var yearDropdown = document.getElementById("yearDropdown");
var yearSelect = document.getElementById("yearSelect");

// Event listener for year button click
yearButton.addEventListener("click", function() {
    yearDropdown.style.display = "block";
});

// Event listener for year select change
yearSelect.addEventListener("change", function() {
    var selectedYear = yearSelect.value;
    yearButton.textContent = selectedYear;
    yearDropdown.style.display = "none";
});