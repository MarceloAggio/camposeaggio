const menuItens = document.querySelectorAll('.nav-item a[href^="#"]');

menuItens.forEach(item => {
    item.addEventListener('click', scrollToIdOnClick);
})


function scrollToIdOnClick(event) {
    event.preventDefault();
    const element = event.target;
    const id = element.getAttribute('href');
    const to = document.querySelector(id).offsetTop;


    window.scroll({
        top: to - 40,
        behavior: "smooth"

    });
}

const menu = document.querySelectorAll('.nave a[href^="#"]');

menu.forEach(item => {
    item.addEventListener('click', scrollToIdOnClick);
})


function scrollToIdOnClick(event) {
    event.preventDefault();
    const element = event.target;
    const id = element.getAttribute('href');
    const to = document.querySelector(id).offsetTop;


    window.scroll({
        top: to - 40,
        behavior: "smooth"

    });
}