function llenarVector(arreglo,tam) {
    for (let i = 0; i < tam; i++) {
        arreglo.push(Math.round(Math.random()*100));
    }
    return arreglo;
}
let vec=new Array();
let x=10;
llenarVector(vec,x);
console.log(vec);
document.write(vec+"<br>");
vec.shift();//elimina el primer valor
console.log(vec);
document.write(vec+"<br>");
vec.pop();//elimina el ultimo valor
console.log(vec);
document.write(vec+"<br>");
vec.unshift(120);//agrega el primer valor
console.log(vec);
document.write(vec+"<br>");