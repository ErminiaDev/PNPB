// var selected = document.querySelectorAll(".dropdown-item");
// var dropdownTitle = document.querySelector("#dropdownMenuButton");

// selected.forEach(item => {
//     item.addEventListener('click', event => {
//         dropdownTitle.innerText = item.innerText;
//         dropdownTitle.value = item.innerText;
//     });
// });


var reservationSpec = document.querySelector('#reservationSpec');
var numberLabel = document.querySelector('#numberLabel');
var numberInput = document.querySelector('#numberInput');
var dropdown = document.querySelector("#dropdownMenuButton")

var firstContact = document.querySelector("#firstContact")
var reservation = document.querySelector("#reservation")


reservation.addEventListener('click', function(){
    reservationSpec.style.display = "block";
    numberLabel.style.display = "block";
    numberInput.style.display = "block";
});

firstContact.addEventListener('click', function(){
    reservationSpec.style.display = "none";
    numberLabel.style.display = "none";
    numberInput.style.display = "none";
});



var headerLink = document.querySelector("#resaLink");

headerLink.addEventListener('click', function(){
    dropdownTitle.innerText = reservation.innerText;
    dropdownTitle.value = reservation.innerText;
    reservationSpec.style.display = "block";
    numberLabel.style.display = "block";
    numberInput.style.display = "block";
})
// var options = document.querySelectorAll("option");
// console.log(options);
// console.log(dropdown.options[dropdown.selectedIndex].value)
// if(dropdown.options[drodpdown.selectedIndex].value == "reservation"){
//     reservationSpec.style.display = "block";
//     numberLabel.style.display = "block";
//     numberInput.style.display = "block";
// }

// if(dropdown.options[drodpdown.selectedIndex].value == "prisedecontact"){
//     reservationSpec.style.display = "none";
//     numberLabel.style.display = "none";
//     numberInput.style.display = "none";
// }
// console.log(dropdown);
// dropdown.addEventListener('change', function(){
//     reservationSpec.style.display = (this.selectedIndex == 1) ? "block" : "none";
//     numberLabel.style.display = (this.selectedIndex == 1) ? "block" : "none";
//     numberInput.style.display = (this.selectedIndex == 1) ? "block" : "none";
// });

