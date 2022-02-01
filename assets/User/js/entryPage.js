const form = document.querySelector("form");
const StudentName = document.querySelector(".name");
const StudentId = document.querySelector(".studentId");
const Department=document.querySelector('.dept');
const MakautRoll=document.querySelector('.makautRoll');
const BookId=document.querySelector('.bookId');
const usernamepattern = /^[A-Za-z]{3,50}/;



function validation() {
  //for name
  if (usernamepattern.test(StudentName.value)) {
    Swal.fire({
      position: "top-end",
      icon: "success",
      title: "Successful",
      showConfirmButton: false,
      timer: 1500,
    });
  } else {
    Swal.fire({
      icon: "error",
      title: "Oops...",
      text: "Provide Valid User Name !!",
    });
    return;
  }
}


//for validation
form.addEventListener("submit", (e) => {
  e.preventDefault();
  validation();
  form.reset();
});


