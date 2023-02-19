<?php 
  // Class Human yang berisikan data Manusia secara umum, seperti
  // -> Nik, Name, dan Jenis Kelamin
  class Human {
    // Deklar Private String attr
    private $NIK = '',
            $name = '',
            $jenis_kelamin = '';
    
    // Constructor
    public function __construct($NIK = '', $name = '', $jenis_kelamin = '') {
      $this->NIK = $NIK;
      $this->name = $name;
      $this->jenis_kelamin = $jenis_kelamin;
    }
    
    // SETTER AND GETTER
    public function setNik($NIK) { $this->NIK = $NIK; } // Method untuk menset atau mengubah atau menambah data Nik
    public function getNik() { return $this->NIK; } // Method untuk mengambil data Nik

    public function setName($name) { $this->name = $name; } // Method untuk menset atau mengubah atau menambah data nama
    public function getName() { return $this->name; } // Method untuk mengambil data nama

    public function setJKelamin($jenis_kelamin) { $this->jenis_kelamin = $jenis_kelamin; } // Method untuk menset atau mengubah atau menambah data Jenis Kelamin
    public function getJKelamin() { return $this->jenis_kelamin; } // Method untuk mengambil data Jenis Kelamin

    // DESTRUCTOR
	  public function __destruct() {}

  }

?>