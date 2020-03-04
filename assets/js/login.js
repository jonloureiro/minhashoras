(function () {
  const body = document.getElementById('body');
  const form = document.getElementById('form-login');

  form.onsubmit = function(event) {
    event.preventDefault();
    const email = form[0];
    const password = form[1];
    const button = form[2];

    password.value = '';
    button.innerText = 'Carregando';
    button.disabled = true;
    body.classList = 'wait';

    setTimeout(function () {
      button.disabled = false;
      button.innerText = 'Entrar';
      body.classList = '';
    }, 2000);

  }
})()
