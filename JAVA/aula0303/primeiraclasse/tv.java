package primeiraclasse;

public class tv {
    // atributos
    private int polegadas;
    private int canal;
    private int volume;
    private boolean ligada;
    
   
    // métodos
    
    // na prática voce pode colocar o construtor e os atributos em qualquer lugar do código
    // no entanto o código fica desorganizado
    
    // o construtor sempre tem o mesmo nome que a classe
    public tv(int pol){ // o construtor serve para criar um objeto com valores definidos
        polegadas = pol; // criar o objeto da televisão já entrando com o tamanho da tv, pois criar o objeto e depois fazer um metodo para mudar a polegada pode criar um objeto sem tamanho
        ligada = true;
        volume = 5;
        canal = 2;
    }
    
    public void mostrarTv(){
        System.out.println("Volume: " + this.getVolume() + 
                "\nCanal: " + this.getCanal() + 
                "\nTamanho: " + this.getPolegadas() + " polegadas");
        if(this.isLigada())
            System.out.println("Tv está ligada");
        else
            System.out.println("Tv está desligada");
    }
    
    public void mudaCanal(int num_canal){
        this.canal = num_canal;
    }
    
    public void aumentaVolume(){
        if(this.volume < 10)
            this.volume++;
    }
    
    public void diminuiVolume(){
        if(this.volume > 0)
            this.volume--;
    }
    
    public void OnOff(){
        this.ligada = !this.ligada;
    }

    public int getPolegadas() {
        return this.polegadas;
    }

    public void setPolegadas(int polegadas) {
        this.polegadas = polegadas; // usando a forma de inserir setters automático pela IDE, ele cria a váriavel de entrada 
                                    // com o mesmo nome e o this vem para diferencia o atributo do parametro
    }

    public int getCanal() {
        return canal;
    }

    public int getVolume() {
        return volume;
    }

    public boolean isLigada() {
        return ligada;
    }
    
    
    
    
}