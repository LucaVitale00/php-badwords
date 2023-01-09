<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php Badwords</title>
</head>

<body>
    <h1>
        <?php
        $title = "Lorem Ipsum PHP";
        echo $title;
        ?>
    </h1>

    <p>
        <?php
        $LoremIpsum = "Lorem ipsum dolor sit amet. Sit nobis recusandae sed maxime voluptatum aut laboriosam voluptatem vel ratione perferendis sit tenetur sunt. Qui deleniti rerum est facilis rerum eum doloribus            exercitationem est nihil pariatur? Cum magnam nostrum ut galisum quam sit exercitationem aliquam vel quas vitae.";
        echo $LoremIpsum;
        ?>
    </p>

    <span>
        <?php
        echo "La lunghezza del testo è di " . strlen($LoremIpsum) . " caratteri";
        ?>
    </span>

    <p>
        <?php
        $censura = $_GET['parola'];
        $NewLorem = str_replace($censura, "***", $LoremIpsum);
        echo $NewLorem;
        ?>
    </p>

    <span>
        <?php
        echo "La lunghezza del testo è di " . strlen($NewLorem) . " caratteri";
        ?>
    </span>
</body>

</html>