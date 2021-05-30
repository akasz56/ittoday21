const numCek1 = document.querySelector('#numberCek1');
const numCek2 = document.querySelector('#numberCek2');
const numCek3 = document.querySelector('#numberCek3');
const phone1 = document.querySelector('#phone1');
const phone2 = document.querySelector('#phone2');
const phone3 = document.querySelector('#phone3');
const whatsapp1 = document.querySelector('#whatsapp1');
const whatsapp2 = document.querySelector('#whatsapp2');
const whatsapp3 = document.querySelector('#whatsapp3');

if (numCek1 || numCek2 || numCek3) {
    numCek1.addEventListener('click', () => {
        if (numCek1.checked == true)
            whatsapp1.value = phone1.value;
        else
            whatsapp1.value = '';

    });

    numCek2.addEventListener('click', () => {
        if (numCek2.checked == true)
            whatsapp2.value = phone2.value;
        else
            whatsapp2.value = '';

    });

    numCek3.addEventListener('click', () => {
        if (numCek3.checked == true)
            whatsapp3.value = phone3.value;
        else
            whatsapp3.value = '';

    });

    if (phone1.value !== '' && whatsapp1.value !== '') {
        if (phone1.value === whatsapp1.value)
            numCek1.checked = true;
        if (phone2.value === whatsapp2.value)
            numCek2.checked = true;
        if (phone3.value === whatsapp3.value)
            numCek3.checked = true;
    }
}


const showOrHidePassword = document.querySelector("#togglePassword");
const showOrHidePassword2 = document.querySelector("#togglePassword2");
//cek dulu dihalaman skrg ada id togglePassword ga
if (showOrHidePassword) {
    showOrHidePassword.addEventListener("click", event => {
        let input = document.querySelector("#signInPassword");
        const kelas = ["bi-eye", "bi-eye-slash"];
        // conditional
        if (input.type === "password") {
            input.type = "text";
            showOrHidePassword.classList.remove(kelas[0]);
            showOrHidePassword.classList.add(kelas[1]);
        } else {
            input.type = "password";
            showOrHidePassword.classList.remove(kelas[1]);
            showOrHidePassword.classList.add(kelas[0]);
        }
        event.stopPropagation();
    });

    if (showOrHidePassword2) {
        showOrHidePassword2.addEventListener('click', event => {
            let input2 = document.querySelector("#signInPassword2");
            const kelas = ["bi-eye", "bi-eye-slash"];
            // conditional
            if (input2.type === "password") {
                input2.type = "text";
                showOrHidePassword2.classList.remove(kelas[0]);
                showOrHidePassword2.classList.add(kelas[1]);
            } else {
                input2.type = "password";
                showOrHidePassword2.classList.remove(kelas[1]);
                showOrHidePassword2.classList.add(kelas[0]);
            }
            event.stopPropagation();
        })
    }
}