<?php
  function h($s) {
    return htmlspecialchars($s, ENT_QUOTES, 'UTF-8');
  }
  $ver = isset($_GET['ver']) ? $_GET['ver'] : '15';
?>
<!DOCTYPE html>
<html ng-app>
  <head>
    <title>AngularJS test</title>
    <script src="angular_<?php echo h((int)$ver) ?>.min.js"></script>
  </head>
  <body>
    <div>
      AngularJS version: <?php echo h($ver) ?>
    </div>
    <ul>
      <li><a href="?ver=12">1.2</a></li>
      <li><a href="?ver=15">1.5</a></li>
      <li><a href="?ver=16">1.6</a></li>
    </ul>
    <hr>
    <div>
      <input type="text" ng-model="yourName" placeholder="Enter a name here">
    </div>
    <div>
      Hello {{yourName}}!</h1>
    </div>
    <div style="color: white" ng-non-bindable>
      AngularJS version: <?php echo h($ver) ?>
    </div>
  </body>
</html>
