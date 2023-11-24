<?php
session_start();
if (!isset($_SESSION["user"])) {
   header("Location: login.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cleaning Service</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.16/dist/tailwind.min.css" rel="stylesheet">
    <style>
        body {
            background-image: url(q.jpg);
            background-size: cover;
            background-repeat: no-repeat;
        }
    </style>
</head>
<body class="flex items-center justify-center h-screen">
    <div class="bg-white p-10 rounded shadow w-1/3">
        <h2 class="text-2xl mb-5 text-black">Start Your Subscription</h2>
        <form class="mb-5">
            <label class="block mb-2">Approximation of Waste</label>
            <input type="text" class="w-full p-2 mb-4 border border-gray-200 rounded" placeholder="Enter waste approximation">
          <button type="submit" class="w-full bg-black text-white p-2 rounded"> <a href="pay.html" target="_parent">Start Your Subscription</a></button>
        </form>

        <h2 class="text-2xl mb-5 text-black">Urgent Pickup</h2>
        <form>
            <label class="block mb-2">Enter Quantity</label>
            <input type="text" class="w-full p-2 mb-4 border border-gray-200 rounded" placeholder="Enter quantity">
            <button type="submit" class="w-full bg-black text-white p-2 rounded"><a href="pay.html" target="_parent">Pay to Proceed</button></a>
        </form>
    </div>
</body>
</html>
