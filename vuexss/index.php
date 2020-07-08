<html>
  <head>
    <meta charset="utf-8">
    <title>Vue.js XSS</title>
    <script src="vue.min.js"></script>
  </head>
  <body>
    <div id="app">
      <h3>Vue.js</h3>
      <p>
        <div>
          <input v-model="message">
        </div>
        <div>
          {{message}}
        </div>
      </p>
      <h3>Old style</h3>
      <p>
        <form>
          <input name="message" value="<?php echo htmlspecialchars($_GET["message"], ENT_QUOTES, "UTF-8"); ?>">
          <button type="submit">Submit</button>
        </form>
        <div>
          <?php echo htmlspecialchars($_GET["message"], ENT_QUOTES, "UTF-8"); ?>
        </div>
      </p>
    </div>
    <script>
var app = new Vue({
  el: '#app',
  data: {
    message: 'Hello Vue!'
  }
});
    </script>
  </body>
</html>
