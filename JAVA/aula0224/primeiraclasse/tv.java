package primeiraclasse;

public class tv {
    // atributos
    private int polegadas;
    private int canal;
    private int volume;
    private boolean ligada;
    
   
    // métodos
    
    // o construtor sempre tem o mesmo nome que a classe
    public tv(){
        polegadas = 65;
        ligada = true;
        volume = 5;
        canal = 2;
    }
    
    public void mostrarTv(){
        System.out.println("Volume: " + volume + 
                "\nCanal: " + canal);
    }
}
