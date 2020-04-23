<html>
<header>
    <div>
        <h1>Full User List:</h1>
    </div>

</header>

<body>
    <div>
        <?php
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, "https://traceywangweb.com/expose.php");
        curl_setopt($ch, CURLOPT_HEADER, false);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER,1);
        $contents = curl_exec($ch);

        curl_setopt($ch, CURLOPT_URL, "http://traceywangweb.com/expose.php");
        curl_setopt($ch, CURLOPT_HEADER, false);
        $contents = $contents . ',' . curl_exec($ch);

        curl_close($ch);

        foreach(explode(',', $contents) as $content){
            echo $content."<br/>";
        }

        ?>
    </div>
</body>

</html>