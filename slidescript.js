
function changeSlideRandomly() {
    const slides = document.querySelectorAll('.slides img');  
    const totalSlides = slides.length;
    
    
    const randomIndex = Math.floor(Math.random() * totalSlides);
    
    
    const slideContainer = document.querySelector('.slides');
    slideContainer.style.transform = `translateX(-${randomIndex * 100}%)`;
}


setInterval(changeSlideRandomly, 3000);


window.onload = changeSlideRandomly;
