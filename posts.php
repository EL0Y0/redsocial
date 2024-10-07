<?php
    class Post { 
        private $titulo;
        private $contenido;
        private $tags;
        private $likes;

        public function __construct($titulo, $contenido, $tags = [], $likes) {
            $this->titulo = $titulo;
            $this->contenido = $contenido;
            $this->tags = $tags;
            $this->likes = $likes;
        }

        public function getTitulo() {
            return $this->titulo;
        }
    
        public function getContenido() {
            return $this->contenido;
        }
    
        public function getTags() {
            return $this->tags;
        }
    
        public function getLikes() {
            return $this->likes;
        }
    
    }

    function obtenerPosts() {
        $posts = [
            new Post('Kirill sa matao',
             'Kirill ha cogio un pedrolo lo ha tirao al cielo
              se le ha caido en la cabeza y está en el hospital
              la criatura', ['Kirill', 'Pedrolo', 'Hospital'], 33),
            new Post('Isma esta castigao',
            'novea el isma que ha suspendio mates y fisica y
             quimica y lo han castigao yo no se pa que se mete
             en el tecnologico', ['Isma', 'Castigo', 'Tecnologico'], 14),
            new Post('kUkO famoso',
            'Al Izan le han pedio un autografo por la calle
             un niño se le ha cruzao y le ha dicho hazte una
             foto conmigo kuko', ['kUkO', 'Autografo', 'Fama'], 999999),
        ];
        return $posts;
    
    }
?>