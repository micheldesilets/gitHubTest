<?php
$users = array(
  (object)array('username' => 'Michel', 'password' => 'secret'),
  (object)array('username' => 'Luc', 'password' => 'spaniard'),
  (object)array('username' => 'Pierre', 'password' => 'secret'),
);

function matches($a, $b)
{
  return $a == $b;
}

function authenticate($users, $username, $password)
{
  for ($i = 0; $i < count($users); $i++) {
    if (matches($users[$i]->username, $username) && matches($users[$i]->password, $password)) {
      return true;
    }
  }
  return false;
}

$isAuthenticated = authenticate($users, 'Luc', 'spniard');
if ($isAuthenticated) {
  echo 'Welcome, known user!';
} else {
  echo 'User is really not at all authenticated.';
}
