

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>アンケートフォーム</title>
</head>
<body>
    <?php
    if($_SERVER["REQUEST_METHOD"] == "POST")
    {
        $age = $_POST["age"];
        $gender = $POST["gender"];
        $satisfaction = $POST["satisfaction"];
        $evacuation = $POST["evacuation"];
        $purpose = $POST["purpose"];
        $good = $POST["good"];
        $express = $POST["express"];
        $message = $POST["message"];
    }
    ?>
</body>
</html>