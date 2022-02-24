package br.com.etecbentoquirino.main;

import java.util.Scanner;
import br.com.etecbentoquirino.ator.Mapa;
import br.com.etecbentoquirino.ator.Jogador;
import br.com.etecbentoquirino.ator.Ator;
import br.com.etecbentoquirino.ator.Galinha;

public class Jogo {
    public static void main(String[] args){
        Scanner in = new Scanner(System.in);
        Mapa map = new Mapa();
        Ator jo1 = new Jogador();
        Ator ga1 = new Galinha();
        int k = 0;
        
        //atualizando o mapa
        map.atualizaMapa(ga1.getLinAtual(), ga1.getColAtual(), ga1.getCod());
        map.atualizaMapa(jo1.getLinAtual(), jo1.getColAtual(), jo1.getCod());
        map.imprimiMapa();
        System.out.println("-=-=-Pegue A Galinha-=-=-\nBem vindo ao jogo");
        
        //laço para o jogo funcionar
        do{
            System.out.println("Para se mover use esses parâmetros\ncima = w || baixo = s || direita = d || esquerda = a || sair = q");
            String mov = in.next();
            switch(mov){
                case "w":
                case "a":
                case "s":
                case "d":
                    map.atualizaMapa(ga1.getLinAtual(), ga1.getColAtual(), '-');
                    map.atualizaMapa(jo1.getLinAtual(), jo1.getColAtual(), '-');
                    jo1.mover(mov);
                    ga1.mover(mov);
                    map.atualizaMapa(jo1.getLinAtual(), jo1.getColAtual(), jo1.getCod());
                    
                    if((ga1.getColAtual() == jo1.getColAtual()) && (ga1.getLinAtual() == jo1.getLinAtual())){
                        System.out.println("Voce pegou a galinha! Parabens!!");
                        k=1;
                    }
                    map.atualizaMapa(ga1.getLinAtual(), ga1.getColAtual(), ga1.getCod());
                    map.imprimiMapa();
                    break;
                case "q":
                    System.out.println("Pronto voce saiu <3");
                    k=1;
                    break;
                default:
                    System.out.println("Insira uma opcao valida!!");
                    break;
            }


            
                        
        }while(k==0);
        
    }
}
