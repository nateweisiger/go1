<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Go1 Events</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.22/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="/views/css/main.css">
</head>

<body>

<div class="container">
    <h1>Search Events</h1>
    <form action="/" method="post">
        <div class="row">
            <div class="col">
                <input type="text" class="form-control" placeholder="Keyword">
            </div>
            <div class="col">
                <input type="text" class="form-control" placeholder="location">
            </div>
            <div class="col">
                <input type="text" class="form-control" placeholder="Date">
            </div>
            <div class="col-auto my-1">
                <input class="btn btn-primary" type="submit" value="Submit">

            </div>
        </div>
    </form>

    <table id="events" class="display" style="width:100%;padding-top:30px;">
        <thead>
        <tr>
            <th>Event ID</th>
            <th>Title</th>
            <th>City</th>
            <th>State</th>
            <th>Country</th>
        </tr>
        </thead>
    </table>
</div>
<!-- Bootstrap core JavaScript -->
<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="http://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
<script src="/views/js/main.js"></script>

</body>
</html>
