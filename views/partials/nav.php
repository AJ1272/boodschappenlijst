 <div class="topnav">
  <a <?= urlIs($_SERVER["REQUEST_URI"],"/")? 'class="active"': '';?> href="/">Home</a>
  <a <?= urlIs($_SERVER["REQUEST_URI"],"/create")? 'class="active"': '';?> href="/create">Nieuw Item invullen</a>
  <a <?= urlIs($_SERVER["REQUEST_URI"],"/contact")? 'class="active"': '';?> href="/contact">Contact</a>
  <a <?= urlIs($_SERVER["REQUEST_URI"],"/about")? 'class="active"': '';?> href="/about">About</a>
</div>