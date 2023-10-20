export const togglePasswordVisibility = (checkboxName, passwordName) => {
    const checkbox = document.getElementsByName(checkboxName)[0],
        password = document.getElementsByName(passwordName)[0];
    return (password.type = checkbox.checked ? "text" : "password");
};

const validateCI = (ciInput) => {
    const ciValue = ciInput.value.replace(/\D+/g, "").slice(0, 8);
    ciInput.value = ciValue;
};

const inputFieldValidation = (inputFields) => {
    const { inputSend } = inputFields;
    const inputQuantity = Object.values(inputFields.inputs).length;
    const inputValues = Object.values(inputFields.inputs).filter(
        (x) => x.value,
    ).length;

    inputSend.disabled = inputQuantity === inputValues ? false : true;
};

export const formValidation = (inputFields) => {
    window.addEventListener("DOMContentLoaded", () => {
        inputFieldValidation(inputFields);
    });
    inputFields.formName.addEventListener("input", () => {
        const ciName = inputFields.inputs.ci;
        validateCI(ciName);
        inputFieldValidation(inputFields);
    });
};
