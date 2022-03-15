package exercicio;

public abstract class Disciplina {
    // atributos
    private int codigo;
    
    // métodos
    
    public void setCodigo(int codigo){
        this.codigo = codigo;
    }
    
    public int getCodigo(){
        return this.codigo;
    }
    
    public abstract float calculaMedia();
    
    
}
