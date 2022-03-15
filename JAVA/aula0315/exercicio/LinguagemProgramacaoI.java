package exercicio;


public class LinguagemProgramacaoI extends Disciplina implements Pratica{
    // atributos
    
    private String laboratorio;
    
    // métodos
    
    public LinguagemProgramacaoI(){
        
    }
    
    public void setLaboratorio(String laboratorio){
        this.laboratorio = laboratorio;
    }
    
    public String getLaboratorio(){
        return this.laboratorio;
    }
    
    @Override
    public float calculaMedia(){
        // calcula a media
        float media = 10;
        return media;
    }
    
   public String obterLaboratorio(){
       return this.laboratorio;
   }
}
