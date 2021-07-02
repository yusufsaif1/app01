<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    {{-- <div class="container">
    <h1>Session is set as {{session('name')}}</h1>
    <a href="logout"><button>logout</button></a>
    <h1>flush session {{session('status')}}</h1>
    </div> --}}

    <div>
        <table border="1px solid red">
            <tr>
                <td>ID</td>
                <td>NAME</td>
                <td>SALARY</td>
                <td>ADDRESS</td>
            </tr>
            @foreach ($data as $item)
            <tr>
               <td>{{$item->id}}</td>
               <td>{{$item->ENAME}}</td>
               <td>{{$item->ESAL}}</td>
               <td>{{$item->EADDR}}</td>
            </tr>
            @endforeach

        </table>
       
    </div>
</body>
</html>