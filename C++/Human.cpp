// Import Library
#include <iostream>
#include <string>
using namespace std;

// Class Human yang berisikan data Manusia secara umum, seperti
// -> Nik, Name, dan Jenis Kelamin
class Human {
  // Deklar Private String attr
  private :
    string NIK,
            name,
            jenis_kelamin;
  public :
    // Constructor
    Human() {}

    // SETTER AND GETTER
    void setNik(string NIK) { this->NIK = NIK; } // Method untuk menset atau mengubah atau menambah data Nik
    string getNik() { return this->NIK; } // Method untuk mengambil data Nik

    void setName(string name) { this->name = name; } // Method untuk menset atau mengubah atau menambah data nama
    string getName() { return this->name; } // Method untuk mengambil data nama

    void setJKelamin(string jenis_kelamin) { this->jenis_kelamin = jenis_kelamin; } // Method untuk menset atau mengubah atau menambah data Jenis Kelamin
    string getJKelamin() { return this->jenis_kelamin; } // Method untuk mengambil data Jenis Kelamin

    // Destructor
    ~Human() {}
};