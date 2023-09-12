#!/bin/bash
clear
while [ "$op" != 2 ];
do

echo "	    ___________________________ 
	   |		               |
	   |	Alta de Usuario        |
	   |---------------------------|
           | 1)Crear usuario           |
           | 2)Volver		       |
           |___________________________|
"



    read -p "Ingrese una opción: " opcion

    case $opcion in
        1)
            read -p "Ingrese un usuario: " nom
            read -p "Ingrese grupo donde alojarlo: " grp
            read -p "Ingrese contraseña: " cont
            sudo useradd -g ${grp} -s /bin/bash -d /home/${nom} -p ${cont} -m ${nom}
            echo "Creando Usuario"
            sleep 2
            clear
            ;;
        2)
           clear
           exit
	    ;;
        
    	*) echo "Opción no valida"
	   sleep 1s  		
		
clear;;
esac	 
done
