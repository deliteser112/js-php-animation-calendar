var button = document.getElementById("myButton");
button.addEventListener("click", function() { 
    animateHelloWorld();
});

function animateHelloWorld() {
    const phrase = "Hello World";
    const div1 = document.getElementById('div1');
    const div2 = document.getElementById('div2');

    // Clear existing content in div2
    div2.innerHTML = "";

    // Odd-indexed characters (starting from 0)
    for (let i = 0; i < phrase.length; i += 2) {
        const char = phrase[i];
        const delay = 4 + i;

        setTimeout(() => {
            const span = document.createElement('span');
            span.textContent = char;
            span.classList.add('animated');
            const topPosition = div2.offsetHeight;
            span.style.transform = `translate(0, ${topPosition}px)`;
            div2.appendChild(span);
        }, delay * 1000);
    }

    // Even-indexed characters (starting from 1)
    for (let i = 1; i < phrase.length; i += 2) {
        const char = phrase[i];
        const delay = 1 + i;

        setTimeout(() => {
            const span = document.createElement('span');
            span.textContent = char;
            span.classList.add('animated');
            const topPosition = div2.offsetHeight;
            span.style.transform = `translate(0, ${topPosition}px)`;
            div2.appendChild(span);
        }, delay * 1000);
    }
}