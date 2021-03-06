<?php
        function mostrarNoticias($conexion){
            $consulta = "SELECT * FROM `noticias`";
            $resultado = mysqli_query($conexion, $consulta);
            return $resultado;
        }
        function mostrarTituloNoticia($conexion,$idNoticia){
            $consulta = "SELECT Titulo,Imagen FROM `noticias` Where idNoticias=$idNoticia";
            $resultado = mysqli_query($conexion, $consulta);
            return $resultado;
        }
        function mostrarNoticiasPorComentarios($conexion){
            $consulta = "SELECT idNoticias,count(*) as cantidadNoticias FROM final.comentarios group by idNoticias order by cantidadNoticias DESC LIMIT 6";
            $resultado = mysqli_query($conexion, $consulta);
            return $resultado;
        }
        function buscador($conexion, $noticia){
            $consulta = "SELECT * FROM noticias WHERE Titulo LIKE '%$noticia%' AND Descripcion LIKE '%$noticia%'";
            $resultado = mysqli_query($conexion, $consulta);
            return $resultado;
        }

        function mostrarNoticiaId($conexion, $idNoticia){
        $consulta = "SELECT * FROM noticias WHERE idNoticias=$idNoticia";
        $resultado = mysqli_query($conexion, $consulta);
        return $resultado;
    }
        function modificarNoticia($conexion, $Plataforma, $rutaImg, $Descripcion, $Titulo, $NombreP, $IdNoticias){
            $consulta="UPDATE `noticias` SET `Plataforma` = '$Plataforma', `Imagen` = '$rutaImg', `Descripcion` = '$Descripcion', `Titulo` = '$Titulo', `NombreP` = '$NombreP' WHERE (`idNoticias` = '$IdNoticias')";
            $resultado = mysqli_query($conexion, $consulta);
            return $resultado;
        }

        function eliminarNoticia($conexion, $IdNoticias){
            $consulta = "DELETE FROM `noticias` WHERE (`idNoticias` = '$IdNoticias')";
            $resultado = mysqli_query($conexion, $consulta);
            return $resultado;
        }

        function insertarNoticia($conexion, $Plataforma, $rutaImg, $Descripcion, $Titulo, $NombreP ){
            $consulta = "INSERT INTO `noticias` (`Plataforma`, `Imagen`, `Descripcion`, `Titulo`, `NombreP`) VALUES ('$Plataforma','$rutaImg', '$Descripcion', '$Titulo', '$NombreP')";
            $resultado = mysqli_query($conexion, $consulta);
            return $resultado;
        }
       
        function consultaNoticias($conexion)
        {
            $consulta = "SELECT idNoticias, Imagen FROM noticias ORDER BY rand() LIMIT 3";
            $resultado = mysqli_query($conexion, $consulta);
            return $resultado;
        }
        function actualizarNoticias($conexion)
        {
            $consulta = "SELECT * FROM noticias ORDER BY rand() LIMIT 6";
            $resultado = mysqli_query($conexion, $consulta);
            return $resultado;
        }
       

?>