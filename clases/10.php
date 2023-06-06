<?php

    /*Ejercicio 10:
    Crea una clase llamada ToDoList que permita mantener una lista de tareas. Debe tener métodos para agregar una tarea (addTask()), marcar una tarea como completada (completeTask()) y obtener la lista de tareas incompletas (getIncompleteTasks()). */

    class ToDoList{
        public $list = [];

        public function __construct(){
            $this-> list = $list = [];
        }

        public function addTask($tarea){
            array_push($this->list, $tarea);
            echo "Tarea agregada <br>";
        }

        public function completeTask($tarea){
            $tareas = count($this->list);
            if($tarea <= $tareas){
                $eliminada = $this->list[$tarea - 1];
                echo "La tarea $eliminada fue eliminada <br>";
                unset($this->list[$tarea - 1]);
            } else {
                echo "El numero de tare no existe <br>";
            }
        }

        public function getIncompleteTasks(){
            var_dump($this->list);
        }
    }

    $tareas1 = new ToDoList();
    $tareas1 -> addTask("Estudiar Programacion");
    $tareas1 -> addTask("Estudiar 7-24");
    $tareas1 -> addTask("Estudiar Programacion Mas horas");
    $tareas1 -> completeTask(3);
    $tareas1 -> getIncompleteTasks();
?>