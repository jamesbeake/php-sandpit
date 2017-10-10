<?php

  $loggedIn = false;

  $arr = [1,2,3,4,5];
  // echo ($loggedIn) ? 'You are logged in' : 'You are not logged in';

  // $isRegistered = ($loggedIn == true) ? true : false;
  //
  // $age = 5;
  // $score = 15;
  //
  // echo 'your score is: ' . ($score > 10 ? ($age > 10 ? 'Average' : 'Execptional') : ($age > 10 ? 'Horrible' : 'average'))
  //
  // if($loggedIn){
  //   echo 'You are logged in';
  // } else {
  //   echo ' You are not logged in';
  // }

?>


<div class="">
  <?php if($loggedIn): ?>
      <h1>Welcome User</h1>
  <?php else: ?>
      <h1>Welcome Guest</h1>
  <?php endif; ?>
</div>

<div class="">
  <?php foreach($arr as $val): ?>
    <?php echo $val . '<br>';?>
  <?php endforeach; ?>
</div>
