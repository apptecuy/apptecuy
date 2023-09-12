#!/bin/bash
clear

while [ "$op" != 4 ]; do
echo "
   	  _____________________________________
         |                                     |
         |      Configuración de usuario       |
         |-------------------------------------|
         | 1) Alta de usuario		       |
         | 2) Baja de usuario		       |		
         | 3) Modificar usuario		       |
	 | 4) Listar usuarios		       |
	 | 5) Volver			       |
	 |_____________________________________|
"
read -p "Ingrese una opción: " op
case $op in
	1) bash Alta.sh
	   sleep 0s;;
	2) bash Baja.sh
	   sleep 0s;;
	3) bash Modificacion.sh
	   sleep 0s;;
	4) clear
           echo "Usuarios Creados:"
           cut -d: -f1 /etc/passwd
           read -p "Presione Enter para continuar..."
           clear
           bash ConfigurarU.sh
           ;;
        5) clear
	   exit;;
        *) echo "Opción no valida"
           sleep 1s
 clear
 esac
 done      
       
	
