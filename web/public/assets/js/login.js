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

