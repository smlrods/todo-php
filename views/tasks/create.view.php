<?php require base_path('views/partials/head.php') ?>

<main>
  <h1>New Task</h1>
  <form method="POST" action="/tasks">
    <div>
      <label for="title">Title</label>
      <div>
        <input type="text" id="title" name="title" rows="3"
          value="<?= $_POST['title'] ?? '' ?>">
        </input>
        <?php if (isset($errors['title'])) : ?>
            <p><?= $errors['title'] ?></p>
        <?php endif; ?>
      </div>

      <label for="description">Description</label>
      <div>
        <textarea name="description" id="description" cols="30" rows="10"><?= $_POST['description'] ?? '' ?></textarea>
        <?php if (isset($errors['description'])) : ?>
            <p><?= $errors['description'] ?></p>
        <?php endif; ?>
      </div>

      <label for="status">Status</label>
      <div>
        <select name="status" id="status">
          <option value="In Process">In Process</option>
          <option value="To Do">To Do</option>
          <option value="Done">Done</option>
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
    </div>
  </form>
  <a href="/tasks">
    <button>Back</button>
  </a>
</main>

<?php require base_path('views/partials/footer.php') ?>