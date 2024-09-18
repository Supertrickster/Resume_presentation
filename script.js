// Add some interactivity to the page
//  const navLinks = document.querySelectorAll('nav a');

//  navLinks.forEach(link => {
//      link.addEventListener('click', event => {
//         event.preventDefault();
//        const target = event.target.getAttribute('href');
//                document.querySelector(target).scrollIntoView({ behavior: 'smooth' });
//      });
//  });


const user_email = document.getElementById("txtmail");
const email_pattern = /^[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$/i;

function ValidateFields() {
  const successIcon = document.querySelector('.success-icon');
  const failureIcon = document.querySelector('.failure-icon');

  if (user_email.value.trim() === "" || !email_pattern.test(user_email.value.trim())) {
    alert("Invalid Email");
    successIcon.style.visibility = 'hidden';
    failureIcon.style.visibility = 'visible';
  } else {
    successIcon.style.visibility = 'visible';
    failureIcon.style.visibility = 'hidden';
  }
}
user_email.addEventListener('blur', ValidateFields);