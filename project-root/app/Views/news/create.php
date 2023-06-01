<!DOCTYPE html>
<html>

<head>
	<title>Compensar 2.0 - Agendar Citas</title>
    <?= session()->getFlashdata('error') ?>
    <?= validation_list_errors() ?>
	<style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f2f2f2;
      margin: 0;
      padding: 0;
    }

    header {
      background-color: #333;
      color: #fff;
      padding: 20px;
      text-align: center;
    }

    h1 {
      margin: 0;
    }

    nav {
      background-color: #333;
      color: #fff;
      padding: 10px;
    }

    nav ul {
      margin: 0;
      padding: 0;
      list-style-type: none;
      text-align: center;
    }

    nav ul li {
      display: inline-block;
      margin-right: 10px;
    }

    nav ul li a {
      color: #fff;
      text-decoration: none;
      padding: 5px 10px;
    }

    nav ul li a:hover {
      background-color: #555;
    }

    .container {
      max-width: 800px;
      margin: 0 auto;
      padding: 20px;
    }

    .welcome-message {
      text-align: center;
      font-size: 24px;
      margin-bottom: 20px;
    }

    form {
      background-color: #fff;
      padding: 20px;
      border-radius: 5px;
    }

    label {
      display: block;
      margin-bottom: 10px;
    }

    input[type="input"],
    textarea,
    select {
      width: 100%;
      padding: 10px;
      border: 1px solid #ccc;
      border-radius: 3px;
      margin-bottom: 10px;
    }

    input[type="submit"] {
      background-color: #333;
      color: #fff;
      padding: 10px 20px;
      border: none;
      border-radius: 3px;
      cursor: pointer;
    }

    input[type="submit"]:hover {
      background-color: #555;
    }
  </style>
</head>

<body>
	<header>
		<h1>Compensar 2.0 - Agendar Citas</h1>
		<nav>
			<ul>
				<li><a href="../home">Inicio</a></li>
				<li><a href="../about">Sobre Nosotros</a></li>
				<li><a href="#">Agendar Cita</a></li>
				<li><a href="#">Consultar Cita</a></li>
			</ul>
		</nav>
	</header>

	<div class="container">
    <form action="/news/create" method="post">
    <?= csrf_field() ?>

    <label for="nombres">Ingrese sus nombres</label>
    <input type="text" name="nombres"  value="<?= set_value('nombres') ?>" required>
    <br>

    <label for="apellidos">Ingrese sus apellidos</label>
    <input type="text" name="apellidos"  value="<?= set_value('apellidos') ?>" required>
    <br>

    <label for="fecharealizacion">Ingrese la fecha en la que esta realizando la cita</label>
    <input type="date" name="fecharealizacion"  value="<?= set_value('fecharealizacion') ?>" required>
    <br>

    <label for="fechacita">Ingrese la fecha y hora a la que quiere la cita</label>
    <input type="date" name="fechacita"  value="<?= set_value('fechacita') ?>" required></textarea>
    <br>

    <label for="motivo">Ingrese el motivo o malestar por el que va a realizar la cita</label>
    <textarea name="motivo" cols="45" rows="4" required><?= set_value('motivo') ?></textarea>
    <br>

    <input type="submit" name="submit" value="Create news item">
</form>
		</div>
	</div>
</body>

</html>

<h2><?= esc($title) ?></h2>



