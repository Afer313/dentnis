const left_btn = document.querySelector('#previous_partner')
const right_btn = document.querySelector('#next_partner')

const item_container = document.querySelector('.items-layout');
let position = 0;
let i = 0;
let itemC_width = item_container.scrollWidth;
let itemWidth = document.querySelector('#partner_item').clientWidth;
let items_count = Math.round(itemC_width/330);
nextPartner();
prevPartner();
function nextPartner() {
    if (i !== items_count-4){
        i++
        position -= itemWidth + 20;
        item_container.style.left = position+'px';
        if (i === items_count-4){
            right_btn.classList.remove('active');
            left_btn.classList.add('active');
        }
    }
}

function prevPartner() {
    if (position !== 0){
        i--
        position += itemWidth + 20;
        item_container.style.left = position+'px';
        if (position === 0){
            right_btn.classList.add('active');
            left_btn.classList.remove('active');
        }
    }
}

//ekip skript

const swiper = new Swiper('.sample-slider', {
    loop: true,
    autoplay: {
        delay: 0,
    },
    speed: 3000,          //add
    slidesPerView: 4,     //add
})
