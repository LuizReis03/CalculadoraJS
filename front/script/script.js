//insere os numeros no visor
function insert(valor)
{
    var numero = document.getElementById('resultado').innerHTML;
    document.getElementById('resultado').innerHTML = numero + valor;
}

//apaga todos os valores
function clean() {
    document.getElementById('resultado').innerHTML = "";
}

//apaga um por um
function back() {
    var resultado = document.getElementById('resultado').innerHTML;
    document.getElementById('resultado').innerHTML = resultado.substring(0, resultado.length - 1);
}

//
function calcular(){

    var resultado = document.getElementById('resultado').innerHTML;
    if (resultado) {
        document.getElementById('resultado').innerHTML = eval(resultado);
    }

}