<?php

// Ejercicio 5: Escribe una función llamada obtenerDiaSemana que tome un número entero del 1 al 7 como parámetro y devuelva el día de la semana correspondiente, donde 1 es "Lunes", 2 es "Martes", etc.

// Complejidad: BAJA (1 punto)

function obtenerDiaSemana($numero){
    //Escribe tu código aquí
    $diasemana=array("1","2","3","4","5";"6","7")
    if($diasemana[0]="1");{
        echo "El dia 1 es Lunes"
    }elseif($diasemana[1]="2");{
        echo "El dia 1 es martes"
    }elseif($diasemana[2]="3");{
        echo "El dia 1 es miercoles"
    }elseif($diasemana[3]="4");{
        echo "El dia 1 es jueves"
    }elseif($diasemana[4]="5");{
        echo "El dia 1 es viernes"
    }elseif($diasemana[5]="6");{
        echo "El dia 1 es sabado"
    }elseif($diasemana[6]="7");{
        echo "El dia 1 es domingo"
    }else
}

//Tests
// assert("Lunes" == obtenerDiaSemana(1), "El dia 1 es Lunes");
// assert("Martes" == obtenerDiaSemana(2), "El dia 2 es Martes");
// assert("Miercoles" == obtenerDiaSemana(3), "El dia 3 es Miercoles");
// assert("Jueves" == obtenerDiaSemana(4), "El dia 4 es Jueves");