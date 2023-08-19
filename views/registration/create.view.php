<?php require base_path('views/partials/head.php') ?>

<main>
  <h1>Registration</h1>

  <form action="/register" method="POST">
    <div>
      <label for="email">Email address</label>
      <input type="email" id="email" name="email" autocomplete="email" required placeholder="Email address">
    </div>
    <div>
      <label for="password">Password</label>
      <input type="password" id="password" name="password" autocomplete="current-password" required placeholder="Password">
    </div>

    <div>
      <button type="submit">
        Register
      </button>
    </div>

    <ul>
        <?php if (isset($errors['email'])) : ?>
            <li><?= $errors['email'] ?></li>
        <?php endif; ?>

        <?php if (isset($errors['password'])) : ?>
            <li><?= $errors['password'] ?></li>
        <?php endif; ?>
    </ul>
  </form>
</main>

<?php require base_path('views/partials/footer.php') ?>