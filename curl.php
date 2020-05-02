<html>
<header>
    <div>
        <h1>Full User List from two database:</h1>
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

        curl_setopt($ch, CURLOPT_URL, "https://www.laogeebai.com/db/userapi.php");
        curl_setopt($ch, CURLOPT_HEADER, false);
        $contents = $contents . ',' . curl_exec($ch);

        curl_close($ch);

        foreach(explode(',', $contents) as $content){
            echo $content."<br/>";
        }

        ?>
    </div>

    <a href="./contact.php">Go back</a>
</body>

</html>