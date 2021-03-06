<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>{{env('APP_NAME')}}</title>
</head>
<body>
<table class="table">
    <thead>
    <tr>
        <th scope="col">#</th>
        <th scope="col">date</th>
        <th scope="col">player id</th>
        <th scope="col">agent id</th>
        <th scope="col">currency</th>
        <th scope="col">bet</th>
        <th scope="col">win</th>
        <th scope="col">rake</th>
        <th scope="col">tournament</th>
        <th scope="col">net</th>
        <th scope="col">fin</th>
        <th scope="col">aams ticket</th>
        <th scope="col">aams table</th>
    </tr>
    </thead>
    <tbody>
    @if(!empty($data))
        @foreach($data as $item)
            <tr>
                <th scope="row">{{$item->id}}</th>
                <td>{{$item->date}}</td>
                <td>{{$item->playerid}}</td>
                <td>{{$item->agentid}}</td>
                <td>{{$item->currency}}</td>
                <td>{{$item->bet}}</td>
                <td>{{$item->win}}</td>
                <td>{{$item->rake}}</td>
                <td>{{$item->tournament}}</td>
                <td>{{$item->net}}</td>
                <td>{{$item->fin}}</td>
                <td>{{$item->aams_ticket}}</td>
                <td>{{$item->aams_table}}</td>
            </tr>
        @endforeach
    </tbody>
    @else
        <tr>
            <td rowspan="13">Empty data</td>
        </tr>
    @endif
</table>


<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
</body>
</html>