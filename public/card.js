const card = document.querySelectorAll(".carte")

carte.forEach(el => {
    el.addEventListener("mousemove", e =>{
        let elRect = el.getBoundingClientRect()

        let x = e.clientX - elRect.x
        let y = e.clientX - elRect.y

        let midCardWidth = elRect.width/2
        let midCardHeigth = elRect.heigth/2

        let angleY = (x - midCardWidth) / 8
        let angleX = (y - midCardHeigth) / 8

        el.children[0].style.transform = `rotateX(${angleX}deg) rotateY(${angleY} deg) scale(1.1)`
    })
});