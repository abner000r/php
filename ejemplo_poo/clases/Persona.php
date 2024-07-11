<?php 
    class Persona {
        // Atributos
        private $nombre = "";
        public $apellido = "";
        public $telefono = 0;
        public $direccion = "";
        
        // Métodos setter y getter
        public function asignarNombre($valor) {
            $this->nombre = $valor;
        }

        public function verNombre() {
            return $this->nombre;
        }

        public function nombreCompleto() {
            return "Nombre completo: " . $this->nombre . " " . $this->apellido;
        }

        public function verDatos() {
            return "<br>Nombre completo: " . $this->nombre . " " . $this->apellido
                . "<br>Teléfono: " . $this->telefono
                . "<br>Dirección: " . $this->direccion;
        }
    }
?>
