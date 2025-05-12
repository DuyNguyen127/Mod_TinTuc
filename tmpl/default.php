<?php defined('_JEXEC') or die; ?>
<div class="mod-newsflash">
  <ul>
    <?php foreach ($items as $it): ?>
      <li>
        <a href="<?= $it['link'] ?>" target="_blank">
          <?= htmlspecialchars($it['title'], ENT_QUOTES, 'UTF-8') ?>
        </a>
        <span class="date"><?= date('d/m/Y', strtotime($it['pubDate'])) ?></span>
        <p class="excerpt"><?= htmlspecialchars(substr($it['description'], 0, 100)) ?>…</p>
      </li>
    <?php endforeach; ?>
  </ul>
</div>
