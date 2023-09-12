#!/bin/bash

while [[ $op != 3 ]]; do
    clear
       	 
echo "	    ___________________________ 
	   |		               |
	   |	Baja de Usuario        |
	   |---------------------------|
           | 1)Eliminar usuario        |
	   | 2)Listar usuarios	       |
           | 3)Volver                  |
           |___________________________|
"

    read -p "Ingrese una opción: " opcion

    case $opcion in
        1)
            clear
            echo -n "Ingrese el nombre del usuario a borrar:"
            read username
            if [ "$username" = root ]; then
                echo "No tiene los permisos necesarios."
            else
                echo
                echo "¿Desea borrar el directorio de trabajo y todo su contenido [Y/N]?"
                echo -n "Valor por defecto [n]: "
                read delete_home
            fi
            if [ "$delete_home" = "Y" ]; then
                sudo userdel -r $username
            else
                sudo userdel $username
            fi
            ;;
        2)
    	   clear
           echo "Usuarios Creados:"
           cut -d: -f1 /etc/passwd
           read -p "Presione Enter para continuar..."
           ;;
           
        3)
            clear
	    exit
	    ;;
       
     	*) echo "Opción no valida"
	   sleep 1s  		
		
clear;;
esac	 
done
