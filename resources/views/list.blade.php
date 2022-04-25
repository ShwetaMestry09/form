
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>View Feedback</title>
    <!-- Custom styles for this template-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>   
  
<center>
        <div class="overflow-x:auto;"> 
        <table class="table";>
        <thead>
            <tr class="table-primary">
                <th scope="col">id</th>
                <th scope="col">full_name</th>
                <th scope="col">email</th>
                <th scope="col">phone_number</th>
                <th scope="col">college_name</th>
                <th scope="col">adress</th>
                <th scope="col">skills</th>
                <th scope="col">pc</th>
                <th scope="col">wifi</th>
                <th scope="col">edu</th>
                <!--new-->
                <th scope="col">date_time</th>
            </tr>
        </thead>
        
@foreach($facts as $fact)
        <tr>
                    <td>{{$fact['id']}}</td>
                    <td>{{$fact['full_name']}}</td>
                    <td>{{$fact['email']}}</td>
                    <td>{{$fact['phone_number']}}</td>
                    <td>{{$fact['college_name']}}</td>
                    <td>{{$fact['address']}}</td>
                    <td>{{$fact['skills']}}</td>
                    <td>{{$fact['pc']}}</td>
                    <td>{{$fact['wifi']}}</td>
                    <td>{{$fact['edu']}}</td>
                    <td>{{$fact['date_time']}}</td>
                    

        </tr>
        @endforeach

</table> </div></center>

</body>