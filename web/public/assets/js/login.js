import { togglePasswordVisibility, formValidation } from "./functions.mjs";

// Login CheckBox logic
const checkboxID = "checkbox",
    passwordID = "password";
const checkbox = document.getElementById(checkboxID);
checkbox.addEventListener("click", () => {
    togglePasswordVisibility(checkboxID, passwordID);
});

// Login Input logic
const ci = document.getElementsByName("ci")[0],
    password = document.getElementsByName("password")[0],
    loginInput = document.getElementById("loginInput");
const form = document.getElementById("loginForm");
formValidation(form, ci, password, loginInput);

form.addEventListener("submit", (event) => {
    event.preventDefault();

    fetch("login", {
        method: "POST",
        body: new FormData(form),
    })
        .then((res) => res.json())
        .then((data) => {
            if (data.session) {
                alert("Sesión iniciada con éxito!");
                location.href = "dashboard";
            } else {
                alert(data.description);
            }
        })
        .catch((error) => {
            location.href = "404";
            console.log(error);
        });
});
