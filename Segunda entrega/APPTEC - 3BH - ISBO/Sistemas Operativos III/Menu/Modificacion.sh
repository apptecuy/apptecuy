#!/bin/bash
clear
while [[ $op != 3 ]]; do

     
echo "	    _________________________________ 
	   |		                     |
           | 	Modificación de Usuario	     |
           |---------------------------------|				    
           | 1)Modificar datos personales    |
           | 2)Modificar contraseña          |
           | 3)Volver			     |
           |_________________________________|
"
read -p "Ingrese una opción: " op
case $op in
1)echo
  echo -n "Nombre del usuario al que quiere cambiar su información personal: " 
  read  username
  echo
  sudo chfn $username 
  echo;;
2)echo -n "Ingrese el nombre del usuario que quiere modificar la clave: "
  read username
  echo
  sudo passwd $username
  echo;;
3)
  clear
  exit;;
*) echo "Opción no valida"
   sleep 1s  		
		
clear;;
esac	 
done
