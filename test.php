require_once('hello.php');
<!DOCTYPE HTML>
<HTML>
<head>
<link rel="stylesheet" href="main.css">
</head>
<body>
<header>
<section class = "loginform">
<form name = "login" action = "index_submit" method = "get" accept-charset = "utf-8">
<ul>
<li> <label for = "user"> NetId </label>
<input type="netid" name="user" placeholder="NetId" required></li>
        <li><label for="password">Password</label>
        <input type="password" name="password" placeholder="password" required></li>
        <li>
        <input type="submit" value="Login"></li>
    </ul>
</form>
</section>