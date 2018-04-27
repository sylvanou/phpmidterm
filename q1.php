<?php

// Part 1
function isBitten() {
  return (rand(0,1) == 1) ? 'TRUE' : 'FALSE';
}

// Part 2
echo (isBitten() == 'TRUE' ? 'Lion bit your finger!' : 'Lion did not bite your finger!');