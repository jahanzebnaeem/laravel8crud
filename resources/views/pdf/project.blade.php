<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Project Report</title>
    <style type="text/css">
        table{
            width: 80%;
            margin: 0 auto;
            border: 1px solid;
        }
    </style>
</head>
<body>
    <!-- <h2>List of all the projects</h2> -->
    <table>
        <caption><h1>List of all the projects</h1></caption>
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Introduction</th>
                <th>Location</th>
                <th>cost</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($projects as $key => $project)
                <tr>
                    <td>{{$project->id}}</td>
                    <td>{{$project->name}}</td>
                    <td>{{$project->introduction}}</td>
                    <td>{{$project->location}}</td>
                    <td>{{$project->cost}}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
