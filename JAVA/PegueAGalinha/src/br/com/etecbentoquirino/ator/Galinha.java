package br.com.etecbentoquirino.ator;

import java.util.Random;

public class Galinha extends Ator{
    int direcao;
    Random rand = new Random();
    //construtuor
    public Galinha() {
        
        super.colAtual = rand.nextInt(9);
        super.linAtual = rand.nextInt(9);
        if(colAtual == 4 && linAtual == 4){
            colAtual = 8;
            linAtual = 3;
        }
        super.setCod('G');
    }
    
    public void mover(String mov){
       direcao = rand.nextInt(4);
       switch (direcao){
           case 0:
               linAtual --;
               corrigePosicao();
            break;
           case 1:
               linAtual ++;
               corrigePosicao();
            break;
           case 2:
               colAtual --;
               corrigePosicao();
            break;
           case 3:
               colAtual ++;
               corrigePosicao();
            break;
       }

    }
    
}
