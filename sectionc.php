<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <?php
function isPrime($number) {
  // Input validation (optional)
  if ($number <= 1) {
    return false; // 1 or less is not prime
  }

  // Check if even (except for 2, which is prime)
  if ($number % 2 === 0 && $number !== 2) {
    return false;
  }

  // Loop only up to the square root
  for ($i = 3; $i <= sqrt($number); $i += 2) {
    if ($number % $i === 0) {
      return false;
    }
  }

  // If no divisor found, the number is prime
  return true;
}

// Option 1: Echoing the result within the function (immediate output)
// function checkPrimeAndEcho($number) {
//   if (isPrime($number)) {
//     echo "$number is a prime number";
//   } else {
//     echo "$number is not a prime number";
//   }
// }

// // Example usage (Option 1)
// checkPrimeAndEcho(17);  // Output: 17 is a prime number

// Option 2: Echoing the result outside the function (more flexible usage)
function checkPrime($number) {
  return isPrime($number);
}

// Example usage (Option 2)
$num = $_POST['number'];
if (checkPrime($num)) {
  echo "$num is a prime number";
} else {
  echo "$num is not a prime number";
}

?>

 <div class="container">
  <form action="" method="post">
  <label for="">enter  a number</label>
  <input type="number" name="number" id="number">
  <button type="submit">enter</button>
  </form>
 </div>



</body>