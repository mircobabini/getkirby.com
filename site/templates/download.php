<?php snippet('header') ?>

<main class="main grid" role="main">
  <h1 class="alpha"><?php echo $page->title() ?></h1>

  <article class="col-4-6 four">
    <p class="gamma subtitle"><?php echo $page->subtitle() ?></p>
    <div class="text">
      <?php echo kirbytext($page->text()) ?>
    </div>
  </article>

  <aside class="col-2-6 last download-meta">
    <h2 class="gamma">Learn more!</h2>
    <ul>
      <li><a href="<?php echo $page->link() ?>">Download</a></li>
      <li><a href="<?php echo $page->docs() ?>">Documentation</a></li>
      <?php if($page->tutorial() != ''): ?>
      <li><a href="<?php echo url() ?><?php echo $page->tutorial() ?>">Tutorial</a></li>
      <?php endif ?>
    </ul>
    <div class="text smaller">
      <?php echo kirbytext($page->description()) ?>
    </div>
    <?php if($page->author() != ''): ?>
    <small>Made by <a href="<?php echo $page->author_url() ?>"><?php echo $page->author() ?></a><?php if($page->twitter() != ''): ?> | <a href="http://twitter.com/<?php echo $page->twitter() ?>"><?php echo $page->twitter() ?></a><?php endif ?></small>
    <?php endif ?>
  </aside>

</main>

<?php snippet('footer') ?>