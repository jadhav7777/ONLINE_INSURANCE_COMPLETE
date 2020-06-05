<html>
<head>
<title>Registration Form</title>
<link rel="stylesheet" type="text/css" href="reg.css">
</head>

<body>
<h3>REGISTRATION FORM</h3>



<form action="{{url('callregister')}}" method="POST">
  {{csrf_field()}}

<table align="center" cellpadding = "15">

<!----- First Name ---------------------------------------------------------->
<tr>
<td>Full name</td>
<td><input type="text" name="Name" maxlength="30"/>
(max 30 characters a-z and A-Z)
</td>
</tr>


<!----- Date Of Birth -------------------------------------------------------->
<tr>
<td>DATE OF BIRTH</td>

<td>

        <input type="date" name="bday">



</td>
</tr>

<!----- Email Id ---------------------------------------------------------->
<tr>
<td>EMAIL ID</td>
<td><input type="text" name="Email_Id" maxlength="100" /></td>
</tr>

<!----- Mobile Number ---------------------------------------------------------->
<tr>
<td>MOBILE NUMBER</td>
<td>
<input type="text" name="Mobile_Number" maxlength="10" />
(10 digit number)
</td>
</tr>



<!----- Aadhar Number Number ---------------------------------------------------------->
<tr>
<td>AADHAR NUMBER</td>
<td>
<input type="text" name="Aadhar_Number" maxlength="12" />
(12 digit number)
</td>
</tr>




<!----- Gender ----------------------------------------------------------->
<tr>
<td>GENDER</td>
<td>
Male <input type="radio" name="Gender" value="Male" />
Female <input type="radio" name="Gender" value="Female" />
</td>
</tr>

<!----- Address ---------------------------------------------------------->
<tr>
<td>ADDRESS <br /><br /><br /></td>
<td><textarea name="Address" rows="4" cols="30"></textarea></td>
</tr>

<!----- City ---------------------------------------------------------->
<tr>
<td>CITY</td>
<td><input type="text" name="City" maxlength="30" />
(max 30 characters a-z and A-Z)
</td>
</tr>

<!----- Pin Code ---------------------------------------------------------->
<tr>
<td>PIN CODE</td>
<td><input type="text" name="Pin_Code" maxlength="6" />
(6 digit number)
</td>
</tr>

<!----- Aadhar number Co ---------------------------------------------------------->
<tr>
        <td>AADHAR NUMBER</td>
        <td><input type="text" name="Aadhar" maxlength="12" />
        (10 digit)
        </td>
        </tr>



<!----- State ---------------------------------------------------------->
<tr>
<td>STATE</td>
<td><input type="text" name="State" maxlength="30" />
(max 30 characters a-z and A-Z)
</td>
</tr>

<!----- Country ---------------------------------------------------------->
<tr>
<td>COUNTRY</td>
<td><input type="text" name="Country" value="India" readonly="readonly" /></td>
</tr>

<tr>
    <td>
        UPLOAD PHOTO
    </td>
    <td>
            <input type="file" name="uploadfile" />
    </td>
</tr>






<!----- Submit and Reset ------------------------------------------------->
<tr>
<td colspan="2" align="center">
<input type="submit" value="Submit">
<input type="reset" value="Reset">
</td>
</tr>
</table>

</form>

</body>
</html>
