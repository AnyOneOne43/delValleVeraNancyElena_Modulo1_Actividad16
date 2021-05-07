<?php
    echo "<form action='index.php' method='post'>";
    echo "<fieldset>";
      echo "<legend>Inicio de Sesión</legend>";
      echo "Nombre(s):<input type='text' name='Nombre' required>";
      echo "<br>";
      echo "Apellidos:<input type='text' name='Apellidos' required>";
      echo "<br>";
      echo "Grupo:<input type='number' name='Grupo' required>";
      echo "<br>";
      echo "Fecha de Nacimiento:<input type='date' name='FechaN' required>";
      echo "<br>";
      echo "Correo Electronico:<input type='email' name='mail' required>";
      echo "<br>";
      echo "Contraseña:<input type='password' name='Contraseña' required>";
      echo "<br>";
      echo "<input type='submit' name='Subir' value='Iniciar Sesión'>";
    echo "</fieldset>";
  echo "</form>";
?>