<?php
/**
Sora
 */
?>
<article class="<?php print implode(' ', $classes); ?> clearfix"<?php print backdrop_attributes($attributes); ?> role="article">
  <header class="comment-header">
    <div class="attribution">
      <?php print $user_picture; ?>

      <div class="submitted">
      	<?php print $author; ?> / <?php print $created; ?> / <?php print $permalink; ?>
      </div>
    </div>
  </header>

  <div class="comment-text">
    <?php if ($new): ?>
      <span class="new"><?php print $new; ?></span>
    <?php endif; ?>

    <div class="content"<?php print backdrop_attributes($content_attributes); ?>>
      <?php
        hide($content['links']);
        print render($content);
      ?>
    </div>

    <footer class="comment-footer">
      <?php if ($signature): ?>
      <div class="user-signature clearfix">
        <?php print $signature; ?>
      </div>
      <?php endif; ?>

      <nav><?php print render($content['links']); ?></nav>
    </footer>

  </div>
</article>
