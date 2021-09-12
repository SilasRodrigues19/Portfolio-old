const typedTextSpan = document.querySelector(".typed-text");
const cursorSpan = document.querySelector(".cursor");

const textArray = ["Web Developer", "Programador", "Free Lancer"];
const typingDelay = 50;
const erasingDelay = 50;
const newTextDelay = 2000; // Delay between current and next text
let textArrayIndex = 0;
let charIndex = 0;


/* Data Words */
function type() {
    if (charIndex < textArray[textArrayIndex].length) {
        if (!cursorSpan.classList.contains("typing")) cursorSpan.classList.add("typing");
        typedTextSpan.textContent += textArray[textArrayIndex].charAt(charIndex);
        charIndex++;
        setTimeout(type, typingDelay);
    } else {
        cursorSpan.classList.remove("typing");
        setTimeout(erase, newTextDelay);
    }
}

function erase() {
    if (charIndex > 0) {
        if (!cursorSpan.classList.contains("typing")) cursorSpan.classList.add("typing");
        typedTextSpan.textContent = textArray[textArrayIndex].substring(0, charIndex - 1);
        charIndex--;
        setTimeout(erase, erasingDelay);
    } else {
        cursorSpan.classList.remove("typing");
        textArrayIndex++;
        if (textArrayIndex >= textArray.length) textArrayIndex = 0;
        setTimeout(type, typingDelay + 1100);
    }
}

document.addEventListener("DOMContentLoaded", function() { // On DOM Load initiate the effect
    if (textArray.length) setTimeout(type, newTextDelay + 250);
});


/* Tooltip alert */
$(document).ready(function() {
    $('[data-toggle="tooltip"]').tooltip();
});


/* Loader */
window.onload = displayContent;

let loader;

// Add animation after the page loaded
function displayContent() {
    loader.style.display = 'none';
    //$(".infoText, .cta, .arrayText").addClass('infoAnimation')
    $('.home .container').addClass('infoAnimation');
}

/* Add warning when the user tries to access mail.php by URL */
let buttonMailAlert = document.getElementById('btnsection');
let mailAlert = document.getElementById('psection');

if (mailAlert != null) { /* Avoid null variable error when the user doesn't try to access by URL */
    buttonMailAlert.addEventListener('click', function() {
        mailAlert.style.display = 'none';
    });
}

document.addEventListener("DOMContentLoaded", function() {
    loader = document.getElementById('loader');
});

const menu = document.querySelector('.header .nav-bar .nav-list .menu');
const mobile_menu = document.querySelector('.header .nav-bar .nav-list ul');
const menu_item = document.querySelectorAll('.header .nav-bar .nav-list ul li a');
const header = document.querySelector('.header.container');

const scrollToTop = document.querySelector('#smoothScroll');
const social = document.querySelector('.social');
const rightButton = document.querySelector('.rightButton')


menu.addEventListener('click', () => {
    menu.classList.toggle('active');
    mobile_menu.classList.toggle('active');

    // Improving accessibility for visually impaired people
    if (mobile_menu.classList.contains('active')) {
        menu.setAttribute('aria-expanded', 'true');
        menu.setAttribute('aria-label', 'Fechar Menu');
    } else {
        menu.setAttribute('aria-expanded', 'false');
        menu.setAttribute('aria-label', 'Abrir Menu');
    }
});

document.addEventListener('scroll', () => {
    let scroll_position = window.scrollY;
    if (scroll_position > 100) {
        $(header).css('backgroundColor', '#111');
    } else {
        $(header).css('backgroundColor', 'transparent');
    }

    if (scroll_position < 600) {
        $(scrollToTop).css('opacity', '0');
        $(social).css({ 'visibility': 'hidden', 'opacity': '0', 'pointer-events': 'none' });
        $(rightButton).css({ 'visibility:': 'hidden', 'opacity': '0' });
    } else {
        $(scrollToTop).css('opacity', '1');
        $(social).css({ 'visibility': 'visible', 'opacity': '1', 'pointer-events': 'auto' });
        $(rightButton).css({ 'visibility:': 'visible', 'opacity': '1' });
    }

});

menu_item.forEach((item) => {
    item.addEventListener('click', () => {
        menu.classList.toggle('active');
        mobile_menu.classList.toggle('active');
        // Fix Menu Error
        if (!mobile_menu.classList.contains('active')) {
            $('#hamburger').prop("checked", false);
        } else {
            $('#hamburger').prop("checked", true);
        }
    });
});



const textArea = document.querySelector('#mensagem');
const count = document.querySelector('.count');

textArea.addEventListener("keyup", e => {
    textArea.style.height = "auto";

    let scrollHeight = e.target.scrollHeight;

    textArea.style.height = `${ scrollHeight }px`;
});


function countLetters() {
    const text = textArea.value;
    const textLength = textArea.value.length;
    count.innerText = `${ textLength }`;

    if (textLength >= 1500) {
        $('.count').addClass('error');
    } else {
        $('.count').removeClass('error');
    }
}