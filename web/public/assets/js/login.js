import {
    togglePasswordVisibility,
    formValidation,
    jsEnabled,
} from "./functions.mjs";

// Login CheckBox logic
const checkboxName = "password_checkbox",
    passwordName = "password";
const checkbox = document.getElementsByName(checkboxName)[0];
checkbox.addEventListener("click", () => {
    togglePasswordVisibility(checkboxName, passwordName);
});

// Login Input logic

const form = {
    formName: document.getElementById("loginForm"),
    inputs: {
        ci: document.getElementsByName("ci")[0],
        password: document.getElementsByName("password")[0],
    },
    inputSend: document.getElementById("loginInput"),
};

formValidation(form);
// jsEnabled("jsEnabled");

form.formName.addEventListener("submit", (event) => {
    event.preventDefault();

    fetch("login", {
        method: "POST",
        body: new FormData(form.formName),
    })
        .then((res) => res.json())
        .then((data) => {
            if (data.session) {
                alert("Sesión iniciada con éxito!");
                location.href = "dashboard";
            } else {
                alert(data.description);
                if (data.status === "pending") location.href = "signup";
            }
        })
        .catch((error) => {
            // location.href = "404";
            console.log(error);
        });
});
