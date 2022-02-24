package br.com.etecbentoquirino.ator;

public class Ator {
    protected int linAtual, colAtual;
    private char cod;
    
    //construtor
    public Ator() {
        
    }
    //getters
    public int getLinAtual() {
        return linAtual;
    }

    public int getColAtual() {
        return colAtual;
    }

    public char getCod() {
        return cod;
    }
    
    public void setCod(char cod){
        this.cod = cod;
    }
    //corrindo a posicao
    public void corrigePosicao(){
        if(linAtual<0){
            linAtual ++;
        }
        if(colAtual<0){
            colAtual++;
        }
        
        if(linAtual>8){
            linAtual --;
            
        }
        if(colAtual>8){
            colAtual --;
        }
        
    }
    
    public void mover(String mov){
        
    }
    
}
