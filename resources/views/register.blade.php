<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
</head>

<body>
    <form action="/welcome2" method="POST">
        @csrf
        <!--Bagian Atas-->
        <h1>Buat Account Baru!</h1>
        <h3>Sign Up Form</h3>

        <!--Input Nama-->
        <p>First Name:</p>
        <input type="text" name="nama1">
        <p>Last Name:</p>
        <input type="text" name="nama2">

        <!--Gender-->
        <p>Gender:</p>
        <input type="radio" id="male" name="gender" value="Male">
        <label for="male">Male</label>
        <br>
        <input type="radio" id="female" name="gender" value="Female">
        <label for="female">Female</label>
        <br>
        <input type="radio" id="other" name="gender" value="Other">
        <label for="other">Other</label>

        <!--Nationality-->
        <p>Nationality:</p>
        <select>
            <option value="Indonesian">Indonesian</option>
            <option value="Malaysian">Malaysian</option>
            <option value="Singapore">Singapore</option>
            <option value="Australian">Australian</option>
        </select>

        <!--Language Spoken-->
        <p>Language Spoken:</p>
        <input type="checkbox" id="indo" value="indo">
        <label for="indo">Bahasa Indonesia</label>
        <br>
        <input type="checkbox" id="eng" value="eng">
        <label for="eng">English</label>
        <br>
        <input type="checkbox" id="other2" value="other2">
        <label for="other2">Other</label>

        <!--Bio-->
        <p>Bio:</p>
        <textarea name="" id="" cols="30" rows="10"></textarea>
        <br>
        <input type="submit" value="Daftar">
    </form>
</body>

</html>