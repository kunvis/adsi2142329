class Persona{
    constructor(nombre,apellido){
        this._nombre=nombre;
        this._apellido=apellido;
    }
    get nombre (){
        return this._nombre;
    }
    set nombre(nombre){
        this._nombre=nombre;
    }
    get apellido (){
        return this._apellido;
    }
    set apellido(apellido){
        this._apellido=apellido;
    }
    NombreCompleto(){
        return this._nombre + ' ' +this.apellido;
    }
}

class Aprendiz extends Persona {
    constructor(nombre, apellido, ficha, programa) {
        super(nombre, apellido);
        this._ficha = ficha;
        this._programa = programa;
    }

    get ficha() {
        return this._ficha;
    }

    set ficha(ficha) {
        this._ficha = ficha;
    }

    get programa() {
        return this._programa;
    }

    set programa(programa) {
        this._programa = programa;
    }
}
var ob =new Persona('Darcy','Cumbe');
console.log(ob.nombre + ' ' + ob.apellido);
ap = new Aprendiz('Darcy', 'Gualtero', '2142329', 'ADSI');
ap.nombre = 'Estefanny';

console.log(ap);