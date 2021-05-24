<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ejemplo de PHP con JavaScript</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <div class="hero">
    <div class="container__title">
      <h1 class="title__first"> PHP y JavaScript</h1>
      <h3 class="title__subtitle">Llena el formulario para ver las funciones</h3>
    </div>
  </div>

  <div class="container__form">
    <form class="form" method="post" id="formulario">
      <p class="form__paragraph">Nombre: <input class="form__input" type="text" name="nombre" size="40"></p>
      <p class="form__paragraph">Apellido: <input class="form__input" type="text" name="apellido"></p>
      <p class="form__paragraph">Edad: <input class="form__input" type="number" name="edad"></p>
      <p class="form__paragraph">Correo: <input class="form__input" type="email" name="correo"></p>
      <p class="form__paragraph">Producto:
        <select name="producto">
          <option value="1">Producto maravilloso 1</option>
          <option value="2">Producto mega maravilloso 2</option>
        </select>
      </p>
    
      <p class="form__paragraph">Color:
        <select name="color">
          <option value="rojo">rojo</option>
          <option value="azul">azul</option>
          <option value="negro">negro</option>
        </select>
      </p>
    
      <p class="form__paragraph">
        <input type="button"  value="Enviar a verificación versión 1" onclick="enviarA('optionsAnalysis.php')">
        <input type="button" name="send" value="Enviar a verificación versión 2" onclick="enviarA('optionsAnalysis2.php')">
        <input type="reset" value="Borrar">
      </p>
    </form>
  </div>
</body>

<script src="sendTo.js"></script>
</html>