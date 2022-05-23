<!doctype html>
<html lang="ru">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Гостевая страница</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <h1>Привет, это моя первая гостевая страница на Laravel</h1>
        <form method="POST" id="if-form_messages">

            <div class="form-group">
                <label for="name">Имя: *</label>
                <input class="form-control" placeholder="Имя" name="name" type="text" id="name">
            </div>

            <div class="form-group">
                <label for="email">E-mail:</label>
                <input class="form-control" placeholder="E-mail" name="email" type="text" id="email">
            </div>

            <div class="form-group">
                <label for="name">Сообщение: *</label>
                <input class="form-control" rows="5" placeholder="Текст сообщения" name="message" cols="50" id="message">
            </div>

            <div class="form-group">
                <input class="btn btn-primary" type="submit" vlaue="Добавить">
            </div>

        </form>
        <hr>


    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>

</html>