(function () {
  'use strict';
  const body = document.getElementById('body');
  const form = document.getElementById('form-login');

  form.onsubmit = function(event) {
    event.preventDefault();
    const email = form[0];
    const password = form[1];
    const button = form[2];

    email.disabled = true;
    password.disabled = true;
    button.disabled = true;
    password.value = '';
    button.innerText = 'Carregando';
    body.classList = 'wait';

    setTimeout(function () {
      email.disabled = false;
      password.disabled = false;
      button.disabled = false;
      button.innerText = 'Entrar';
      body.classList = '';
    }, 2000);
  }
})()
