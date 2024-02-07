let menuFun1 = document.querySelector('#menuFun1');
let menuFun2 = document.querySelector('#menuFun2');
let menuFun3 = document.querySelector('#menuFun3');
let menuFun4 = document.querySelector('#menuFun4');
let menuFun5 = document.querySelector('#menuFun5');
let menuFun6 = document.querySelector('#menuFun6');
let menuFun7 = document.querySelector('#menuFun7');
let page1 = document.querySelector('#page1');
let page2 = document.querySelector('#page2');
let page3 = document.querySelector('#page3');
let page4 = document.querySelector('#page4');
let page5 = document.querySelector('#page5');
let page6 = document.querySelector('#page6');
let page7 = document.querySelector('#page7');
let enCall = document.querySelector('#enCall');
let trCall = document.querySelector('#trCall');
let ruCall = document.querySelector('#ruCall');
let enCall2 = document.querySelector('#enCall2');
let trCall2 = document.querySelector('#trCall2');
let ruCall2 = document.querySelector('#ruCall2');
let holder1 = document.querySelector('#holder1');
let holder2 = document.querySelector('#holder2');
let holder3 = document.querySelector('#holder3');
let holder4 = document.querySelector('#holder4');
let holder5 = document.querySelector('#holder5');
let holder6 = document.querySelector('#holder6');
let menuSelect1 = document.querySelector('#menuSelect1');
let menuSelect2 = document.querySelector('#menuSelect2');
let main_btn1 = document.querySelector('#main_btn1');
let main_btn2 = document.querySelector('#main_btn2');
let socs = document.querySelectorAll('.nasock');
let minForm1 = document.querySelector('#minForm1');
let minForm2 = document.querySelector('#minForm2');

enCall.addEventListener('click', function () {
    holder1.style.display = 'block';
    holder2.style.display = 'none';
    holder3.style.display = 'none';
})
trCall.addEventListener('click', function () {
    holder1.style.display = 'none';
    holder2.style.display = 'block';
    holder3.style.display = 'none';
})
ruCall.addEventListener('click', function () {
    holder1.style.display = 'none';
    holder2.style.display = 'none';
    holder3.style.display = 'block';
})
if (enCall2) {
    enCall2.addEventListener('click', function () {
        holder4.style.display = 'block';
        holder5.style.display = 'none';
        holder6.style.display = 'none';
    })
}
if (trCall2) {
    trCall2.addEventListener('click', function () {
        holder4.style.display = 'none';
        holder5.style.display = 'block';
        holder6.style.display = 'none';
    })
}
if (ruCall2) {
    ruCall2.addEventListener('click', function () {
        holder4.style.display = 'none';
        holder5.style.display = 'none';
        holder6.style.display = 'block';
    })
}

menuFun1.addEventListener('click', function () {
    // page2.style.display = 'none';
    // page3.style.display = 'none';
    socs.forEach(function (sock){
        sock.style.display = 'none';
    })
    page1.style.display = 'block';
    menuFun1.style.backgroundColor = '#4b49ac';
    menuFun2.style.backgroundColor = '#6d69e1';
    menuFun2.style.backgroundColor = '#6d69e1';
});

menuFun2.addEventListener('click', function () {
    socs.forEach(function (sock){
        sock.style.display = 'none';
    })
    page2.style.display = 'block';
    menuFun2.style.backgroundColor = '#4b49ac';
    menuFun1.style.backgroundColor = '#6d69e1';
    menuFun3.style.backgroundColor = '#6d69e1';
});

menuFun3.addEventListener('click', function () {
    socs.forEach(function (sock){
        sock.style.display = 'none';
    })
    page3.style.display = 'block';
    menuFun3.style.backgroundColor = '#4b49ac';
    menuFun2.style.backgroundColor = '#6d69e1';
    menuFun1.style.backgroundColor = '#6d69e1';
});


document.addEventListener('DOMContentLoaded', function () {
    CKEDITOR.replace('editor1');
    CKEDITOR.replace('editor2');
    CKEDITOR.replace('editor3');
});

if (enCall2) {
    document.addEventListener('DOMContentLoaded', function () {
        CKEDITOR.replace('editor4');
        CKEDITOR.replace('editor5');
        CKEDITOR.replace('editor6');
    });
}
let i1 = false;
let i2 = false;
let form_turner1 = false;
let form_turner2 = false;

function openMenu1() {
    if (!i1 && !i2) {
        menuSelect1.style.display = 'flex';
        socs.forEach(function (sock){
            sock.style.display = 'none';
        })
        i1 = true;
        i2 = false;
    } else if (!i1 && i2) {
        socs.forEach(function (sock){
            sock.style.display = 'none';
        })
        menuSelect1.style.display = 'flex';
        menuSelect2.style.display = 'none';
        i1 = true;
        i2 = false;
    } else if (i1) {
        menuSelect1.style.display = 'none';
        socs.forEach(function (soc) {
            soc.style.display = 'none';
        });
        i1 = false;
    }
    if (i1) {
        main_btn1.style.backgroundColor = '#4b49ac';
        main_btn2.style.backgroundColor = '#6d69e1';
    }
    if (!i1) {
        main_btn1.style.backgroundColor = '#6d69e1';
        main_btn2.style.backgroundColor = '#6d69e1';
    }
}

function openMenu2() {
    if (!i2 && !i1) {
        menuSelect2.style.display = 'flex';
        i2 = true;
        i1 = false;
    } else if (!i2 && i1) {
        menuSelect1.style.display = 'none';
        menuSelect2.style.display = 'flex';
        page1.style.display = 'none';
        page2.style.display = 'none';
        page3.style.display = 'none';
        i2 = true;
        i1 = false;
    } else if (i2) {
        menuSelect2.style.display = 'none';
        socs.forEach(function (soc) {
            soc.style.display = 'none';
        });
        i1 = false;
        i2 = false;
    }
    if (i2) {
        main_btn2.style.backgroundColor = '#4b49ac';
        main_btn1.style.backgroundColor = '#6d69e1';
    }
    if (!i2) {
        main_btn2.style.backgroundColor = '#6d69e1';
        main_btn1.style.backgroundColor = '#6d69e1';
    }
}

menuFun4.addEventListener('click', function () {
    page5.style.display = 'none';
    page6.style.display = 'none';
    page7.style.display = 'none';
    page4.style.display = 'block';
});

menuFun5.addEventListener('click', function () {
    page4.style.display = 'none';
    page6.style.display = 'none';
    page7.style.display = 'none';
    page5.style.display = 'block';
});

menuFun6.addEventListener('click', function () {
    page4.style.display = 'none';
    page5.style.display = 'none';
    page7.style.display = 'none';
    page6.style.display = 'block';
});
menuFun7.addEventListener('click', function () {
    page4.style.display = 'none';
    page6.style.display = 'none';
    page5.style.display = 'none';
    page7.style.display = 'block';
});

function openMinForm1() {
    if (!form_turner1) {
        minForm1.style.display = 'block';
        form_turner1 = true;
    } else {
        minForm1.style.display = 'none';
        form_turner1 = false;
    }
}

function openMinForm2(){
    if (!form_turner2) {
        minForm2.style.display = 'block';
        form_turner2 = true;
    } else {
        minForm2.style.display = 'none';
        form_turner2 = false;
    }
}
