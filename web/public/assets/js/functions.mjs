export const togglePasswordVisibility = (checkboxID, passwordID) => {
    const checkbox = document.getElementById(checkboxID),
        password = document.getElementById(passwordID);
    return (password.type = checkbox.checked ? "text" : "password");
};

const validateCI = (input) => {
    const ciValue = input.value.replace(/\D+/g, "").slice(0, 8);
    input.value = ciValue;
};

const inputFieldValidation = (ci, password, loginInput) => {
    if (!ci.value.length || !password.value.length) {
        loginInput.disabled = true;
    } else {
        loginInput.disabled = false;
    }
};
export const formValidation = (formName, ciName, passwordName, loginInput) => {
    window.addEventListener("DOMContentLoaded", () => {
        inputFieldValidation(ciName, passwordName, loginInput);
    });
    formName.addEventListener("input", () => {
        validateCI(ciName);
        inputFieldValidation(ciName, passwordName, loginInput);
    });
};
