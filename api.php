<?php


    // 缓存github数据
    ini_set('user_agent','Mozilla/4.0 (compatible; MSIE 7.0; Windows NT 5.1; .NET CLR 2.0.50727; .NET CLR 3.0.04506.30; GreenBrowser)');
    $username='dateolive';
    $api_url ="https://api.github.com/users/$username/repos";  // 拼合github
    if (!file_exists("github.json")) {  // 缓存github API数据24小时
        file_put_contents("github.json", file_get_contents($api_url));
    } else if ((time() - filemtime("github.json")) > 86400) {
        file_put_contents("github.json", file_get_contents($api_url));
    }
   
?>
