import { formValidation } from "./functions.mjs";

// Signup Input logic
const form = {
    formName: document.getElementById("signupForm"),
    inputs: {
        ci: document.getElementsByName("ci")[0],
        password: document.getElementsByName("password")[0],
        password_verify: document.getElementsByName("verify_password")[0],
    },
    inputSend: document.getElementById("signupInput"),
};

formValidation(form);

form.formName.addEventListener("submit", async (event) => {
    event.preventDefault();

    const formData = {
        ci: document.getElementsByName('ci')[0].value,
        password: document.getElementsByName('password')[0].value,
        verify_password: document.getElementsByName('verify_password')[0].value
    };

    try {
        const response = await fetch("signup", {
            method: "PUT",
            headers: {
                'Content-Type': 'application/json'
            },
            body: JSON.stringify(formData)
        });

        const data = await response.json();

        if (data.signup) {
            alert("Registro realizado con éxito!");
            location.href = "login";
        } else {
            alert(data.description);
            if (data.status === "active") location.href = "login";
        }
    } catch (error) {
        console.error(error);
        location.href = "404";
    }
})

// function ocultarPassword() {
//     const checkbox = document.getElementById("checkbox"),
//         password = document.getElementById("password");

//     if (checkbox.checked == true) {
//         password.type = "text";
//     } else {
//         password.type = "password";
//     }
// }

// $("document").ready(() => {
//     let ciValue;
//     let passwordValue;
//     let ciErrors;
//     let passwordErrors;

//     $("input[name='ci']").on("input", (e) => {
//         const regexNum = /[\d]{7,}/;
//         const botonDisabled = document.getElementById("loginInput");

//         ciValue = $(e.target).val().replace(/\D/g, "");
//         $(e.target).val(ciValue);

//         ciErrors = [];
//         if (!Number($(e.target).val()) || !regexNum.test($(e.target).val())) {
//             ciErrors.push("Ingrese un número de cédula válido");
//         }

//         if (ciErrors.length) {
//             if (!$(e.target).next("ul").length) {
//                 const ul = $("<ul>").addClass("ciContainerErrors");
//                 $(e.target).after(ul);
//             } else {
//                 $(e.target).next("ul.ciContainerErrors").empty();
//             }
//             ciErrors.forEach((error) => {
//                 const li = $("<li>").text(error);
//                 $(".usuario").find("ul.ciContainerErrors").append(li);
//                 botonDisabled.disabled = true;
//             });
//         } else {
//             $(e.target).next("ul.ciContainerErrors").remove();
//             botonDisabled.disabled = false;
//         }
//     });

//     $("input[name='password']").on("input", (e) => {
//         passwordValue = $("input[name='password']").val();

//         const regexUpperCase = /(?=.*[A-Z])/;
//         const regexLowerCase = /(?=.*[a-z])/;
//         const regexNumberCase = /(?=.*\d)/;
//         const regexSymbolCase = /(?=.*[.;*(/$&)])/;
//         const regexCatchRange = /[\w.;*(/$&)]{8}/;
//         const botonDisabled = document.getElementById("loginInput");

//         passwordErrors = [];

//         if (!regexUpperCase.test(passwordValue)) {
//             passwordErrors.push(
//                 "La contraseña debe contener al menos una letra mayúscula."
//             );
//         }
//         if (!regexLowerCase.test(passwordValue)) {
//             passwordErrors.push(
//                 "La contraseña debe contener al menos una letra minúscula."
//             );
//         }
//         if (!regexNumberCase.test(passwordValue)) {
//             passwordErrors.push(
//                 "La contraseña debe contener al menos un número."
//             );
//         }
//         if (!regexSymbolCase.test(passwordValue)) {
//             passwordErrors.push(
//                 "La contraseña debe contener al menos uno de los siguientes símbolos: . ; * ( / $ & )."
//             );
//         }
//         if (!regexCatchRange.test(passwordValue)) {
//             passwordErrors.push(
//                 "La contraseña debe tener al menos 8 caracteres."
//             );
//         }

//         if (passwordErrors.length) {
//             if (!$("input[name='password']").next("ul").length) {
//                 const ul = $("<ul>").addClass("passwordContainerErrors");
//                 $("input[name='password']").after(ul);
//             } else {
//                 $("input[name='password']")
//                     .next("ul.passwordContainerErrors")
//                     .empty();
//             }
//             passwordErrors.forEach((error) => {
//                 const li = $("<li>").text(error);
//                 $(".usuario").find("ul.passwordContainerErrors").append(li);
//                 botonDisabled.disabled = true;
//             });
//         } else {
//             $("input[name='password']")
//                 .next("ul.passwordContainerErrors")
//                 .remove();
//             botonDisabled.disabled = false;
//         }
//     });

//     $("#loginForm").submit((e) => {
//         if (
//             !ciValue ||
//             !passwordValue ||
//             ciErrors.length ||
//             passwordErrors.length
//         ) {
//             e.preventDefault();
//         } else {
//             $.ajax({
//                 method: "POST",
//                 data: {
//                     ci: ciValue,
//                     password: passwordValue,
//                 },
//                 success: (res) => {
//                     console.log("Todo salió como estaba previsto: ", res);
//                     // if (res.session) {
//                     //     location.href = "https://localhost/public/dashboard";
//                     //     console.log(res);
//                     // } else {
//                     //     location.href = "http://localhost/public/login";
//                     //     console.log(res.description);
//                     // }
//                 },
//                 error: () => {
//                     console.log("Todo salió mal a la verga");
//                     // location.href = "http://localhost/public/404";
//                 },
//             });
//         }
//     });
// });
