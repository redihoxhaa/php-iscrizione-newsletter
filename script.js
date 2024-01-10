const canvas = document.querySelector('#confetti');

const jsConfetti = new JSConfetti();

window.addEventListener("load", () => {
    jsConfetti.addConfetti({
        emojis: ['🌈', '⚡️', '💥', '✨', '💫', '🌸'],
    }).then(() => jsConfetti.addConfetti())
})