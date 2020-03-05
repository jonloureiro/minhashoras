<?php $this->layout('Base', [
    'title' => 'Fazer Login | Minhas Horas',
    'assets' => $assets,
    'stylesheets' => [
      'css/login.css'
    ]
]); ?>
<main>
  <form class="form-login" id="form-login">
    <h1 class="form-login__title">Fazer Login</h1>
    <label class="form-login__label" for="email">Email</label>
    <input class="form-login__input" type="email" name="email" id="email"
      placeholder="Seu email aqui 📬" required
    >
    <label class="form-login__label" for="password">Senha</label>
    <input class="form-login__input" palceholder="E sua senha" type="password"
      placeholder="Aqui sua senha 🙈" name="password" id="password" required
    >
    <div class="form-login__footer">
      <a class="form-login__register" href="/register">Cadastrar-se?</a>
      <button class="form-login__button">Entrar</button>
    </div>
  </form>
</main>
<script src="<?= $this->e($assets) ?>js/login.js"></script>
