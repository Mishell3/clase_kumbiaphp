<?php
   Load::models('alumnos');
  class AlumnoController extends AppController{
    public function index($page=1){
      View:: template('pantalla1');
      $this->titulo="Listado alumnos";
      $alumno = new Alumnos();
      $this ->listaAlumno =$alumno->getAlumno($page);
    }
    public function registro(){
      View:: template('pantalla1');
      $this->titulo = "Registro de alumnos";
    }
  }    
  