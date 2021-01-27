<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1>Buat Account Baru!</h1>
    <h3>Sign Up Form</h3>
    <form method="POST" action="/welcome">
      @csrf
      <label>First Name</label><br><br>
      <input type="text" name="nama1" value=""><br><br>
      <label>Last Name</label><br><br>
      <input type="text" name="nama2" value=""><br><br>
      <label>Gender:</label><br><br>
      <input type="radio"  name="wn" >Male <br>
      <input type="radio" name="wn">Female <br>
      <input type="radio" name="wn">Other <br> <br>
      <label>Nationality:</label><br><br>
      <select name="">
        <option>Indonesia</option>
        <option>Singapura</option>
        <option>Malaysia</option>
      </select><br><br>
      <label>Language Spoken:</label><br><br>
      <input type="checkbox" >Bahasa Indonesia <br>
      <input type="checkbox" >English <br>
      <input type="checkbox" >Other <br><br>
      <label>Bio:</label><br><br>
      <textarea  rows="8" cols="80"></textarea><br>
      <input type="submit" value="Sign Up">
    </form>
  </body>
</html>
