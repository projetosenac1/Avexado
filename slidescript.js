
function changeSlideRandomly() {
    const slides = document.querySelectorAll('.slides img');  
    const totalSlides = slides.length;
    
    
    const randomIndex = Math.floor(Math.random() * totalSlides);
    
    
    const slideContainer = document.querySelector('.slides');
    slideContainer.style.transform = `translateX(-${randomIndex * 100}%)`;
}


setInterval(changeSlideRandomly, 3000);


function myFunction() {
    var senhaField = document.getElementById("senha");
    var eyeIcon = document.getElementById("eye-icon");

    if (senhaField.type === "password") {
        senhaField.type = "text";
        eyeIcon.classList.remove("fa-eye-slash");
        eyeIcon.classList.add("fa-eye");
    } else {
        senhaField.type = "password";
        eyeIcon.classList.remove("fa-eye");
        eyeIcon.classList.add("fa-eye-slash");
    }
}

