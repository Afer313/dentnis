//Header menu animation
let menuFraq1 = document.querySelector('#menuFraq1');
let menuFraq2 = document.querySelector('#menuFraq2');
let menuFraq3 = document.querySelector('#menuFraq3');
let menuFraq4 = document.querySelector('#menuFraq4');
let li_keeper1 = document.querySelector('#li_keeper1');
let li_keeper2 = document.querySelector('#li_keeper2');
let li_keeper3 = document.querySelector('#li_keeper3');
let li_keeper4 = document.querySelector('#li_keeper4');

menuFraq1.addEventListener('mouseout', function () {
    hideLiKeepers();
});
menuFraq2.addEventListener('mouseout', function () {
    hideLiKeepers();
});
menuFraq3.addEventListener('mouseout', function () {
    hideLiKeepers();
});
menuFraq4.addEventListener('mouseout', function () {
    hideLiKeepers();
});

menuFraq1.addEventListener('mouseover', function () {
    li_keeper1.style.display = 'block';
    li_keeper2.style.display = 'none';
    li_keeper3.style.display = 'none';
    li_keeper4.style.display = 'none';
    menuFraq1.classList.add('menuFraq_active');
    menuFraq2.classList.remove('menuFraq_active');
    menuFraq3.classList.remove('menuFraq_active');
    menuFraq4.classList.remove('menuFraq_active');
    li_keeper1.style.opacity = 1;
    li_keeper2.style.opacity = 0;
    li_keeper3.style.opacity = 0;
    li_keeper4.style.opacity = 0;
});
menuFraq2.addEventListener('mouseover', function () {
    li_keeper1.style.display = 'none';
    li_keeper2.style.display = 'block';
    li_keeper3.style.display = 'none';
    li_keeper4.style.display = 'none';
    menuFraq1.classList.remove('menuFraq_active');
    menuFraq2.classList.add('menuFraq_active');
    menuFraq3.classList.remove('menuFraq_active');
    menuFraq4.classList.remove('menuFraq_active');
    li_keeper1.style.opacity = 0;
    li_keeper2.style.opacity = 1;
    li_keeper3.style.opacity = 0;
    li_keeper4.style.opacity = 0;
});
menuFraq3.addEventListener('mouseover', function () {
    li_keeper1.style.display = 'none';
    li_keeper2.style.display = 'none';
    li_keeper3.style.display = 'block';
    li_keeper4.style.display = 'none';
    menuFraq1.classList.remove('menuFraq_active');
    menuFraq2.classList.remove('menuFraq_active');
    menuFraq3.classList.add('menuFraq_active');
    menuFraq4.classList.remove('menuFraq_active');
    li_keeper1.style.opacity = 0;
    li_keeper2.style.opacity = 0;
    li_keeper3.style.opacity = 1;
    li_keeper4.style.opacity = 0;
});
menuFraq4.addEventListener('mouseover', function () {
    li_keeper1.style.display = 'none';
    li_keeper2.style.display = 'none';
    li_keeper3.style.display = 'none';
    li_keeper4.style.display = 'block';
    menuFraq1.classList.remove('menuFraq_active');
    menuFraq2.classList.remove('menuFraq_active');
    menuFraq3.classList.remove('menuFraq_active');
    menuFraq4.classList.add('menuFraq_active');
    li_keeper1.style.opacity = 0;
    li_keeper2.style.opacity = 0;
    li_keeper3.style.opacity = 0;
    li_keeper4.style.opacity = 1;
});

function hideLiKeepers() {
    li_keeper1.style.display = 'none';
    li_keeper2.style.display = 'none';
    li_keeper3.style.display = 'none';
    li_keeper4.style.display = 'none';
    menuFraq1.classList.remove('menuFraq_active');
    menuFraq2.classList.remove('menuFraq_active');
    menuFraq3.classList.remove('menuFraq_active');
    menuFraq4.classList.remove('menuFraq_active');
    li_keeper1.style.opacity = 0;
    li_keeper2.style.opacity = 0;
    li_keeper3.style.opacity = 0;
    li_keeper4.style.opacity = 0;
}

