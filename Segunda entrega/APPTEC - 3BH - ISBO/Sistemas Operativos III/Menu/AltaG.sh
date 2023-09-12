#!/bin/bash
clear
while [ "$op" != 2 ];
do

echo "	    ___________________________ 
	   |		               |
	   |	Alta de grupo          |
	   |---------------------------|
           | 1)Crear grupo             |
           | 2)Volver		       |
           |___________________________|
"
    read -p "Ingrese una opción: " op

    case $op in
        1)
            clear
            read -p "Ingrese el grupo a crear: " grp
            sudo groupadd ${grp}
            echo "Grupo creado satisfactoriamente"
            sleep 2
            clear
            ;;
        2)
            
	  clear
	  exit
	    ;;
        *)  
            echo "Opción no válida."
	    sleep 1
	    clear	
            ;;
    esac
done

