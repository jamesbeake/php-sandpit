<?php

  #substr
  // $output = substr('Hello', 1, 3);
  // $output = strlen('Hello World');
  // $output = strpos('Hello World', o);
  // $output = strrpos('Hello World', o);
  // $output = ('Hello World                      ');
  // var_dump($output);
  // $trimmed = trim($output);
  // var_dump(trim($trimmed));
  //
  // $upper = strtoupper('hello world');
  // $lower = strtolower('CAN YOU HEAR ME');
  // $ucwords = ucwords('can you hear me');
  // $text = 'Hello World';
  // $output = str_replace('World', 'Everyone', $text);

  // $val = '22';
  // $output = is_string($val);
  //
  // $values = array(true, false, null, 'abc', 34, '34', 22.4, '22.4', '', ' ', 0, '0');
  //
  // foreach ($values as $value) {
  //   if(is_string($value)){
  //     echo "{$value} is a string<br>";
  //   } else {
  //     echo "{$value} is not a string<br>";
  //   }
  // }

  $string = "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.";
  $compressed = gzcompress($string);
  // echo $compressed;

?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <p>
      <?php
        $gzun = gzuncompress($compressed);
        echo "String?:: {$gzun}";
      ?>
    </p>
    <!-- <h1>
      <?php echo "lower:: {$lower}"; ?>
    </h1>
    <h1>
      <?php echo "ucwords:: {$ucwords}"; ?>
    </h1> -->
  </body>
</html>
