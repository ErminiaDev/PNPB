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

