const container = document.querySelector('.container');
const SignupLink = document.querySelector('.SignupLink');
const SigninLink = document.querySelector('.SigninLink');

SignupLink.addEventListener('click', () => {
    container.classList.add('active');
});

SigninLink.addEventListener('click', () => {
    container.classList.remove('active');
});
