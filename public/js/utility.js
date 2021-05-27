const numCek1 = document.querySelector('#numberCek1');
const numCek2 = document.querySelector('#numberCek2');
const numCek3 = document.querySelector('#numberCek3');
const whatsapp1 = document.querySelector('#whatsapp1');
const whatsapp2 = document.querySelector('#whatsapp2');
const whatsapp3 = document.querySelector('#whatsapp3');
const phone1 = document.querySelector('#phone1');
const phone2 = document.querySelector('#phone2');
const phone3 = document.querySelector('#phone3');

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
}