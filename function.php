<?php
function ShoppingCost($order) {
    $totalWeight = 0;
    foreach ($order as $item) {
      $totalWeight += $item['weight'] * $item['quantity'];
    }
    
    if ($totalWeight < 1) {
      $shippingCost = 5;
      echo "<p>Your shipping cost is $shippingCost</p>";
    } else if ($totalWeight < 5) {
      $shippingCost = 10;
      echo "<p>Your shipping cost is $shippingCost</p>";
    } else if ($totalWeight < 20) {
      $shippingCost = 20;
      echo "<p>Your shipping cost is $shippingCost</p>";
    } else {
      $shippingCost = 50;
      echo "<p>Your shipping cost is $shippingCost</p>";
    }
    
    $orderTotal = 0;
    foreach ($order as $item) {
      $orderTotal += $item['price'] * $item['quantity'];
    }
    
    echo "<p>Your order total is $orderTotal</p>";
    echo "<p>Your total cost with shipping is " . ($orderTotal + $shippingCost) . "</p>";
  }
  