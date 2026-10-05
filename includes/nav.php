<nav>
    <a href="home.php"    class="<?= $currentPage === 'home'    ? 'active' : '' ?>">Home</a>
    <a href="menu.php"    class="<?= $currentPage === 'menu'    ? 'active' : '' ?>">Menu</a>
    <a href="gallery.php" class="<?= $currentPage === 'gallery' ? 'active' : '' ?>">Gallery</a>
    <a href="about.php"   class="<?= $currentPage === 'about'   ? 'active' : '' ?>">About</a>
    <a href="contact.php" class="<?= $currentPage === 'contact' ? 'active' : '' ?>">Contact</a>
</nav>