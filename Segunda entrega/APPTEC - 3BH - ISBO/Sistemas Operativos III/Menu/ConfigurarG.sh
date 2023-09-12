#!/bin/bash
clear
while [ "$op" != 5 ] ; do
echo " 
   	  _____________________________________
         |                                     |
         |      Configuración de grupo         |
         |-------------------------------------|
         | 1) Alta de grupo		       |
         | 2) Baja de grupo		       |		
         | 3) Modificar grupo		       |
	 | 4) Listar grupos		       |
	 | 5) Volver			       |
	 |_____________________________________|
"
read -p "Ingrese una opción: " op
case $op in
	1) bash AltaG.sh
	   sleep 0s;;
	2) bash BajaG.sh
	   sleep 0s;;
	3) bash ModificarG.sh
	   sleep 0s;;
	4) clear
	   echo " Grupos creados:"
	   less /etc/group
	   clear
	   bash ConfigurarG.sh
	   ;;
        5) clear 
           exit;;
        *) echo "Opción no valida"
	   sleep 1s
clear 
esac
done
