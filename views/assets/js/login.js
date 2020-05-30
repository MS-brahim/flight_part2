const email = document.getElementById('emailLogin')
const pass = document.getElementById('passLogin')
const form = document.getElementById('form')
const errorElement = document.getElementById('err_login')

form.addEventListener('submit', (e) => {
    let msgs = []
    if(email.value === '' || email.value == null){
        msgs.push('email is required')+"<br>"
    }
    if(pass.value.length <= 2){
        msgs.push('password is required')
    }

    if(msgs.length > 0){
        e.preventDefault();
        errorElement.innerText = msgs.join(' Or ')
    }
})
        