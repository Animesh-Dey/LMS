const togglePassword=document.querySelector('#togglePassword');
const password=document.querySelector('#password');
const text=document.querySelector('.h1');

//For Password Visibility
togglePassword.addEventListener('click',()=>{
    if(password.type==="password")
    {
        password.type="text";
    }
    else
    {
        password.type="password";
    }
});
