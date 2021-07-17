<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Members</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1' name='viewport' />
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ URL::asset('css/style.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cutive+Mono&family=Fredericka+the+Great&family=Parisienne&display=swap" rel="stylesheet">
</head>

<body>
    <div class="container">
        <br />
        <div id="header_title">
            <h1 align="center">Manage Your Members</h1>
        </div>
        <br />
        <div>
            <a style="margin: 19px;" href="{{ route('member.create')}}" class="btn btn-primary" id="new_button">Add new member</a>
        </div>
        @yield('main')
    </div>
</body>

</html>