<?php $this->layout('Base', [
    'title' => 'Registrar | Minhas Horas',
    'assets' => $assets,
    'stylesheets' => [
      'css/login.css',
    ]
]); ?>
<main>
  <form class="form-login" id="form-register">
    <h1 class="form-login__title">Registrar</h1>
    <label class="form-login__label" for="email">Email</label>
    <input class="form-login__input" type="email" name="email" id="email"
      placeholder="Seu email aqui 📬" required
    >
    <label class="form-login__label" for="password">Senha</label>
    <input class="form-login__input" type="password" name="password" id="password"
      placeholder="Aqui sua senha 🙈" required
    >
    <label class="form-login__label" for="password2">Confirmar Senha</label>
    <input class="form-login__input" type="password" name="password2" id="password2"
      placeholder="Vê se erra com a de cima 👍" required
    >
    <label class="form-login__label" for="username">Usuário</label>
    <input class="form-login__input" type="text" name="username" id="username"
      placeholder="Como posso te chamar? 🤔" required
    >
    <div class="form-login__footer">
      <a class="form-login__register" href="/login">Já tem conta?</a>
      <button class="form-login__button">Entrar</button>
    </div>
  </form>
</main>
<script src="<?= $this->e($assets) ?>js/register.js"></script>
