<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8" />
  <meta name="description" content="Find the Area" />
  <meta name="keywords" content="mths, ics2o" />
  <meta name="author" content="Adam" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" />
  <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-deep_orange.min.css" />
  <link rel="stylesheet" href="./css/style.css" />
  <link rel="apple-touch-icon" sizes="180x180" href="apple-touch-icon.png" />
  <link rel="icon" type="image/png" sizes="32x32" href="favicon-32x32.png" />
  <link rel="icon" type="image/png" sizes="16x16" href="favicon-16x16.png" />
  <link rel="manifest" href="site.webmanifest" />
  <title>Find The Area</title>
</head>

<body>
  <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
  <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
    <header class="mdl-layout__header">
      <div class="mdl-layout__header-row">
        <span class="mdl-layout-title">Area of a triangle with base and hight</span>
      </div>
    </header>
    <main class="mdl-layout__content">
      <div class="right-image">
        <img src="./images/trapezoid.svg" alt="shape image" />
      </div>
      <div class="page-content-php">
        <form action="answer.php" method="GET">
          <p class="input-description">Side 1 (b)</p>
          <div class="mdl-textfield mdl-js-textfield">
            <input class="mdl-textfield__input" type="text" pattern="-?[0-9]*(\.[0-9]+)?" name="side-1">
            <label class="mdl-textfield__label" for="base-of-triangle">Side 1 ... (mm)</label>
            <span class="mdl-textfield__error">Input is not a number!</span>
          </div>
          <p class="input-description">Side 2 (b)</p>
          <div class="mdl-textfield mdl-js-textfield">
            <input class="mdl-textfield__input" type=" text" pattern="-?[0-9]*(\.[0-9]+)?" name="side-2">
            <label class="mdl-textfield__label" for="hight-of-triangle">Side 2 ... (mm)</label>
            <span class="mdl-textfield__error">Input is not a number!</span>
          </div>
          <p class="input-description">Side 3 (b)</p>
          <div class="mdl-textfield mdl-js-textfield">
            <input class="mdl-textfield__input" type=" text" pattern="-?[0-9]*(\.[0-9]+)?" name="side-3">
            <label class="mdl-textfield__label" for="hight-of-triangle">Side 3 ... (mm)</label>
            <span class="mdl-textfield__error">Input is not a number!</span>
          </div>
          <br />
          <br />
          <input class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent" type="submit">
        </form>
      </div>
    </main>
  </div>
</body>

</html>