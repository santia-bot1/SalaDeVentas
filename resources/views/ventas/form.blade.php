<input type="number" name="Cantidad" value="{{isset($ventas->cantidad)?$ventas->cantidad:''}}" placeholder="Cantidad">
    <input type="text" name="Precio" value="{{isset($ventas->precio)?$ventas->precio:''}}" placeholder="Precio">
    <input type="text" name="Asiento" value="{{isset($ventas->asiento)?$ventas->asiento:''}}" placeholder="Asiento">
    <input type="submit" value="Guardar Datos">