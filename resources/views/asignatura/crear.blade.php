<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
        margin: auto;
        padding: 50px;
        }
        input[type=text], select {
        width: 100%;
        padding: 12px 20px;
        margin: 8px 0;
        display: inline-block;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
        }
        input[type=submit] {
        width: 100%;
        background-color: #4CAF50;
        color: white;
        padding: 14px 20px;
        margin: 8px 0;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        }
        input[type=submit]:hover {
        background-color: #45a049;
        }
        div {
        border-radius: 5px;
        background-color: #f2f2f2;
        padding: 20px;
        }
    </style>
</head>
<body>
    <form action="/asignatura/crear" method ="POST">
        @csrf
        <label>Código asignatura:</label>
        <input type="text" name="codAs" placeholder="Código asignatura">
        <label>Nombre asignatura:</label>
        <input type="text" name="nombreAs" placeholder="Nombre asignatura">
        <label>Nombre corto asignatura:</label>
        <input type="text" name="nombreCortoAs" placeholder="Nombre corto asignatura">
        <label>Profesor asignatura:</label>
        <input type="text" name="profesorAs" placeholder="Profesor asignatura">
        <label>Color asignatura:</label>
        <input type="text" name="colorAs" placeholder="Color asignatura">
        <input type="hidden" name="user_id" value="1">
        <input type="submit" value="Guardar">
    </form>
</body>
</html>