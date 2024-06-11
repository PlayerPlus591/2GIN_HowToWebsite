<!--Filipe-->
<div class="comment">
  <h4><?php echo htmlspecialchars($data['name'], ENT_QUOTES, 'UTF-8'); ?></h4>
  <p><?php echo htmlspecialchars($data['date'], ENT_QUOTES, 'UTF-8'); ?></p>
  <p><?php echo htmlspecialchars($data['comment'], ENT_QUOTES, 'UTF-8'); ?></p>
  <?php $reply_id = $data['id']; ?>
  <button class="reply" onclick="reply(<?php echo $reply_id; ?>, '<?php echo htmlspecialchars($data['name'], ENT_QUOTES, 'UTF-8'); ?>');">Reply</button>
  
  <?php
  // Call the renderReplies function defined in discussion.php
  renderReplies($reply_id, $connection);
  ?>
</div>

