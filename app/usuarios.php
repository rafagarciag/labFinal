<?
$cont=1;
//require('conexion2.php');


$resultado = $conexion->consulta('SELECT * FROM usuarios');

?>
<table>
	<tr>
		<th> ID </th>
		<th> Nombre </th>
		<th> </th>
		<th> </th>
		<th> </th>
	</tr>
<?
while ($articulo = mysql_fetch_array($resultado) ) {
?>
	<tr>
		<td>
			<? echo ''.$articulo['id']; ?>
		</td>
		<td>
			<? echo ''.$articulo['nombre']; ?>
		</td>
		<td>
			<a href="usuarios/<?echo $articulo['id'] ?>">Show</a>
		</td>
		<td>
			<a href="usuarios/<? echo $articulo['id'].'/edit' ?>">Editar</a>
		</td>
		<td>
			<a href="usuarios/<? echo $articulo['id'].'/destroy' ?>">Destruir</a>
		</td>
	</tr>

<?
$cont++;
}
?>
</table>
<a href="usuarios/new">Nuevo Usuario<a/>
