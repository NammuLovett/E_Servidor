<?php require_once 'includes/cabecera.php'; ?>
<?php require_once 'includes/helpers.php'; ?>


<div id="principal">
	<h3>LISTADO DE USUARIOS</h3>
	<h2> Buscador</h2>

	<br />

	<form action="listUsers.php" method="POST">
		<label for="userName"></label>
		<label for="userEmail"></label>
		<label for="userBirthdate"></label>

		<input type="text" name="userName" placeholder="Nombre de usuario" maxlength="50" pattern="[A-Za-z0-9ÑñÁÉÍÓÚáéíóúÇç_.: ]+" />
		<?php echo isset($_SESSION['errores_entrada']) ? mostrarError($_SESSION['errores_entrada'], 'userName') : ''; ?>
		<input type="text" name="userEmail" placeholder="email" maxlength="100" pattern="[A-Za-z0-9_.@]+" />
		<?php echo isset($_SESSION['errores_entrada']) ? mostrarError($_SESSION['errores_entrada'], 'userEmail') : ''; ?>
		<input type="text" name="userBirthdate" placeholder="Fecha Nacimiento" maxlength="10" pattern="[A-Za-z0-9ÑñÁÉÍÓÚáéíóúÇç_.: ]+" />
		<?php echo isset($_SESSION['errores_entrada']) ? mostrarError($_SESSION['errores_entrada'], 'userBirthdate	') : ''; ?>
		<input type="submit" value="Buscar" />
	</form>


	<table class="styled-table">
		<tr>
			<th>id Usuario </th>
			<th>Nombre </th>
			<th>Apellido</th>
			<th>Fecha de Nacimiento </th>
			<th>Email</th>
		</tr>

		<?php
		$userName = $_POST['userName'];
		$userEmail = $_POST['userEmail'];
		$userBirthdate = $_POST['userBirthdate'];

		$sql = "SELECT * FROM users WHERE userName LIKE '%$userName%' AND userEmail LIKE '%$userEmail%' AND userBirthdate LIKE '%$userBirthdate%' ORDER BY idUser ASC;";


		//echo $sql;

		$users = mysqli_query($db, $sql);

		$resultado = [];

		if ($users && mysqli_num_rows($users) >= 1) {
			$resultado = $users;
		} else {

			$_SESSION["errores_entrada"] = $errores;
			//var_dump($_SESSION);
		}

		//$users = obtenerUsers($db);
		if (!empty($users)) {
			while ($user = mysqli_fetch_assoc($resultado)) {
		?>
				<tr>

					<td><?= $user['idUser'] ?></td>
					<td><?= $user['userName'] ?></td>
					<td><?= $user['userAp1'] ?></td>
					<td><?= $user['userBirthdate'] ?></td>
					<td><?= $user['userEmail'] ?></td>
				</tr>

		<?php
			} //Fin while
		} //Fin if
		?>
	</table>

</div>
</div>
</body>

</html>