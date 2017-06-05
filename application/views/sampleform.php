<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>User form</title>
</head>
<body>
  <form method="post" action="">
    <center>

      <table>
        <tr>
          <td colspan="2"> <h1> User registration form  </h1> </td>
        </tr>
        <tr>
          <td> user name </td>
          <td> <input type="name" name="txt_uname" > </td>
        </tr>
        <tr>
          <td> user gender </td>
          <td> <input type="radio" id="txt_male" name="txt_male"  value="male"> male
            <input type="radio" id="txt_male" name="txt_female"  value="female"> female
          </td>
        </tr>
        <tr>
          <td> user city </td>
          <td> <select name="txt_select">
            <option> select city </option>
            <option value="surat">surat</option>
            <option value="ahmedad">ahemdbad</option>
          </select> </td>
        </tr>
        <tr>
          <td> user state </td>
          <td> <select name="txt_select">
            <option > select state </option>
            <option value="gujrat">gujarat</option>
            <option value="mahratra">Maharastra</option>
          </select> </td>
        </tr>
        <tr>
          <td> user hobby </td>
          <td> <input type="checkbox" name="txt_hobby1" value="cricket"> cricket
            <input type="checkbox" name="txt_hobby1" value="yoga"> yoga </td>
          </tr>

          <tr>
            <td> user photo </td>
            <td><input type="file" name="img" value=""></td>
          </tr>

          <tr>
            <td></td>
            <td> <input type="submit" name="submit" value="submit"></td>
          </tr>

        </table>
      </center>
    </form>

    <?php


     ?>

  </body>
  </html>
