<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <title>Login PHP</title>
</head>

<body>

    <section>
    <form method="POST" action="{{ route('login') }}">
        @csrf 
        <h1>Login</h1>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Email</label>
            <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Password</label>
            <input type="password" name="password" class="form-control" id="exampleInputPassword1" name="password">
        </div>
        <div style="text-align: center;">
        <button type="submit" class="btn btn-primary" style="background-color: black; color: white;" onclick="this.style.backgroundColor = 'gray'">Login</button>
        </div>
    </form>
    </section>
</body>

</html>
