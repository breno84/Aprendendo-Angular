function piramide(n_linhas){
    var space = 0
	matriz=""
    for(var i=0; i< n_linhas; i++)
    {   
        space = n_linhas - 1 - i
        for(let j= 0; j < space; j++){ // lado esquerdo
            matriz+=("_")
        }
        for(let k=0; k<= 2*i; k++){ // centro com *
           matriz+=("*")
        }
        for(let j= 0; j < space; j++){ // lado direito
            matriz+=("_")
        }
        matriz+=('<br>')
    } 
	document.write(matriz)
}
var n_linhas = Number.parseInt(prompt('linhas '))
piramide(n_linhas)