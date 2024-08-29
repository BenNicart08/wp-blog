<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
     <?php wp_head()?>
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
    />
  </head>
  <body class="dark">
    <header class="header bg--dark clr--light">
      <div class="container">
        <div class="wrapper flex justify--between align--center">
          <div class="header__menu flex align--end">
            <div class="branding mr--2">
              <a href="<?php echo site_url('/')?>">BLOG</a>
            </div>
            <nav class="header__nav">
              <ul>
                <li><a href="#">About</a></li>
                <li><a href="#">Contact</a></li>
              </ul>
            </nav>
          </div>

          <div class="header__switch">
            <button id="themeToggle"><i class="fas fa-sun"></i></button>
          </div>
        </div>
      </div>
    </header>