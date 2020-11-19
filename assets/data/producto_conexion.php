<?php
include('conexion_global.php');

$obj=new ConexionGlobal;

$res = $obj->buscarProducto();
echo '<table>
            <tr>
                <th>Id</th>
                <th>Nombre</th>
                <th>Descripcion</th>
                <th>Precio Venta</th>
                <th>Precio compra</th>
                <th>Stock</th>
                <th>Categoria</th>
                <th>url imagen</th>
                </tr>';

foreach($res as $filas){ 
echo'<tr>';
echo '<td>' .$filas['id_producto'].'</td>' ;
echo '<td>'  .$filas['nombre_producto'].'</td>';
echo '<td>' .$filas['descripcion_producto'].'</td>';
echo '<td>' .$filas['precio_venta'].'</td>';
echo '<td>'  .$filas['precio_compra'].'</td>';
echo '<td>' .$filas['stock'].'</td>';
echo '<td>' .$filas['categoria'].'</td>';
echo '<td>'  .$filas['url_imag'].'</td>';
echo '</tr>';
}
echo'</table>';

json_encode($res,JSON_FORCE_OBJECT);
//print_r($res);
$tem = array();
$tem = $res;
print("Id producto ".$tem[1]['id_producto'].'<br>');
print("Nombre ".$tem[1]['nombre_producto'].'<br>');
print("Precio venta ".$tem[1]['precio_venta'].'<br>');
print("Categoría videojuego ".$tem[1]['categoria_videojuego']); 
print("URL imag ".$tem[1]['url_imag'].'<br>');
?>