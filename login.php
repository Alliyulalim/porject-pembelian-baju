<html>
    <head>
        <title>Halaman Login</title>
        <link rel="stylesheet" href="../style.css">
        <style>
            *{
    margin: 0;
    padding: 0;
    outline: 0;
    font-family: 'Open Sans', sans-serif;
}
body{
    height: 100vh;
    background-color: #242424;
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
}
p {
  color: rgb(26, 25, 25);
  font-family: 'Open Sans', sans-serif;
  padding-top: 10px;
}

h1 {
  text-align: center;
  padding-bottom: 20px;
}

a {
  color: #752BEA;
  font-family: 'Open Sans', sans-serif;
}

.container{
    position: absolute;
    left: 50%;
    top: 50%;
    transform: translate(-50%,-50%);
    padding: 20px 25px;
    width: 300px;

    background-color: rgba(255, 255, 255, .9);
    box-shadow: 0 0 10px rgba(255,255,255,.3);
}
.container h1{
    text-align: left;
    color: #1d1d1d;
    margin-bottom: 30px;
    border-bottom: 5px solid#1d1d1d;
}
.container label{
    text-align: left;
    color: #1d1d1d;
}
.container form input{
    width: calc(100% - 20px);
    padding: 8px 10px;
    margin-bottom: 15px;
    border: none;
    background-color: transparent;
    border-bottom: 1px solid #1d1d1d;
    color: #1d1d1d;
    font-size: 20px;
}
.container form button{
    width: 100%;
    height: 40px;
    padding: 5px 0;
    border: none;
    background-color:#752BEA;
    font-size: 18px;
    color: #fafafa;
    border-radius: 20px;
}
        </style>
    </head>
    <body>
        <div class="container">
          <h1><center>Login</center></h1>
            <form method="POST" action="pembeli.php">

                <input type="hidden" name="tujuan" value="DAFTAR">

                <label>Username</label>
                <br>
                <input name="username" type="text">
                <br>
                <label>Password</label>
                <br>
                <input name="password" type="password">
                <br>
                <button><center>Daftar</center></button>
               
                <p> Sudah punya akun?
                  <a href="">Login di sini</a>
                </p>
            </form>
        </div>
    </body>
</html>