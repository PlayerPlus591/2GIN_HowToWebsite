<!--Filipe-->
<?php if (isset($reply_data)): ?>
<div class="reply">
  <h4><?php echo htmlspecialchars($reply_data['username'], ENT_QUOTES, 'UTF-8'); ?></h4>
  <p><?php echo htmlspecialchars($reply_data['date'], ENT_QUOTES, 'UTF-8'); ?></p>
  <p><?php echo htmlspecialchars($reply_data['comment'], ENT_QUOTES, 'UTF-8'); ?></p>
  <?php $nested_reply_id = $reply_data['id']; ?>
  <button class="reply" onclick="reply(<?php echo $nested_reply_id; ?>, '<?php echo htmlspecialchars($reply_data['username'], ENT_QUOTES, 'UTF-8'); ?>');">Reply</button>
  
  <?php
    // Fetch and display nested replies
    $nested_replies = mysqli_query($connection, "SELECT * FROM tb_data WHERE reply_id = $nested_reply_id");
    if (mysqli_num_rows($nested_replies) > 0) {
      echo '<div class="replies">';
      while ($nested_reply_data = mysqli_fetch_assoc($nested_replies)) {
        // Include the reply.php to render nested replies
        include 'reply.php';
      }
      echo '</div>';
    }
  ?>
</div>
<?php endif; ?>
