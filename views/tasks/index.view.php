<?php require base_path('views/partials/head.php') ?>

<main>
  <h1>Tasks</h1>
  <div>
    <a href="/tasks/create">
      <button>New Task</button>
    </a>
  </div>
  <div>
    <ul>
      <?php foreach ($tasks as $task) : ?>
        <li>
            <a href="/task?id=<?= $task['id'] ?>">
                <?= htmlspecialchars($task['title']) ?>
            </a>
        </li>
      <?php endforeach; ?>
    </ul>
  </div>
  <a href="/">
    <button>Back</button>
  </a>
</main>

<?php require base_path('views/partials/footer.php') ?>