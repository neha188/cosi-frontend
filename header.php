<!DOCTYPE html>
 <html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>COSI</title>

  <link href="<?php echo get_template_directory_uri() ?>/assets/css/output.css" rel="stylesheet">
</head>
<body>
<header class="fixed w-full">
  <div class="bg-black py-4">
    <div class="text-white flex flex-wrap items-center justify-between max-w-screen-xl mx-auto">
      <div class="lg:col-auto">
        Open Daily: <span class="text-green-400">10am-5pm</span>
      </div>
      <div class="lg:col-auto">
        <a href="#" class="inline-flex items-center">
          Plan your Visit
        </a>

        <a href="#" class="inline-flex items-center pl-4">
          Buy Tickets
        </a>
      </div>
    </div>
  </div>
  <?php get_header('nav') ?>
</header>