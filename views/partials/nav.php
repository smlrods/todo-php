<div>
  <?php if(isset($_SESSION['user'])) : ?>
    <button type="button" onclick="document.querySelector('#delete-form').submit()">Log out</button>
  <?php else : ?>
    <a href="/login">
      <button>Log in</button>
    </a>
    <a href="/register">
      <button>Register</button>
    </a>
  <?php endif; ?>

  <form id="delete-form" class="hidden" method="POST" action="/session">
    <input type="hidden" name="_method" value="DELETE">
  </form>
</div>