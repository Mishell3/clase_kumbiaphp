<?php
   class Alumnos extends ActiveRecord{
       public function getAlumno ($page, $ppage=20)
        {
           return $this->paginate("page: $page", "por_page: $ppage", 'order: id desc');
        }
   }

    
