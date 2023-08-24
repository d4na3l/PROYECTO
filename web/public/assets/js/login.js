$("document").ready(() => {
    let ciValue;
    let passwordValue;
    let ciErrors;
    let passwordErrors;

    $("input[name='ci']").on("input", (e) => {
        ciValue = $(e.target).val().replace(/\D/g, "");
        $(e.target).val(ciValue);

        ciErrors = [];
        if (!Number($(e.target).val())) {
            ciErrors.push("Este campo solo debe ser llenado con números");

            if (!$(e.target).next("ul").length) {
                const ul = $("<ul>").addClass("ciContainerErrors");
                $(e.target).after(ul);
            }

            ciErrors.forEach((error) => {
                const li = $("<li>").text(error);
                $(".usuario").find("ul.ciContainerErrors").append(li);
            });
        }
    });

    $("input[name='password']").on("input", () => {
        passwordValue = $("input[name='password']").val();

        const regexUpperCase = /(?=.*[A-Z])/;
        const regexLowerCase = /(?=.*[a-z])/;
        const regexNumberCase = /(?=.*\d)/;
        const regexSymbolCase = /(?=.*[.;*(/$&)])/;
        const regexCatchRange = /[\w.;*(/$&)]{8,}/;

        passwordErrors = [];

        if (!regexUpperCase.test(passwordValue)) {
            passwordErrors.push(
                "La contraseña debe contener al menos una letra mayúscula."
            );
        }
        if (!regexLowerCase.test(passwordValue)) {
            passwordErrors.push(
                "La contraseña debe contener al menos una letra minúscula."
            );
        }
        if (!regexNumberCase.test(passwordValue)) {
            passwordErrors.push(
                "La contraseña debe contener al menos un número."
            );
        }
        if (!regexSymbolCase.test(passwordValue)) {
            passwordErrors.push(
                "La contraseña debe contener al menos uno de los siguientes símbolos: . ; * ( / $ & )."
            );
        }
        if (!regexCatchRange.test(passwordValue)) {
            passwordErrors.push(
                "La contraseña debe tener al menos 8 caracteres."
            );
        }

        console.log("This is password erros", passwordErrors);
        // Puedes ver el arrego de passwordErrors en consola del navegador

        /* haz que los elementos de passwordErrors se impriman en la vista del login, en algun modal. Ve si puedes implementarlo

                        - La validaciones previstas aseguran que no se pueda enviar el formulario si los campos no estan llenos
                        - Tampoco se pueden ingresar dentro de campo de cedulas otro caracter que no sea numero
                        - He decidido que las contraseñas a ingresar deban tener todas las condideraciones previstas anteriormente (es decir, que hay que tomar las mismas previsiones para los registros de usuarios)

                        Ademas, como el boton de ingresar esta deshabilitado mientras no se cumplan ninguna de las condiciones, seria exclenete cambiar los colores del boton a rojo, quitar la autorizacion del mouse a interactuar con el submit. Cuandos se cumplan las condiciones, el submit deberia volver a su estado base.

                        Estas validaciones solo nos ayuarán
                        */
    });

    $("#showPass")
        .mousedown((e) => {
            $('input[name="password"]').attr("type", "text");
        })
        .mouseup((e) => {
            $('input[name="password"]').attr("type", "password");
        });

    $("#loginForm").submit((e) => {
        if (
            !ciValue ||
            !passwordValue ||
            ciErrors.length ||
            passwordErrors.length
        ) {
            e.preventDefault();
        } else {
            $.ajax({
                method: "POST",
                data: {
                    ci: ciValue,
                    password: passwordValue,
                },
                success: (res) => {
                    console.log("conectado");
                },
                error: () => {
                    console.log("Ha ocurrido un error durante la ejecución");
                },
            });
        }
    });
});
