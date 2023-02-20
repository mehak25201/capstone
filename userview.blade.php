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
        <th>UserId</th>
        <th>User_Name</th>
        <th>Email</th>
        <th>Contact_Info</th>
        <th>Dob</th>
        </tr>
    @foreach($tabledata as $data)
    <tr>
        <td>{{$data->id}}</td>
        <td>{{$data->User_Name}}</td>
        <td>{{$data->Email}}</td>
        <td>{{$data->Contact_Info}}</td>
        <td>{{$data->Dob}}</td>
        <td> 
               <a href='delete/{{$data->id}}'>Delete</a>
        </td>
    </tr>
    @endforeach

    </table>
</body>
</html>