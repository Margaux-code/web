var audio = new Audio('Sound/JuisLaCarte.mp3');

const observer = new IntersectionObserver(entries => {
    entries.forEach(entry => {
        if (entry.isIntersecting) {
            audio.play();
            return;
        }
        audio.pause();
        // audio.currentTime = 0;
    });
});

observer.observe(document.querySelector('.loop-wrapper'));