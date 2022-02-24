
package areaperimetro;

//import java.util.Scanner;
import javax.swing.JOptionPane;

public class AreaPerimetro {

    public static void main(String[] args) {
        float area, perimetro, largura, comprimento;
        String aux;
        
        // show input dialog retorna uma string
        aux = JOptionPane.showInputDialog("Digite o valor do comprimento: ");
        // por isso precisamos transformar em float
        comprimento = Float.parseFloat(aux);
        
        
        aux = JOptionPane.showInputDialog("Digite o valor da largura: ");
        largura = Float.parseFloat(aux);
        
        area = largura * comprimento;
        perimetro = largura * 2 + comprimento * 2;
        
        
        // para mostrar o resultado na tela, temos o showMessageDialog
        JOptionPane.showMessageDialog(null, "A área é " + area + " e o perímetro é " + perimetro);
        
//          exemplo usando o scanner e o print        
//        // criando o objeto Scanner
//        Scanner scan = new Scanner(System.in);
//        
//        // entrada de dados
//        System.out.println("Digite a Largura: ");
//        largura = scan.nextFloat();
//        
//        System.out.println("Digite o Comprimento: ");
//        comprimento = scan.nextFloat();
//        
//        area = largura * comprimento;
//        perimetro = largura * 2 + comprimento * 2;
//            
//      
//        System.out.println("A área é " + area + " e o perímetro é " + perimetro);

        

    }
    
}
