#!/bin/bash

while [[ $op != 2 ]]; do
    clear
  

echo "	    ___________________________ 
	   |		               |
	   | 	Modificar grupo	       |
	   |---------------------------|
           | 1)Modificar grupo         |
           | 2)Volver		       |
           |___________________________|
"
 read -p "Ingrese una opción: " opcion
    case $opcion in
        1)
            clear
            read -p "Ingrese el nombre del grupo a modificar: " grp
            read -p "Ingrese el nuevo nombre del grupo: " new_grp
            sudo groupmod -n ${new_grp} ${grp}
            echo "Grupo modificado satisfactoriamente"
            sleep 2
            clear
            ;;
        2)
            clear
	    exit
	    ;;
        *)
            echo "Opción no válida."
            ;;
    esac
done

