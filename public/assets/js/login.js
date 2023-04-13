/*===============Ouvrier Login===============*/
const eye = document.querySelector('i.eye'),
    password_Input = document.querySelector('input[type="password"]');

password_Input.addEventListener('input',(input) => {
    if(!input.target.value){
        eye.style.color = '#333';
        if(password_Input.getAttribute('type') == 'password'){
            eye.style.color = '#ccc';
        }
        eye.style.display = 'none';
        return
    }
    eye.style.display = 'block';
})

eye.addEventListener('click',() => {
    if(password_Input.getAttribute('type') == 'password'){
        password_Input.setAttribute('type', 'text');
        eye.style.color = '#333';
        return
    }
    password_Input.setAttribute('type', 'password');
    eye.style.color = '#ccc';
})