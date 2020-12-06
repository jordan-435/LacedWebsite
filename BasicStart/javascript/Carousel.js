const track = document.querySelector('.carousel_track');
const slides = Array.from(track.children);
const nextButton = document.querySelector('.carousel_button--right');
const previousButton = document.querySelector('.carousel_button--left');
const dotsNav = document.querySelector('.carousel_nav');
const dots = Array.from(dotsNav.children);

const slideWidth = slides[0].getBoundingClientRect().width;


const setSlidePosition = (slide,index)=>{
    slide.style.left = slideWidth * index + 'px';
};
slides.forEach(setSlidePosition);


const moveToSlide = (track,currentSlide,tagetNextSlide) => {
    track.style.transform = 'translateX(-'+ tagetNextSlide.style.left +')';
    currentSlide.classList.remove('current-slide');
    tagetNextSlide.classList.add('current-slide');
}
const updateDots = (currentDot,targetDot)=>{
    currentDot.classList.remove('current-slide');
    targetDot.classList.add('current-slide');
}
const updateArrows = (slides,previousButton,nextButton,targetIndex)=>{
    if(targetIndex === 0){
        previousButton.classList.add('is-hidden');
        nextButton.classList.remove('is-hidden');
    }else if (targetIndex === slides.length - 1){
        previousButton.classList.remove('is-hidden');
        nextButton.classList.add('is-hidden');
    }else{
        previousButton.classList.remove('is-hidden');
        nextButton.classList.remove('is-hidden');
    }
}
previousButton.addEventListener('click',e =>{
    const currentSlide = track.querySelector('.current-slide');
    const prevSlide = currentSlide.previousElementSibling;
    const currentDot = dotsNav.querySelector('.current-slide');
    const prevDot = currentDot.previousElementSibling;
    const prevIndex = slides.findIndex(slide => slide === prevSlide)

    updateArrows(slides,previousButton,nextButton,prevIndex);
    updateDots(currentDot, prevDot);
    moveToSlide(track,currentSlide,prevSlide);
})

nextButton.addEventListener('click',e =>{
    const currentSlide = track.querySelector('.current-slide');
    const nextSlide = currentSlide.nextElementSibling;
    const currentDot = dotsNav.querySelector('.current-slide');
    const nextDot = currentDot.nextElementSibling;
    const nextIndex = slides.findIndex(slide => slide === nextSlide)

    updateArrows(slides,previousButton,nextButton,nextIndex);
    updateDots(currentDot, nextDot);
    moveToSlide(track,currentSlide,nextSlide);
})

dotsNav.addEventListener('click',e =>{
    const targetDot = e.target.closest('button');
    if(!targetDot) return;
    const currentSlide = track.querySelector('.current-slide');
    const currentDot = dotsNav.querySelector('.current-slide');
    const targetIndex = dots.findIndex(dot => dot === targetDot);
    const targetSlide = slides[targetIndex];

    updateArrows(slides,previousButton,nextButton,targetIndex);
    moveToSlide(track,currentSlide,targetSlide);
    updateDots(currentDot, targetDot);

})

document.addEventListener('touchmove',f);
function f(ev){
    console.log(ev.touches[0].pageX);
}