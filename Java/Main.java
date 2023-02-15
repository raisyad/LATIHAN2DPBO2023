
// Saya Raisyad Jullfikar NIM 2106238 mengerjakan Latihan 2 
// dalam mata kuliah Desain dan Pemrograman Berorientasi Objek untuk 
// keberkahanNya maka saya tidak melakukan kecurangan seperti yang telah dispesifikasikan. Aamiin.
import java.util.*;

public class Main {
  public static void main(String args[]) {
    ArrayList<Mahasiswa> list = new ArrayList<>();
    CR cr = new CR();

    Scanner sc = new Scanner(System.in).useLocale(Locale.US);
    Boolean flag = true;
    int n = 0;
    do {
      System.out
          .println("Daftar Menu Program\n1. Input\n2. Show Data\nOther Number. Exit Program");
      try {
        n = sc.nextInt(); // Inputan Menu
      } catch (Exception e) {
        System.out.println("Inputan Bukan Pilihan Menu!");
      }

      if (n == 1) {
        cr.Create(list);
      } else if (n == 2) {
        cr.Read(list);
      } else {
        flag = false;
      }
    } while (flag);
    sc.close();
  }
}