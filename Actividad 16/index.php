<?php
    if(isset($_POST['Cerrar'])){
        session_start();
        session_unset();
        session_destroy();
    }

    if(isset($_POST['Subir'])){
        $name=$_POST['Nombre'];
        $lastname=$_POST['Apellidos'];
        $grup=$_POST['Grupo'];
        $Birth=$_POST['FechaN'];
        $mail=$_POST['mail'];
        $password=$_POST['Contraseña'];
        
        session_start();
        $_SESSION['Nombre']=$name;
        $_SESSION['Apellidos']=$lastname;
        $_SESSION['Grupo']=$grup;
        $_SESSION['FechaN']=$Birth;
        $_SESSION['mail']=$mail;
        $_SESSION['Contraseña']=$password;
    }
    
    if(isset($_POST['Subir'])!=1 && isset($_POST['Cerrar'])!=1){
        session_start();
            $_SESSION['Nombre'];
            $_SESSION['Apellidos'];
            $_SESSION['Grupo'];
            $_SESSION['FechaN'];
            $_SESSION['mail'];
            $_SESSION['Contraseña'];
    }

    if(isset($_SESSION['Nombre'])){
        echo "<table border='1'>";
      echo "<tr>";
        echo "<th colspan='4'><h3>Inicio de Sesión</h3></th>";
      echo "</tr>";
      echo "<tr>";
        echo "<td colspan='2'>";
            echo $_SESSION['Nombre']; 
        echo "</td>";
        echo "<td colspan='4'>";
            echo $_SESSION['Apellidos'];
        echo "</td>";
      echo "</tr>";
      echo "<tr>";
        echo "<th colspan='2'>Nombre(s)</th>";
        echo "<th colspan='4'>Apellidos</th>";
      echo "</tr>";
      echo "<tr>";
        echo "<th>Grupo:</th>";
        echo "<td>";
            echo $_SESSION['Grupo'];
        echo "</td>";
        echo "<th>Fecha de Nacimiento:</th>";
        echo "<td>";
            echo $_SESSION['FechaN'];
        echo "</td>";
      echo "</tr>";
      echo "<tr>";
        echo "<th colspan='2'>Correo Electronico:</th>";
        echo "<td colspan='4'>";
            echo $_SESSION['mail'];
        echo "</td>";
      echo "</tr>";
    echo "</table>";

    echo "<br>";
    echo "<form action='index.php' method='post'>";
      echo "<input type='submit' name='Cerrar' value='Cerrar Sesión'>";
    echo "</form>";
    }

    if(isset($_POST['Subir'])!=1 && isset($_SESSION['Nombre'])!=1){
        header("Location: form.php");
    }
?>