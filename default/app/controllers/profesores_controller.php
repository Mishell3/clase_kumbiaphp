<?php

    class ProfesoresController extends AppCrontroller{
        public function index(){
            view::template('pantalla1');
            $this->titulo="Profesores";
        }
        public function Historial(){
            view::template('pantalla1');
            $this->titulo="Historial de Profesores";
        }
    }
       
     
