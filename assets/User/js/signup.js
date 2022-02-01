const togglePassword=document.querySelector('#togglePassword');
const password=document.querySelector('#password');
const firstName=document.querySelector('.firstname');
const lastName=document.querySelector('.lastname');
const form=document.querySelector('form');
const usernamepattern=/^[A-Za-z]{3,50}/;////Regular expression

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
//For Name validation
form.addEventListener('submit',(e)=>{
    e.preventDefault();
//  console.log(e.target);
    if(usernamepattern.test(firstName.value) && usernamepattern.test(lastName.value))
    {
        // console.log("valid");
        Swal.fire({
            position: 'top-end',
            icon: 'success',
            title: 'Successful',
            showConfirmButton: false,
            timer: 1500
          });
    }
    else
    {
        // console.log("invalid");
        Swal.fire({
            icon: 'error',
            title: 'Oops...',
            text: 'Provide Valid User Name !!',
          });
    }
});
