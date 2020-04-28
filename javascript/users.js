function users(codigoUcc, nombres, primerApellido, segundoApellido, genero, telefono, email, rol, contrasenna, verificar, estado, action) {
    this.action = action;
    this.codigoUcc = codigoUcc;
    this.nombres = nombres;
    this.primerApellido = primerApellido;
    this.segundoApellido = segundoApellido;
    this.genero = genero;
    this.telefono = telefono;
    this.email = email;
    this.rol = rol;
    this.contrasenna = contrasenna;
    this.verificar = verificar;
    this.estado = estado;


}
users.prototype.AddUser = function () {
    console.log(this.codigoUcc + " " + this.nombres + " " + this.primerApellido + " " + this.segundoApellido + " " + this.genero + " " + this.telefono + " " + this.email + " " + this.rol + " " + this.contrasenna + " " + this.verificar + " " + this.estado);
    $.ajax({
        async :false,
        type: "POST",
        url: this.action,
        data: { codigoUcc: this.codigoUcc, nombres: this.nombres, primerApellido: this.primerApellido, segundoApellido: this.segundoApellido, genero: this.genero, telefono: this.telefono, email: this.email, rol: this.rol, contrasenna: this.contrasenna, verificar: this.verificar, estado: this.estado },
        success: function (response) {
            if (response == 1) {
                alert("Usuario insertado");
            } else if (response == 2) {
                alert("El código Ucc ya esta registrado");
            } else if (response == 3) {
                alert("Las contraseñas no coinciden");
            } else {
                alert("Mensaje de error" + response);
            }
        }
    });
}