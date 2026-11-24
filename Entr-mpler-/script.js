'use strict'
const slides = document.querySelectorAll(".slide");
const dotsContainer = document.querySelector(".dots");

let current = 0;

console.log("test");

slides.forEach((_, index) => {
    const dot = document.createElement("div");
    dot.classList.add("dot");

    if(index ===0){
        dot.classList.add("active");
    }
    dot.addEventListener("click", ()=>{
        showSlide(index);
    })

    dotsContainer.appendChild(dot);
});

const dots = document.querySelectorAll(".dot");

function showSlide(index){
    slides.forEach(slide =>
        slide.classList.remove("active")
    );

    dots.forEach(dot =>
        dot.classList.remove("active")
    );
    slides[index].classList.add("active");
    dots[index].classList.add("active");

    current = index;
}

document.querySelector(".next").addEventListener("click", () => {
    current++;

    if(current >= slides.length){
        current = 0;
    }

    showSlide(current);
});
document.querySelector(".prev").addEventListener("click",()=>{
    current--;
    if(current < 0){
        current = slides.length -1;
    }
    showSlide(current);
})



const ablauf = document.getElementById("Ablauf");
const pfad = document.querySelector(".ablaufLayout");

const observer = new IntersectionObserver((entries) => {
    if (entries[0].isIntersecting) {
        pfad.classList.add("active");
        ablauf.classList.add("active");
    }
}, {
    threshold: 0.3
});

observer.observe(ablauf);

const überUns = document.getElementById("überUns");
const textbereich = document.querySelector(".AboutUsLayout > div:first-child");

const observerTwo = new IntersectionObserver((entries) => {
    if (entries[0].isIntersecting) {
        textbereich.classList.add("active");
        if(window.innerWidth > 768){
            ablauf.classList.add("active");
        }
    }
}, {
    threshold: 0.3
});

observerTwo.observe(überUns);
