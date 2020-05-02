<!-- 输出1~99之间的偶数 -->
<ul>
  <?php for ($i = 1; $i < 100;  ++$i): ?>
    <?php if ($i % 2 == 0): ?>
      <li><?=$i?></li>
    <?php endif; ?>
  <?php endfor; ?>
</ul>
