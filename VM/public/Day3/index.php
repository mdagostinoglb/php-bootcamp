<?php
<html>
<form action="vehicle.php" method="POST">
  <p>
  <label for="options">Seleccionar transporte</label><br />
        <input type="radio" name="enviar" value="Planes"> Plane </input><br />
        <input type="radio" name="enviar" value="Cars"> Car</input><br />
        <input type="radio" name="enviar" value="Bikes"> Bike</input><br />
  </p>
  <p>
        <label for="tiempo">Tiempo (minutos):</label><br />
        <input type="text" name="tiempo"  value="">
  </p>
        <input type="submit" name="calcular" value="calcular"></input>
  
</form>

</html> 

