const form = document.getElementById('myForm');
const nameInput = document.getElementById('name');
const emailInput = document.getElementById('email');
const passwordInput = document.getElementById('password');

form.addEventListener('submit', function(event) {
  event.preventDefault(); // prevent the default form submission behavior

  // check if the name field is empty
  if (nameInput.value.trim() === '') {
    alert('Please enter your name.');
    nameInput.focus();
    return false;
  }

  // check if the email field is empty and if it's a valid email format
  const emailValue = emailInput.value.trim();
  const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
  if (emailValue === '') {
    alert('Please enter your email address.');
    emailInput.focus();
    return false;
  } else if (!emailRegex.test(emailValue)) {
    alert('Please enter a valid email address.');
    emailInput.focus();
    return false;
  }

  // check if the password field is empty
  if (passwordInput.value.trim() === '') {
    alert('Please enter your password.');
    passwordInput.focus();
    return false;
  }

  // if all fields are valid, submit the form
  form.submit();
});