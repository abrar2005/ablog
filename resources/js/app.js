import "./bootstrap";


let btns = document.querySelectorAll('.follow');

btns.forEach(btn => {
    btn.addEventListener("click", ()=> {
        // if he is followed and then clicked
        if (btn.dataset.followed === "true") {
            btn.dataset.followed = "false"
        }

        // if he is NOT followed and then clicked
        if (btn.dataset.followed === "false") {
            btn.dataset.followed = "true"
        }

        console.log(btn);
    });
});

