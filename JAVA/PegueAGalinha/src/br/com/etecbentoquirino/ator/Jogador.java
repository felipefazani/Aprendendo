package br.com.etecbentoquirino.ator;
public class Jogador extends Ator{
    //construtor
    public Jogador() {
        super.linAtual = 4;
        super.colAtual = 4;
        super.setCod('J');
    }
    
    public void mover(String move){
        switch(move){
            case "w":
                super.linAtual --;
                
            break;
            case "a":
                super.colAtual --;
            break;
            case "s":
                super.linAtual ++;
            break;
            case "d":
                super.colAtual ++;
            break;
        }
        corrigePosicao();
    }
    
    
}
