import "./bootstrap";

let btns = document.querySelectorAll(".follow");

btns.forEach((btn) => {
    btn.addEventListener("click", () => {
        // if he is followed and then clicked
        if (btn.dataset.followed === "true") {
            btn.dataset.followed = "false";
        }

        // if he is NOT followed and then clicked
        if (btn.dataset.followed === "false") {
            btn.dataset.followed = "true";
        }

        console.log(btn);
    });
});

// CHECK PASSWORD BUTTON

const togglePassword = document.querySelector(".eye_icon");
const password = document.querySelector("#password");

togglePassword.addEventListener("click", function () {
    // toggle the type attribute
    const type =
        password.getAttribute("type") === "password" ? "text" : "password";
    password.setAttribute("type", type);

    // toggle the icon
    this.classList.toggle("bi-eye");
});

document.querySelector
