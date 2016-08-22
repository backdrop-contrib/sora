<?php
/**
Sora
 */
?>
<article id="node-<?php print $node->nid; ?>" class="<?php print implode(' ', $classes); ?> clearfix"<?php print backdrop_attributes($attributes); ?>>

  <?php if (!$page || $display_submitted): ?>
  <header>
    <?php print render($title_prefix); ?>
    <?php if (!$page): ?>
      <h2><a href="<?php print $node_url; ?>"><?php print $title; ?></a></h2>
    <?php endif; ?>
    <?php print render($title_suffix); ?>

    <?php if ($display_submitted): ?>
      <div class="meta submitted">
        <?php print $user_picture; ?>
        <?php print $submitted; ?>
      </div>
    <?php endif; ?>
  </header>
  <?php endif; ?>

  <div class="content clearfix"<?php print backdrop_attributes($content_attributes); ?>>
    <?php

      hide($content['links']);
      print render($content);
    ?>
  </div>

  <?php

    if ($teaser || !empty($comments['comment_form'])) {
      unset($content['links']['comment']['#links']['comment-add']);
    }

    $links = render($content['links']);
    if ($links):
  ?>
    <class="link-wrapper">
      <?php print $links; ?>
  <?php endif; ?>

  <?php if ($page && isset($comments['comments'])): ?>
    <section class="comments">
      <?php if ($comments['comments']): ?>
        <h2 class="title"><?php print t('Comments'); ?></h2>
        <?php print render($comments['comments']); ?>
      <?php endif; ?>

      <?php if ($comments['comment_form']): ?>
        <h2 class="title comment-form"><?php print t('Add comment'); ?></h2>
        <?php print render($comments['comment_form']); ?>
      <?php endif; ?>
    </section>
  <?php endif; ?>

</article>