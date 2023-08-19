<?php require base_path('views/partials/head.php') ?>

<main>
  <h1>Edit Task</h1>
  <form method="POST" action="/task">
    <input type="hidden" name="_method" value="PATCH">
    <input type="hidden" name="id" value="<?= $task['id'] ?>">

    <div>
      <label for="title">Title</label>
      <div>
        <input type="text" id="title" name="title" rows="3"
          value="<?= $task['title'] ?? '' ?>">
        </input>
        <?php if (isset($errors['title'])) : ?>
            <p><?= $errors['title'] ?></p>
        <?php endif; ?>
      </div>

      <label for="description">Description</label>
      <div>
        <textarea name="description" id="description" cols="30" rows="10"><?= $task['description'] ?? '' ?></textarea>
        <?php if (isset($errors['description'])) : ?>
            <p><?= $errors['description'] ?></p>
        <?php endif; ?>
      </div>

      <label for="status">Status</label>
      <div>
        <select name="status" id="status">
          <option value="In Process" <?= $task['status'] === 'In Process' ? 'selected' : '' ?>>In Process</option>
          <option value="To Do" <?= $task['status'] === 'To Do' ? 'selected' : '' ?>>To Do</option>
          <option value="Done" <?= $task['status'] === 'Done' ? 'selected' : '' ?>>Done</option>
        </select>
        <?php if (isset($errors['status'])) : ?>
            <p><?= $errors['status'] ?></p>
        <?php endif; ?>
      </div>
    </div>
    <div style="padding: 20px 0;">
      <button
        type="submit"
      >
          Save
      </button>
      <a href="/tasks">
        <button
          type="button"
        >
          Cancel
        </button>
      </a>
    </div>
  </form>
  <a href="/tasks">
    <button>Back</button>
  </a>
</main>

<?php require base_path('views/partials/footer.php') ?>