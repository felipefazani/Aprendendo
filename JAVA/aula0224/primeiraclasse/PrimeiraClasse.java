package primeiraclasse;

import java.util.Scanner;


public class PrimeiraClasse {

    public static void main(String[] args) {
        Boolean op = true;
        int x, canal;
        Scanner scan = new Scanner(System.in);
        tv tv01 = new tv(); 
        // o primeiro tv é o nome da classe
        // o tv01 é o nome do objeto
        // tv() é o construtor
        
        while(op){
            System.out.println("1 - aumenta volume"
                    + "\n2 - diminui volume"
                    + "\n3 - liga/desliga tv"
                    + "\n4 - muda canal"
                    + "\n6 - sair do programa");
            x = scan.nextInt();
            
            switch(x){
                case 1:
                    tv01.aumentaVolume();
                    break;
                case 2:
                    tv01.diminuiVolume();
                    break;
                case 3:
                    tv01.OnOff();
                    break;
                case 4:
                    System.out.println("Digite o canal: ");
                    canal = scan.nextInt();
                    tv01.mudaCanal(canal);
                    break;         
                case 6:
                    System.out.println("Saindo do programa...");
                    op = false;
                    break;
                default:
                    System.out.println("Digite um número válido");
                    break;
            }
            tv01.mostrarTv();
        }
    }
    
}