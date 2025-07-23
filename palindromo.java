import java.util.Scanner;

public class palindromo {
    public static void main(String[] args) {
        try (Scanner scanner = new Scanner(System.in)) {
            System.out.print("Escribe una palabra: ");
            final String palabra = scanner.nextLine().toLowerCase();
            
            String invertida = new StringBuilder(palabra).reverse().toString();
            
            if (palabra.equals(invertida)) {
                System.out.println("Sí es un palíndromo.");
            } else {
                System.out.println("No es un palíndromo.");
            }
        }
    }
}