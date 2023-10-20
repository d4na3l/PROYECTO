import { togglePasswordVisibility, formValidation } from "./functions.mjs";

// Login CheckBox logic
const checkboxID = "checkbox",
    passwordID = "password";
const checkbox = document.getElementById(checkboxID);
checkbox.addEventListener("click", () => {
    togglePasswordVisibility(checkboxID, passwordID);
});

// Login Input logic
// const ci = document.getElementsByName("ci")[0],
//     password = document.getElementsByName("password")[0],
//     loginInput = document.getElementById("loginInput");

const form = {
    formName: document.getElementById("loginForm"),
    inputs: {
        ci: document.getElementsByName("ci")[0],
        password: document.getElementsByName("password")[0],
    },
    inputSend: document.getElementById("loginInput"),
};

formValidation(form);

form.formName.addEventListener("submit", (event) => {
    event.preventDefault();

    fetch("login", {
        method: "POST",
        body: new FormData(form.formName),
    })
        .then((res) => res.json())
        .then((data) => {
            console.log(data);
            if (data.session) {
                alert("Sesión iniciada con éxito!");
                location.href = "dashboard";
            } else {
                alert(data.description);
                if (data.status === "pending") location.href = "signup";
            }
        })
        .catch((error) => {
            location.href = "404";
            console.log(error);
        });
});
