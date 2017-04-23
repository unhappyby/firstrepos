<!DOCTYPE html>
<html lang="en">
    <head>
        <title>View Student Records</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
    </head>
    <body>
        <table border = "1">
         <tr>
            <td>ID</td>
            <td>Name</td>
            <td>Edit</td>
         </tr>
         @foreach ($users as $user)
         <tr>
            <td>{{ $user->Id }}</td>
            <td>{{ $user->Name }}</td>
            <td><a href = 'delete/{{ $user->Id }}'>Delete</a></td>
         </tr>
         @endforeach
        </table>
    </body>
</html>