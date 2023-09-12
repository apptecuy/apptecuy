#!/bin/bash

while [[ $op != 2 ]]; do  
clear
 
echo "	    ___________________________ 
	   |		               |
	   |	Baja de grupo          |
	   |---------------------------|
           | 1)Eliminar grupo          |
           | 2)Volver		       |
           |___________________________|
"
    read -p "Ingrese una opción: " opcion

    case $opcion in
        1)
            clear
            read -p "Ingrese el nombre del grupo a eliminar: " grp
            sudo groupdel ${grp}
            echo "Grupo eliminado satisfactoriamente"
            sleep 2s
            clear
            ;;
        2)
           clear
	   exit
	    ;;
     
        *)
            echo "Opción no válida."
            sleep 1s
            ;;
    esac
done

