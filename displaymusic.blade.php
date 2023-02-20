<!DOCTYPE html>    
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width, initial-scale=1.0">
    <title>DisplayProducts</title>
</head>
<body>
<table border='2px'>
        <tr>
        <th>MusicTitle</th>
        <th>Genre</th>
        <th>MusicFile</th>
        </tr>
    @foreach($tabledata as $data)
    <tr>
        
        <td>{{$data->MusicTitle}}</td>
        <td>{{$data->genre}}</td>
        <td>{{$data->MusicFile}}</td>
        <td> 
               <a href='delete/{{$data->id}}'>Delete</a>
        </td>
        <td> 
               <a href='update/{{$data->id}}'>update</a>
        </td>
    </tr>
    @endforeach

    </table>
</body>
</html>