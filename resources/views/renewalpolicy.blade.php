<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/renewal.css">
    <title>RenewalPolicy</title>
</head>
<body>
  <center><h1>Your Policy</h1></center>
  <br><br>

  <form action="{{ url('/renewalcallpolicy')}}" method="POST">
      {{ csrf_field() }}
        <table align="center" cellpadding = "20">
                <tr>
                        <td>Your Policy Of:</td>
                        <td>
                          <input id="id" type="text" name="id" value="{{$post->id}}" readonly>
                        </td>
                </tr>
                <tr>
                    <td>Your Policy Started At:</td>
                    <td>
                      <input id="id" type="text" name="date" value="{{$post->start}}" readonly>
                    </td>
                </tr>
                <tr>
                    <td>Your Policy Ended At:</td>
                    <td>
                      <input id="id" type="text" name="date" value="{{$post->end}}" readonly>
                     </td>
                </tr>
        </table>
        <br><br>
        <center>
            <button type="submit" class="btn btn-success">Renewal</button>
        </form>
        </center>

</body>
</html>
