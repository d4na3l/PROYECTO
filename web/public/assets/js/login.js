import {
    togglePasswordVisibility,
    formValidation,
    /*jsEnabled,*/
} from "./functions.mjs";

var btn = document.querySelector(".boton");

btn.onclick = function() {

    document.getElementById("loader").style.display = "flex";
    document.getElementById("myDiv").style.display = "none";
    
    setTimeout(() => {
        // alert("Prueba finalizada")
        document.getElementById("loader").style.display = "none";
        document.getElementById("myDiv").style.display = "flex";
    }, 5000);

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
                
                location.href = "dashboard";
            } else {
                const modal = document.getElementById("myModal");
                const span = document.getElementsByClassName("close")[0];
                const body = document.getElementsByTagName("body");

                modal.showModal()

                span.addEventListener("click", ()=> {
                    modal.close();
                })
                // alert(data.description);
                if (data.status === "pending") location.href = "signup";
            }
        })
        .catch((error) => {
            // location.href = "404";
            console.log(error);
        });
});
};
