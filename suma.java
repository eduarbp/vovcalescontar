import java.util.Arrays;
import java.util.List;

public class suma {
    public static int suma_numeros(List<Integer> numeros) {
        int suma = 0;
        for (int num : numeros) {
            suma += num;
        }
        return suma;
    }

    public static void main(String[] args) {
        List<Integer> lista = Arrays.asList(1, 2, 3, 4, 5);
        System.out.println("La suma es: " + suma_numeros(lista));
    }
}
