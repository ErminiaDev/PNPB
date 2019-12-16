//////////////////// ACCORDION//////////////////

document.querySelectorAll('.accordion').forEach(item => {
    item.addEventListener('click', event => {
        var parent = item.closest('.accordion-wrapper');
        var content = parent.querySelector('.accordion-content');
        var button = parent.querySelector('.accordion');

        button.classList.toggle('is-open');

        console.log(button);

        if (content.style.maxHeight) {

            content.style.maxHeight = null;
            content.style.color = 'transparent';


        } else {

            content.style.maxHeight = content.scrollHeight + "px";
            content.style.color = 'black';
            button.style.content = 'f056'
        }
    })
})

document.querySelectorAll('.accordion-2').forEach(item => {
    item.addEventListener('click', event => {
        var parent = item.closest('.accordion-wrapper-2');
        var content = parent.querySelector('.accordion-content-2');
        var button = parent.querySelector('.accordion-2');

        button.classList.toggle('is-closed');

        console.log(button);

        if (content.style.maxHeight === 255 + "px") {
            console.log("accordion was open");
            content.style.maxHeight = 0 + "px";
            content.style.color = 'transparent';


        } else {
            console.log("accordion was closed");
            content.style.maxHeight = 255 + "px";
            content.style.color = 'black';
            button.style.content = 'f056'
        }
    })
})
