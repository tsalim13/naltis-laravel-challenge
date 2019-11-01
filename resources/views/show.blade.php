<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
  
    <link rel='stylesheet prefetch' href='http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css'>
    <link rel='stylesheet prefetch' href='http://cdn.datatables.net/1.10.10/css/dataTables.bootstrap.min.css'>
  
</head>

    <body>
    <table id="autoGeneratedID" role="grid">
    <thead>
      <tr>
        <th role="gridcell">model</th>
        <th role="gridcell">make</th>
        <th role="gridcell">year</th>
        <th role="gridcell">type</th>
        <th role="gridcell">action</th>
      </tr>
    </thead>
    <tbody>
    @foreach ($vehicles as $v)
        <tr>
        <td role="gridcell">{{ $v->model }}</td>
        <td role="gridcell">{{ $v->make }}</td>
        <td role="gridcell">{{ $v->year }}</td>
        <td role="gridcell">{{ $v->type }}</td>
        <td role="gridcell">btn</td>
      </tr>
    @endforeach
    </tbody>
    </table>
    </body>
<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='http://cdn.datatables.net/1.10.10/js/jquery.dataTables.min.js'></script>
<script src='http://cdn.datatables.net/1.10.10/js/dataTables.bootstrap.min.js'></script>

<script src="{{URL::to('/')}}/js/datatable.js"></script>
</html>