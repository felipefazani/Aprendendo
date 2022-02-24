package br.com.etecbentoquirino.ator;

public class Mapa {
    private char[][] mapa = new char[9][9];
    int i, j;
    public Mapa() {
        for(i=0;i<9;i++){
            for(j=0;j<9;j++){
                mapa[i][j] = '-';
            }
        }
    }
    
    public void atualizaMapa(int lin, int col, char cod){
        mapa[lin][col] = cod;
    }
    
    public void imprimiMapa(){
        for(i=0;i<9;i++){
            for(j=0;j<9;j++){
                System.out.print(mapa[i][j] + " ");
            }
            System.out.print("\n");
        }
    }
    
}
