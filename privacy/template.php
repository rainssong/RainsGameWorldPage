﻿<!DOCTYPE html>
<html lang="en">

<head>
  <?php require_once '../config.php'; ?>
  <?php //include_once '../style.php'; 
  ?>
  <title>RainsGameWorld</title>
  <script src="../js/marked.min.js"></script>
  <script src="../js/jquery.min.js"></script>
</head>

<body>
  <div class="container">
    <div class="row">
      <button onclick="loadMD('zh')">中文</button>
      <button onclick="loadMD('en')">English</button>
      <hr>
      <div class="row">
        <div class="col-md-12">
          <div id="article"></div>
          <hr>
        </div>
      </div>
    </div>
</body>
<script>
  function loadMD(lan) {
    $.get(title + "_" + lan + ".md", function(data, status) {
      document.getElementById('article').innerHTML = marked.parse(data);
    });
  }
  language = (navigator.browserLanguage || navigator.language).toLowerCase()
  if (language == "zh-cn")
    loadMD("zh");
  else
    loadMD("en")
</script>

</html>