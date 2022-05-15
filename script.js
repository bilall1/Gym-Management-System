const name = document.getElementById('name')
const pass = document.getElementById('pass')
const email = document.getElementById('email')
const cnic = document.getElementById('cnic')
const age = document.getElementById('age')
const gender = document.getElementById('gender')
const adress = document.getElementById('adress')
const form = document.getElementById('form')
const errorElement = document.getElementById('error')


form.addEventListener('submit', (e) => {
    let message = []

    let numbers = false;
    for (let i = 0; i < name.value.length; i++) {

        if (i > 0 && i < name.value.length - 1 && name.value[i - 1] != ' ' && name.value[i] == ' ' && name.value[i + 1] != ' ') {
            numbers = false;
        } else {
            if (name.value[i] < 'A' || name.value[i] > 'z') {
                numbers = true;
                break;
            }
            if (name.value[i] > 'Z' && name.value[i] < 'a') {
                numbers = true;
                break;
            }
        }

    }
    if (numbers == true) {
        message.push("Invalid Name. Use alphabets only");
    }

    if (message.length > 0) {
        e.preventDefault();
        errorElement.innerText = message.join(', ')
    }
})