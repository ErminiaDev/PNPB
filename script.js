//FIRST SOLUTION: the problem with fetching the parent is that we have to go up until line 17 with <div px-5> to find a common parent






// var accordions = document.getElementsByClassName("accordion");

// function accordionFunc() {

//     for (var i = 0; i < accordions.length; i++){
//         var currentAccordion = accordions[i];
//         console.log(currentAccordion);
//         currentAccordion.addEventListener("click", function(){
//             var parent = currentAccordion.parentElement;
//             console.log(parent);
//             var content = parent.querySelector(".accordion-content");
//             console.log(content);
//             if (content.style.display === "block") {
//                 content.style.display = "none";
//             } else {
//                 content.style.display = "block"
//             }
//         })
//     }    
// };







//SECOND SOLUTION: whether I click on the first or second accordion button, it opens/closes the second accordion-content. 
//First console.logs before the event listener show loop is functioning correctly
//second console.logs show that currentAccordion and currentContent are always defind as the second accordion's elements (even when clicking on first, how is this possible??)






var accordions = document.getElementsByClassName("accordion");
var content = document.getElementsByClassName("accordion-content");

function accordionFunc() {

    for (var i = 0; i < accordions.length; i++){
        var currentAccordion = accordions[i];
        var currentContent = content[i];
        console.log(currentAccordion);
        console.log(currentContent);
        currentAccordion.addEventListener("click", function(){
            console.log(currentAccordion);
            console.log(currentContent);

            if (currentContent.style.display === "block") {
                currentContent.style.display = "none";
            } else {
                currentContent.style.display = "block"
            }
        })
    }    
};

