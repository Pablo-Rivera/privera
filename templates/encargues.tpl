<section class="presentacion col-lg-6 col-lg-offset-3 col-md-10 col-md-offset-1 col-sm-12 col-sm-offset-1 col-xs-10 col-xs-offset-1">
  <p>Morbi non auctor dolor. Nam sit amet mauris consectetur, elementum sapien eget, dapibus ligula. Pellentesque iaculis lectus suscipit leo sollicitudin pharetra. Aenean laoreet efficitur fringilla. Nullam ornare pellentesque nibh eu egestas. Quisque ut commodo diam, consequat feugiat arcu. Vestibulum erat ante, ultrices accumsan odio eget, scelerisque bibendum leo. Vivamus id elit ultricies mauris imperdiet tincidunt eget vel eros.  </p>
</section>
<section class="sabenc col-lg-6 col-lg-offset-3 col-md-10 col-md-offset-1 col-sm-12 col-sm-offset-1 col-xs-10 col-xs-offset-1">
  <h1>Precios por cantidad</h1>
  <table class="table" >
    <thead><!--Titulos de la tabla-->
      <tr>
        <th>Porciones</th>
        <th>Cantidad</th>
        <th>Precio</th>
      </tr>
    </thead>
    <tbody id="cuerpotabla"><!--Contenido de la tabla-->

    </tbody>
    <tfoot>
      <tr>
        <td> <input  id="porciones" type="text" class="form-control" placeholder="Almendrado" required /></td>
        <td> <input id="cantidad" type="text" class="form-control" placeholder="1 < 100" required /></td>
        <td> <input id="precio" type="text" class="form-control" placeholder="$14 " required /></td>
      </tr>
    </tfoot>
    <br>
  </table>
  <button id="agregar" type="submit" class="btn btn-success" >Agregar</button>

</section>
<section class="sabenc col-lg-6 col-lg-offset-3 col-md-10 col-md-offset-1 col-sm-12 col-sm-offset-1 col-xs-10 col-xs-offset-1">
  <h1>Planilla de encargues</h1>
  <form>
    <p>Nombre: </p><input name="name" type="text" placeholder="Carlos" required>(*)
    <p>Apellido: </p><input name="name" type="text" placeholder="Sanchez" required>(*)
    <p>Tarjeta Debito o Credito:</p> <input id="numtarjeta" name="numtarjeta" type="number" placeholder="5555-4444-3333-2222" required>
    Visa<input type="radio" name="tarjeta" value="Visa"/>
    MasterCard<input type="radio" name="tarjeta" value="MasterCard"/>
    Efectivo<input type="radio" name="tarjeta" value="Efectivo"/>(*)<br>
    <p>Direccion: </p><input name="name" type="text" placeholder="9 de julio 513" required>(*)
    <p>Telefono: </p><input name="name" type="text" placeholder="420659" required>(*)
    <p>Pedido: </p><textarea name="message" cols="80" rows="5" required></textarea>(*)<br>
    <input class="der" type="submit" value="enviar">
  </form>
</section>

<script src="js/tabla.js"></script>
