<!DOCTYPE html>
<html>
    <head>
        <title>Admin Page</title>
        <link rel="stylesheet" type="text/css" href="views/css/bootstrap.css" />
        <link rel="stylesheet" type="text/css" href="views/css/admin.css" />
    </head>
    <body>
        <header>
            <nav class="navbar navbar-inverse">
                <h2 class="text-center">Please login to get access to the admin page</h2>
            </nav>
        </header>
        <section class="container">
            <form class="col-sm-5 center-block col-centered" action="admin-autorize.html" method="post">
                <input class="form-control" type="text" name="login" placeholder="Login"/>
                <input class="form-control" type="password" name="password" placeholder="password"/>
                <button class="btn btn-success pull-right">Login</button>
            </form>
        </section>
        


