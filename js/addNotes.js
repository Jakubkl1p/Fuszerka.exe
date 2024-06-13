const iconHamburger = document.getElementById("a");
const icon = document.getElementById("icon2");

const form = document.getElementById("form");
let state = 0;

function changeState() {
    if (state % 2 == 0) {
        console.log("state: ", state);
        icon.style.transform = "rotate(-90deg)";
        iconHamburger.innerHTML = `<svg xmlns="http://www.w3.org/2000/svg" width="2.4em" height="2.4em" viewBox="0 0 48 48">
        <g fill="none" stroke="#000" stroke-linecap="round" stroke-linejoin="round" stroke-width="4">
            <path d="M7.94971 11.9497H39.9497" />
            <path d="M7.94971 23.9497H39.9497" />
            <path d="M7.94971 35.9497H39.9497" />
        </g>
    </svg>`;    
        form.style.display = "none";
        state++;
    } else {
        icon.style.transform = "rotate(90deg)";
        form.style.display = "block";
        iconHamburger.innerHTML = `<svg id="icon2" class="icon2" xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 512 512"><path fill="none" stroke="#f9b521" stroke-linecap="round" stroke-linejoin="round" stroke-width="48" d="M244 400L100 256l144-144M120 256h292"/></svg>`;
        state++
    }
}

// window.addEventListener("resize", () => {
//     if (window.screen.width )
// });

