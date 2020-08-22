<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>github</title>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
<div class="container">
<?php
    require_once('api.php');
    $json = file_get_contents('github.json');
    $data=json_decode($json,true);
    $length=sizeof($data);   
    for($i=0;$i<$length;$i++)
    {
?>
  <div class="card">
    <div class="imgBx">
      <img src="./github.svg" alt="">
    </div>
    <div class="contentBx">
      <h2><?php echo $data[$i]['name'] ?></h2>
      <h3 class="new-item-badge"><?php 
      if($data[$i]['language']==NULL)
      echo "NULL"; 
      else echo  $data[$i]['language'];
      ?></h3>
      <h4><?php echo $data[$i]['stargazers_count'] ?> stars / <?php echo $data[$i]['forks'] ?> forks</h4>
      <p><?php 
      if($data[$i]['description']==NULL)
      echo "欢迎来到github个人仓库页面，各位大佬给个star吧"; 
      else echo  $data[$i]['description'];
      ?></p>
      <a href="<?php echo $data[$i]['html_url'] ?>"><span>Read More</span></a>
    </div> 
  </div>
  <?php } ?>
</div>

    </body>
</html>
