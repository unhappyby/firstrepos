<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Student Management | Edit</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
    </head>
    <body>
        <form action="/edit/<?php echo $users[0]->Id; ?>" method="post">
            <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
            
            <table>
            <tr>
               <td>Name</td>
               <td>
                  <input type = 'text' name = 'stud_name' 
                     value = '<?php echo $users[0]->Name; ?>'/>
               </td>
            </tr>
            <tr>
               <td colspan = '2'>
                  <input type = 'submit' value = "Update student" />
               </td>
            </tr>
         </table>
         
        </form>
    </body>
</html>