(function () {
  const body = document.getElementById('body');
  const form = document.getElementById('form-login');

  form.onsubmit = function(event) {
    event.preventDefault();
    const email = form[0];
    const password = form[1];
    const password2 = form[2];
    const username = form[3];
    const button = form[4];

    if (password.value !== password2.value) {
      alert('Senhas precisam ser iguais! 👍');
      return;
    }

    email.disabled = true;
    password.disabled = true;
    password2.disabled = true;
    username.disabled = true
    button.disabled = true;
    password2.value = '';
    button.innerText = 'Carregando';
    body.classList = 'wait';

    setTimeout(function () {
      email.disabled = false;
      password.disabled = false;
      password2.disabled = false;
      username.disabled = false
      button.disabled = false;
      button.innerText = 'Entrar';
      body.classList = '';
    }, 2000);

  }
})()
