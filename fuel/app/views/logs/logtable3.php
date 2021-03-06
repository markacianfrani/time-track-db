<?php

/*
 * This view builds the table used to display information about logs.
 * This view is designed to be constructed based on an AJAX query.
 */
?>
<?php foreach ($users as $user): ?>
<div class='user_info content_box'>

  <?php //if there is more than one user, add a header with
        //the user's name to the display ?>
  <?php if (count($users) > 1): ?>
    <div class='name'>
      <h1><?php echo $user['name'] ?></h1>
    </div>
  <?php endif?>

  <?php //*************    'table' header    ***********************?>
  <div class='head'>
      <span class='day'><h3>Day</h3></span>
      <?php if($full):?>
      <span class='log_range'><h3>Logs</h3></span>
      <?php endif?>
      <span class='log_time'><h3>Time</h3></span>
      <?php if($full && $showtype):?>
      <span class='log_type'><h3>Type</h3></span>
      <?php endif?>
      <?php if($admin && $full) :?>
        <span class='controls'><h3>Controls</h3></span>
      <?php endif?>
  </div>
  <div class='divider'><hr></div>

  <?php //Insert HTML content for displaying info about each day
      foreach($user['day_views'] as $day_view){
        echo $day_view;
      }
  ?>
    
  <div class='total_display'>
    <h3>Total: <?php echo $user['period_total']?></h3>
  </div>
</div>

<?php endforeach //end for each user?>