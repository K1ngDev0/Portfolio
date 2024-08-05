const cards = document.querySelectorAll('.card')
const textSections = document.querySelectorAll('.textSection')
const projects = document.querySelectorAll('.project')

window.addEventListener('scroll', checkAnimation)

checkAnimation()

function checkAnimation() {
    const trigger = window.innerHeight / 6 * 5;
    
    cards.forEach(card => {
        const top = card.getBoundingClientRect().top
        if (trigger > top) {
            card.classList.add('showCard')
        } else {
            card.classList.remove('showCard')
        }
    })

    textSections.forEach(textSection => {
        const top = textSection.getBoundingClientRect().top

        if (trigger > top) {
            textSection.classList.add('showText')
        } else {
            textSection.classList.remove('showText')
        }
    })
}