<html>
    <head>
        <title> PHP lydės ir <?php print date('D', (strtotime ('+1 day'))); ?>!</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <h1>
            Giedrė - PHP su manim buvo ir <?php print date('H', (strtotime ('-1 hour'))) . ' valandą '; ?>
        </h1>
        <p>
            <?php print date ('Y', (strtotime ('+1 year'))); ?> už kalnų!
        </p>
    </body>
</html>

