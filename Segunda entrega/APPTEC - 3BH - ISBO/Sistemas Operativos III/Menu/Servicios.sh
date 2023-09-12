#!/bin/bash

while [[ $op != 5 ]]; do
    clear

echo "	    ____________________________ 
	   |		                |
	   |	   Servicios            |
	   |----------------------------|
           | 1)Listar servicios         |
           | 2)Iniciar servicio         |
           | 3)Detener servicio         |
           | 4)Estado del servicio      |
           | 5)Volver    		|
           |____________________________|
"
    read -p "Ingrese una opción: " opcion

    case $opcion in
        1)  clear
            sudo systemctl list-unit-files --type service --all;;        
	2)
            clear
            read -p "Ingrese el nombre del servicio a iniciar: " servicio
            sudo systemctl start $servicio
            echo "Servicio $servicio iniciado."
            sleep 2
            ;;
        3)
            clear
            read -p "Ingrese el nombre del servicio a detener: " servicio
            sudo systemctl stop $servicio
            echo "Servicio $servicio detenido."
            sleep 2
            ;;
        4)
            clear
            read -p "Ingrese el nombre del servicio a verificar: " servicio
            sudo systemctl status $servicio
            read -p "Presione Enter para continuar..."
            ;;
        5)
           
            clear
	    exit
	    ;;
    

        *)
            echo "Opción no válida."
            sleep 1
            ;;
    esac
done

