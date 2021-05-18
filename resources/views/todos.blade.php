<!doctype html>
<html lang="en">
<link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}" >
    <head>
        <meta charset="utf-8">
        <title>Todos</title>
        <link rel="shortcut icon" type="image/x-icon" href="icon.ico">
        <meta name="description" content="HTML, PHP, JSON, REST API">
        <style>table, th, td {border: 1px solid black;}</style>
    </head>
<body>

    <table class="styled-table">
        <tr>
            <th>User ID:</th>
            <th>ID:</th>
            <th>Title:</th>
            <th>Completed</th>
        </tr>
        <?php foreach ($arr_body as $value) {?>
            <tr class="active-row">
                <td><?php echo $value->userId ?> </td>
                <td><?php echo $value->id ?> </td>
                <td><?php echo $value->title ?> </td>
                <td><?php echo $value->completed ?> </td>
            </tr>
        <?php }?>
   </table>
