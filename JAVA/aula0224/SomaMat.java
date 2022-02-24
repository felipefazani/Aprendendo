
package somamat;

public class SomaMat {

    void somamatrizes(double [][] m1, double [][] m2, double [][] m3){
        if (m1.length == m2.length && m2.length == m3.length ){
            int i = 0, j;
            while (m1[i].length == m2[i].length && i < m1.length){
                i++;
            }
            if (i >= m1.length){
                for(i=0; i<m1.length; i++){
                    for(j=0; j<m1[i].length; j++){
                        m3[i][j] = m1[i][j] + m2[i][j];
                    }
                }
            }else{
                System.out.println("Não foi possível somar as matrizes");
            }
        }
    }
    
    public static void main(String[] args) {
        double [][] n = {{1, 2, 3}, {1, 2}};
        double [][] n1 = {{1, 2, 3}, {1, 2}};
        double [][] n2 = {{2, 2, 2}, {2, 2}};
//        somamatrizes(n, n1, n2);
        System.out.println(n[0].length);
    }
    
    
    
}


