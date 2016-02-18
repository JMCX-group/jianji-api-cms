<?php
/**
 * Created by PhpStorm.
 * User: lyx
 * Date: 16/2/18
 * Time: 下午6:49
 */
?>

<html>
<body>
<h1>测试,前方高能测试!!</h1>
<div class="result"></div>
</body>
</html>


<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.1/js/bootstrap.min.js"></script>
<script>
    $.post("api/test", {uid:"7"}, function(data) {
        $(".result").html(JSON.stringify(data));
    }, "json");
</script>