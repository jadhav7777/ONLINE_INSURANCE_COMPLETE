

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/renewal.css">
    <title>Renewal</title>
</head>
<body>



<br><br>
<center>
<h>Check Your Policy</h>
<br>
<table>
<form action="{{url('check')}}" method="POST">
  {{ csrf_field() }}
  <tr>
    <td>Select</td>
    <td>
      <select id="vehicle" name="Item">
      <option value="car">Car</option>
      <option value="bike">Bike</option>
      <option value="mobile">Mobile</option>
      <option value="laptop">Laptop</option>
    </select>
    </td>
  </tr>
  Enter Your Policy No.:<input id="id" type="text" name="id" value="">
<br>
<br></table>
<button type="submit" class="btn btn-success">Check</button>
</form>
</center>
          </body>
</html>
