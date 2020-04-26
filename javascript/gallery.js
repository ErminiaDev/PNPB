//////////////// IMAGE GALLERY ON PRODUCTS PAGE //////////////////////////

// fetching all the images with a query selector, will be stored as an array
let galleryImages = document.querySelectorAll(".gallery-img");
// defining a variable that will be equal to the latest opened image
let getLatestOpenedImg;
//defining a variable that will fetch the browser's current window's width
let windowWidth = window.innerWidth;

// checking if there actually are any images
if (galleryImages) {
    //we define an argument called image for the forEach function, it matches the individual images inside the galleryImages array
    //we define an argument called index which gives the position inside the galleryImages array (0, 1, 2, 3...)
    galleryImages.forEach(function (image, index) {
        image.onclick = function () {
            //getComputedStyle() will get the styles inside the CSS files whilst getInlineStyle() gets the HTML inline style
            let getElementCss = window.getComputedStyle(image);
            //we want to fetch one specific property inside of these computed styles
            let getFullImgUrl = getElementCss.getPropertyValue("background-image");
            //we want to split the given url to take out what is unnecessary
            let getImgUrlPos = getFullImgUrl.split("/images/PRODUITS/thumbs/");
            //we take out the )" out of the second item of the split array because it is unneccesary
            let SetNewImgUrl = getImgUrlPos[1].replace('")', '');

            //we define the variable getLatestOpenedImg as being the index + 1 so that it makes more sense to is than javascript enumeration
            getLatestOpenedImg = index + 1;

            //this is where the full image will appear
            let container = document.body;
            //we want to create a new div at the end of the html
            let newImgWindow = document.createElement("div");
            //we want it to be a child element of the body
            container.appendChild(newImgWindow);
            //setting a class of .img-window that is going to be defined in the CSS file
            newImgWindow.setAttribute("class", "img-window");
            //setting an attribute of onclick with a function
            newImgWindow.setAttribute("onclick", "closeImg()");

            //creating an img element 
            let newImg = document.createElement("img");
            //putting it inside the div we just created
            newImgWindow.appendChild(newImg);
            //setting a source attribute to the image and giving the right path
            newImg.setAttribute("src", "images/PRODUITS/" + SetNewImgUrl);
            newImg.setAttribute("id", "current-img");


            newImg.onload = function(){
                
                //defining variables that will help place the button properly no matter what the width of the image is
                let imgWidth = this.width;
                // let calcImgToEdge = ((windowWidth - imgWidth) / 2) - 80;
                let imgToEdge = 10;

                // creating a left navigation arrow
                //creating an anchor tag
                newPrevBtn = document.createElement("a");
                //inside of it an i tag for font awesome
                PrevBtnFa = document.createElement("i");
                //attributing font awesome classes as well as another class to style the button
                PrevBtnFa.setAttribute("class", "fas fa-arrow-circle-left img-btn-fa-prev");
                //attributing a class to style the parent anchor element
                newPrevBtn.setAttribute("class", "img-btn-prev");
                //adding a function to change the image when clicking on the button
                newPrevBtn.setAttribute("onclick", "changeImg(0)");
                //making the i child of the a
                newPrevBtn.appendChild(PrevBtnFa);
                //making the a child of the body
                container.appendChild(newPrevBtn);
                //adding a property to CSS to place the button properly
                newPrevBtn.style.cssText = "left: " + imgToEdge + "vw";

                // creating a right navigation arrow
                newNextBtn = document.createElement("a");
                NextBtnFa = document.createElement("i");
                NextBtnFa.setAttribute("class", "fas fa-arrow-circle-right img-btn-fa-next");
                newNextBtn.setAttribute("class", "img-btn-next");
                newNextBtn.setAttribute("onclick", "changeImg(1)");
                newNextBtn.appendChild(NextBtnFa);
                container.appendChild(newNextBtn);
                newNextBtn.style.cssText = "right: " + imgToEdge + "vw";

            }
                
        }
    });
}

//function for closing slider on click
function closeImg() {
    //removing the image and buttons on click
    document.querySelector(".img-window").remove();
    document.querySelector(".img-btn-prev").remove();
    document.querySelector(".img-btn-next").remove();

}

//function for previous and next buttons
function changeImg(changeDir) {
    //first remove the current image
    document.querySelector("#current-img").remove();

    //and procede same as above, adding an image to the div
    let getImgWindow = document.querySelector('.img-window');
    let newImg = document.createElement("img");
    getImgWindow.appendChild(newImg);

    let calcNewImg;
    //if we click on the next button
    if(changeDir === 1) {
        //go to the next image
        calcNewImg = getLatestOpenedImg + 1;
        //unless you are on the last one, in this case go back to the first
        if(calcNewImg > galleryImages.length) {
            calcNewImg = 1
        } 
    //if we click on the previous button
    } else if (changeDir === 0) {
        //go to the previous image
        calcNewImg = getLatestOpenedImg - 1;
        //unless this is the first one, in this case go back to the last
        if(calcNewImg < 1) {
            //which is equal to galleryImages.length
            calcNewImg = galleryImages.length;
        } 
    }

    //setting the right attributes to the new image
    newImg.setAttribute("src", "images/PRODUITS/img" + calcNewImg + ".jpg");
    newImg.setAttribute("id", "current-img");
    console.log(newImg);

    //defining the latest opened image as the new image's number
    getLatestOpenedImg = calcNewImg;

    //copy-pasting previous code so that once the image loads the buttons are replaced properly with the new image's width
    newImg.onload = function(){
        let imgWidth = this.width;
        let imgToEdge = 10;

        let nextBtn = document.querySelector('.img-btn-next');
        nextBtn.style.cssText = "right: " + calcImgToEdge + "vw";

        let prevBtn = document.querySelector('.img-btn-prev');
        prevBtn.style.cssText = "left: " + calcImgToEdge + "vw";
    }
}

var galleryImageWidth = document.getElementsByClassName()