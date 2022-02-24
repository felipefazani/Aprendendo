/*
Crie um aplicativo Java para ler 10 numeros e armazena-los em umarray.  Ordene os elementos em ordem crescente.
*/

package exercicio1;

import java.util.Scanner;
import javax.swing.JOptionPane;

public class Exercicio1 {
    public static void main(String[] args) {
        int[] vetor = new int[10];
        int n, menor, aux;
        Scanner scanner = new Scanner(System.in);
        
        for(int i=0; i<3; i++){
//            System.out.println("Digite o número " + (i+1));
//            vetor[i] = scanner.nextInt();
            vetor[i] = Integer.parseInt(JOptionPane.showInputDialog("insira ai meu" + (i+1)));
        }
//        scanner.close();
        for(int i=0; i<3; i++){
            menor = i;
            for (int j = i; j < 3; j++) {
                if (vetor[menor] > vetor[j]) {
                    menor = j;
                }
            }
            aux = vetor[menor];
            vetor[menor] = vetor[i];
            vetor[i] = aux;
            
//            JOptionPane.showMessageDialog(null, "O numero "+ (i+1) + "é " + (vetor[i]));
//            System.out.println("O numero "+ (i+1) + " é " + (vetor[i]));
        }
        
        for (int i = 0; i < 3; i++) {
            JOptionPane.showMessageDialog(null, "O numero "+ (i+1) + "é " + (vetor[i]));
        }
        
    }
    
}
