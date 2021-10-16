//Generar el array
var vec=(array,tam)=>{
    for (let i = 0; i < tam; i++) {
        array.push(Math.round(Math.random()*100));
        
    }
    return array;
}
v=[];
x=5;
console.log('Array: '+vec(v,x));
document.write('Array: '+vec(v,x) + '<br>');

//Mayor del array
var mayor=v=>{
    let may=0;
    for (let i = 0; i< v.length; i++) {
        if (v[i]>may) {		
            posicion=i;
            may=v[i];
        }
    }  
    return may; 
}
console.log('El numero mayor de los elementos del array es: ' + mayor(v)+' y su posicion es: ' +posicion);
document.write('El numero mayor de los elementos del array es: ' + mayor(v)+' y su posicion es: ' +posicion + '<br>');

//Menor del array
var menor =v=>Math.min(...v);
console.log('El numero menor es:'+menor(v));
document.write('El numero menor es:'+menor(v) + '<br>');

//Suma del array
var sum=v=>{
    let suma=0;
    for (let i = 0; i< v.length; i++) {
        suma+=v[i];
    }  
    return suma; 
}
console.log('La suma de los elementos del array es: ' + sum(v));
document.write('La suma de los elementos del array es: ' + sum(v) + '<br>');

//Promedio del array
var prom=(v,x)=>{
    let promedio=0;
    for (let i = 0; i< v.length; i++) {
        promedio+=v[i]/x;
    }  
    return promedio; 
}
console.log('El promedio de los elementos del array es: ' + prom(v,x));
document.write('El promedio de los elementos del array es: ' + prom(v,x));