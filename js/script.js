let menu = document.querySelector('#menu-btn');
let navbar = document.querySelector('.header .navbar');

menu.onclick = () =>{
    menu.classList.toggle('fa-times');
    navbar.classList.toggle('active');
};

window.onscroll = () =>{
    menu.classList.remove('fa-times');
    navbar.classList.remove('active');
};

var swiper = new Swiper('.home-slider', {
    loop: true,
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },
    autoplay: {
        delay: 2500, // Time between slide changes
        disableOnInteraction: false,
    },
    on: {
        slideChangeTransitionStart: function () {
            // Optional: Add any additional effects during the transition
        },
    },
});

var swiper = new Swiper('.reviews-slider', {
    loop: false,  // Loop through slides
    navigation: {
        nextEl: '.swiper-button-next',  // Add your navigation buttons if needed
        prevEl: '.swiper-button-prev',
    },
    pagination: {
        el: '.swiper-pagination', // Optional pagination
        clickable: true,
    },
    slidesPerView: 1, // Show one slide at a time (you can adjust this based on the screen size)
    spaceBetween: 30, // Add space between the slides
    on: {
        slideChange: function () {
            // Check if we are on the last slide
            if (swiper.isEnd) {
                // Show the "End" message
                document.querySelector('.end-message').style.display = 'block';
            } else {
                // Hide the "End" message if not at the last slide
                document.querySelector('.end-message').style.display = 'none';
            }
        }
    }
});

let loadMoreBtn = document.querySelector('.packages .load-more .btn');
let currentItem = 3;

loadMoreBtn.onclick = () =>{
    let boxes = [...document.querySelectorAll('.packages .box-container .box')];
    for (var i = currentItem; i < currentItem + 3; i++) {
        boxes[i].style.display = "inline-block";
    }
    currentItem += 3;
    if(currentItem >= boxes.length){
        loadMoreBtn.style.display = 'none';
    }
}

