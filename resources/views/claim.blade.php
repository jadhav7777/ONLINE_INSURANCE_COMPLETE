<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
</head>
<body>



<form action="{{url('callclaim')}}" method="POST">
{{csrf_field()}}
    <h1 align="center">Claim Insurance</h1>
  <table align="center" cellpadding = "15">
    <tr>
        <td>Claim Reason <br /><br /><br /></td>
        <td><textarea name="reason" rows="4" cols="30"></textarea></td>
        </tr>
        <tr>
            <td>
                Upload Item Photo(if damaged issue)
            </td>
            <td>
                    <input type="file" name="claimphoto" />
            </td>
        </tr>

        <tr>
            <td colspan="2" align="center">
            <input type="submit" value="Submit">

            </td>
            </tr>

    </table>

</form>


</body>
</html>
