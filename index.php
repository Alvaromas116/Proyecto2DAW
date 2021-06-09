<?php
        $pagina="";
        if(isset($_GET['p'])){
            $pagina=$_GET['p'];
			
        }else{

            include("principal.php");
			
        }

        if($pagina=="login"){
			
            include("login.php");
        }

        if($pagina=="registrarse"){
			
            include("registrarse.php"); 
			
        }

        if($pagina=="peliculas"){
	
            include("peliculas.php");
			
        }

        if($pagina=="modificar"){
		
            include("modificar.php");
			
        }

        if($pagina=="logout"){
			
            include("logout.php");
			
        }
        if($pagina=="principal"){
			
            include("principal.php");
			
        }
		
    ?>
