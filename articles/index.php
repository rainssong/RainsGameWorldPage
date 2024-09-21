
<!DOCTYPE html>
<html lang="en">
<head>
  <?php require_once '../config.php'; ?>
  <?php include_once '../style.php'; ?>
  <title>RainsGameWorld</title>
  <script src="https://cdn.jsdelivr.net/npm/marked/marked.min.js"></script>
  <script src="../js/jquery.min.js"></script>
</head>
<body>
<div class="container">
  <?php include '../header.php'; ?>
  <div class="row center">
    <h2>原创文章</h2>
    <hr>
    <div class="row">
      <ol>
      <li><a href="article.php?title=xmds">小米电视全解析</a></li>
      <li><a href="article.php?title=tpzxsh">图片转8Bit风格的像素画</a></li>
      <li><a href="article.php?title=ddstyyjgds">喜欢大屏，电视，投影仪，激光电视（短距投影）到底选哪个？</a></li>
      <li><a href="article.php?title=tyytjp">激发潜能——家用投影调教篇</a></li>
      <li><a href="article.php?title=znjj">智能家居</a></li>
      <li><a href="article.php?title=btczd">BTC横盘震荡时如何赚钱</a></li>
      <li><a href="article.php?title=jmh3">极米H3评测</a></li>
      </ol>
      <div class="col-md-12">
        <div></div>
        
        <hr>
        <?php include '../comment/comment.html'; ?>
      </div>
    </div>
  <?php include '../bottom.html'; ?>
</div>
</body>
<?php include '../end.html'; ?>
</html>
