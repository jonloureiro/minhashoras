<?php $this->layout('Base', [
    'title' => 'Login | Minhas Horas',
    'stylesheets' => [
      'css/login.css'
    ]
]); ?>
<body>
  <main>
    <form class="form-login">
      <h1 class="form-login__title">Minhas Horas</h1>
      <label class="form-login__label" for="email">Email</label>
      <input class="form-login__input" type="email" name="email" id="email"
        placeholder="Seu email aqui 📬"
      >
      <label class="form-login__label" for="password">Senha</label>
      <input class="form-login__input" palceholder="E sua senha" type="password"
        placeholder="Aqui sua senha 🙈" name="password" id="password"
      >
      <button class="form-login__button">Entrar</button>
    </form>
  </main>
</body>
