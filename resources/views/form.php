<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
    </head>
    <body>
        <?php 
            echo Form::open(array('url' => 'foo/bar'));
                echo Form::text('username', 'Username');
                echo '<br>';

                echo Form::text('email', 'example@gmail.com');
                echo '<br>';

                echo Form::checkbox('name', 'value');
                echo '<br>';

                echo Form::radio('name', 'value');
                echo '<br>';

                echo Form::file('image');
                echo '<br>';

                echo Form::select('size', array('L' => 'Large', 'S' => 'Small'));
                echo '<br>';

                echo Form::submit('Click me!');
            echo Form::close();
        ?>
    </body>
</html>