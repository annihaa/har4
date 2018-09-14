<h2>Second Page</h2>
  <p>
    This is the second page.
  </p>
<h3>PHP variables</h3>
<?php
  $name='Garfield';
  $age=5;
  echo 'Name of the cat is <b> '.$name. '</b> and it is <b>'.$age'</b> years old';
 ?>
<h3>PHP array</h3>
 <?php
    $names=array('Jim' , 'Lisa' , 'Bob');
    echo 'Names from the array: <br>';
    print_r($names);
    echo '<br> Second name is: '.$names[1];
  ?>
<h3>PHP assosiative array</h3>
<?php
    $person=array(
      array("fname"=>'Jim', "lname"=>'Smith'),
      array("fname"=>'Lisa', "lname"=>'Simpson'),
      array("fname"=>'Bob', "lname"=>'Jones')
);
?>
All person: <br>
<?php print_r($person); ?>
<p>
  Latnames: <br>
  <?php
    foreach ($person as $rivi) {
      echo $rivi['lname'].'<br>';
    }
   ?>
 </p>
