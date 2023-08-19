<?php require('partials/head.php') ?>
<?php require('partials/nav.php') ?>

<main>
  <h1>TODO APP</h1>
  <?php if (isset($_SESSION['user'])) : ?>
    <ul>
      <li>
        <a href="/tasks">Tasks</a>
      </li>
    </ul>
  <?php endif; ?>
</main>

<?php require('partials/footer.php') ?>