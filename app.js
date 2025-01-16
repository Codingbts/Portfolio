const cards = document.querySelectorAll(".carte, .carte2");

cards.forEach(el => {
    el.addEventListener("mousemove", e => {
        let elRect = el.getBoundingClientRect();

        let x = e.clientX - elRect.x
        let y = e.clientY - elRect.y

        let midCardWidth = elRect.width / 2
        let midCardHeight = elRect.height / 2

        let angleY = -(x - midCardWidth) / 8
        let angleX = (y - midCardHeight) / 8

        let glowX= x / elRect.width * 100
        let glowY= y / elRect.height * 100

        
        el.children[0].style.transform = `rotateX(${angleX}deg) rotateY(${angleY}deg) scale(1.1)`
        el.children[1].style.transform = `rotateX(${angleX}deg) rotateY(${angleY}deg) scale(1.1)`
        el.children[0].style.background = `radial-gradient(circle at ${glowX}% ${glowY}%, rgba(184, 196, 211, 0.5), rgba(0, 255, 0, 0) 70%)`
    });

    el.addEventListener("mouseleave", () => {
        el.children[0].style.transform = "rotateX(0) rotateY(0)"
        el.children[1].style.transform = "rotateX(0) rotateY(0)"
    })
});
