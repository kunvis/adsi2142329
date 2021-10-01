function saludo() {
    //console.log('Hola mundo');
    //document.write('Hola mundo');
    return 'Hola mundo';
}
//saludo();
console.log(saludo());
var x1=()=>'Hola mundo';
console.log('Flecha '+x1());//sin paramenttos pero obligatorio el parentesis

var suma=(x,y)=>x+y;
console.log(suma(2,4));//varios parametros

function cuadrado(param) {
    return param*param;
}
var y=param=>param*param;//un parametro y sin parentesis
console.log(y(5));

//funcion flecha
var vec2=(arreglo,tam)=>{
    for (var i = 0; i <=tam; i++) {
        arreglo.push(Math.round(Math.random()*100));
    }
    return arreglo;
}
z=new Array();
console.log(vec2(z,10));