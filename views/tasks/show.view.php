<?php require base_path('views/partials/head.php') ?>

<main>
  <h1>Task: <?= $task['title'] ?></h1>
  <div>
    <a href="/task/edit?id=<?= $task['id'] ?>">
      <button>Edit</button>
    </a>
    <button type="button" onclick="document.querySelector('#delete-form').submit()">Delete</button>
  </div>
  <div>
    <h3>Description:</h3>
    <p><?= $task['description'] ?></p>
  </div>
  <div>
    <h3>Status: </h3>
    <p><?= $task['status'] ?></p>
  </div>

  <form id="delete-form" class="hidden" method="POST" action="/task">
    <input type="hidden" name="_method" value="DELETE">
    <input type="hidden" name="id" value="<?= $task['id'] ?>">
  </form>
  <a href="/tasks">
    <button>Back</button>
  </a>
</main>

<?php require base_path('views/partials/footer.php') ?>