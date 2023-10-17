

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
var swiper = new Swiper(".home-slider", {
    loop:true,
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
});

var swiper = new Swiper(".reviews-slider", {
  loop:true,
  spaceBetween:20,
  autoHeight:true,
  grabCursor:true,
  breakpoints: {
    640: {
      slidesPerView: 1,
    },
    768: {
      slidesPerView: 2,
    },
    1024: {
      slidesPerView: 3,
    },
  },
});

function mssg(){
  var Name = document.getElementById('name');
  var Email = document.getElementById('email');
  var Phone = document.getElementById('phone');
  var Message = document.getElementById('message');
  const Success = document.getElementById('success');
  const danger = document.getElementById('danger');

  if(Name.value === '' || Email.value=== '' || Phone.value=== '' || Message.value=== ''){
    danger.style.display = 'block';
  }
  else{
    setTimeout(() => { 
      Name.value ='';
      Email.value = '';
      Phone.value = '';
      Message.value = '';
    }, 5000);

    Success.style.display = 'block';
  }
  setTimeout(() => { 
    danger.style.display= "none";
    Success.style.display = "none";
  }, 5000);


}

let loadMoreBtn = document.querySelector('.packages .load-more .btn');
let currentItem =3;

loadMoreBtn.onclick = () => {
  let boxes =[...document.querySelectorAll('.packages .box-container .box')];
  for(var i = currentItem; i < currentItem + 3; i++){
    boxes[i].style.display = 'inline-block';
  };
  currentItem += 3;
  if(currentItem >= boxes.length){
    loadMoreBtn.style.display = 'none';
  }
}

