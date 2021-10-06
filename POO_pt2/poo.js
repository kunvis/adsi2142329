
//1 forma de generar objetos en js
var persona=new Object();//creando un objeto de una clase (objeto)
console.log(typeof(objeto));

/*var  num=100;
console.log(typeof(num));
var t='palabra';
console.log(typeof(t));*/

persona.nombre='Darcy';
persona.apellido='Cumbe';
persona.mostrar=function () {
    return nombre + ' - ' + apellido;
}

//2 forma de generar objetos en js
//json= java script object notation -clave:valor(atributos y metodos)

var alumno={
    nombre:'Estefanny',
    apellido:'Gualtero',
    nombrecompleto:function () {
        return this.nombre + ' - ' + this.apellido;
        //this=esta clase, este objeto
    }
}
console.log(typeof(alumno));
alumno.telefono='1234567890';
//console.log(alumno);

//recorrer claves de  objeto con for in
for(atributo in alumno){
    console.log(atributo);
}
//convertir valores de objeto a array
var arreglo= Object.values(alumno);
console.log(arreglo);

//acceso por operador punto
console.log(alumno.nombrecompleto());
//console.log(typeof(alumno));
console.log(alumno.nombre);
console.log(alumno.apellido);

//acceso por operador llave
console.log(alumno['nombrecompleto']);
console.log(alumno['nombre']);
console.log(alumno['apellido']);

//3 forma de trabajar con objetos en js
var ob= function aprendiz (nombre,apellido) {
    //var nombre='Andrea';
    //var apellido='Lopez';
    this.nombre=nombre;//con parametros
    this.apellido=apellido;
    //this.nombre='Andrea';
    //this.apellido='Lopez';
    this.nombrecompleto=function () {
        return this.nombre + ' - ' + this.apellido;
    }
}      
var ob=new aprendiz('Luis','Diaz');
var ob2=new aprendiz('Paola','Suarez');

console.log(typeof(ob));
console.log(ob.nombre);
console.log(ob2.nombre);
console.log(ob.nombrecompleto());

//4 forma de crear objetos en js
//forma clasica
class estudiante{
    constructor (nombre,apellido){
        this.nombre=nombre;
        this.apellido=apellido;
    }
}
var e1=new estudiante('Ana','Angel');
console.log(typeof(e1));
console.log(e1.nombre);