<html>
    <body>
        <?php
            echo Form::open(array('url' => '/uploadfile', 'files' => 'true'));
            echo 'Select the file to upload.';
            echo Form::file('image');
            echo Form::submit('Upload file');
            echo Form::close();
        ?>
    </body>
</html>