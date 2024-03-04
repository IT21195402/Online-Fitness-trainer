var weight = parseInt(document.getElementById("weight").value);
document.getElementById("weight-val").textContent = weight + " kg";

var height = parseInt(document.getElementById("height").value);
document.getElementById("height-val").textContent = height + " cm";

var result = document.getElementById("result");

var bmi;
bmi = (weight / Math.pow((height / 100), 2)).toFixed(1);
result.textContent = bmi;


if (bmi < 18.5) {
    category = "Underweight 😒";
    result.style.color = "#ffc44d";
} else if (bmi >= 18.5 && bmi <= 24.9) {
    category = "Normal Weight 😍";
    result.style.color = "#0be881";
}

function openNav() {
    document.getElementById("mySidenav").style.width = "225px";
}

function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
}