<?php 

namespace Model;

class Usuario extends ActiveRecord {
    // base de datos
    protected static $tabla = 'usuarios';
    protected static $columnasDB = ['id','nombre','apellido','email','password','telefono',
    'admin','confirmado','token'];

    public $id;
    public $nombre;
    public $apellido;
    public $email;
    public $password;
    public $telefono;
    public $admin;
    public $confirmado;
    public $token;
    
    public function __construct($args = [])
    {
        $this->id = $args['id'] ?? null;
        $this->nombre = $args['nombre'] ?? '';
        $this->apellido = $args['apellido'] ?? '';
        $this->email = $args['email'] ?? '';
        $this->password = $args['password'] ?? '';
        $this->telefono = $args['telefono'] ?? '';
        $this->admin = $args['admin'] ?? '0';
        $this->confirmado = $args['confirmado'] ?? '0';
        $this->token = $args['token'] ?? '';
    }
    // mensaje de validacion para creacion de una cuenta
    public function ValidarCuentaNueva() {
            
        if (!$this->nombre) {
            self::$alertas['error'][] = "El Nombre es Obligatorio";
        }
        if (!$this->apellido) {
            self::$alertas['error'][] = "El Apellido es Obligatorio";
        }
        if (!$this->email) {
            self::$alertas['error'][] = "El Correo es Obligatorio";
        }
        if (!$this->telefono) {
            self::$alertas['error'][] = "El Numero de Telefono es obligatorio";
        }
        if (!$this->password) {
            self::$alertas['error'][] = "La Contraseña es Obligatoria";
        }
        if (strlen($this->password) < 6) {
            self::$alertas['error'][] = "La Contraseña debe tener al menos 6 caracteres";
        }
        
        return self::$alertas;
    }
    public function ValidarLogin() {
        if (!$this->email) {
            self::$alertas['error'][] = "El Correo es Obligatorio";
        }
        if (!$this->password) {
            self::$alertas['error'][] = "La Contraseña es Obligatoria";
        }

        return self::$alertas;
    }
    public function ValidarEmail() {
        if (!$this->email) {
            self::$alertas['error'][] = "El Correo es Obligatorio";
        }

        return self::$alertas;
    }
    public function ValidarPassword() {
        if (!$this->password) {
            self::$alertas['error'][] = "La Contraseña es Obligatoria";
        }
        if (strlen($this->password) < 6) {
            self::$alertas['error'][] = "La Contraseña debe tener al menos 6 caracteres";
        }
        
        return self::$alertas;
    }
    public function existeUsuario() {
        $query = " SELECT * FROM " . self::$tabla . " WHERE email = '" . $this->email . "' LIMIT 1 "; 

        $resultado = self::$db->query($query);

        if ($resultado->num_rows) {
            self::$alertas['error'][] = "El usuario ya esta registrado";
        }

        return $resultado;

    }
    public function hashPassword() {
        $this->password = password_hash($this->password, PASSWORD_BCRYPT);
    }
    public function crearToken() {
        $this->token = uniqid();
    }
    public function comprobarPasswordAndVerificado($password) {

        $resultado = password_verify($password, $this->password);

        if (!$resultado || !$this->confirmado) {
            self::$alertas['error'][] = 'Contraseña incorrecta o tu cuenta no ha sido confirmada';
        } else {
            return true;
        }
    }
}