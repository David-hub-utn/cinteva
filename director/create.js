const template = `
<div class="content" style="width:100%">
  <div class="flex-right">
    <a class="waves-effect waves-light btn modal-trigger" href="#info" @click="add">Agregar</a>
  </div>

   <table class="striped">
        <thead>
          <tr>
              <th>Nombre</th>
              <th>Apellido Paterno</th>
              <th>Apellido Materno</th>
              <th>Correo</th>
              <th>Contraseña</th>
              <th>Status</th>
              <th>Acciones</th>
          </tr>
        </thead>
        <tbody v-if="!Profesors.length">
          <tr>
            <td colspan="8" class="center">Sin Registros</td>
          </tr>
        </tbody>
        <tbody v-else>
          <tr v-for="item of Profesors">
            <td>{{item.Nombre}}</td>
            <td>{{item.ApellidoPaterno}}</td>
            <td>{{item.ApellidoMaterno}}</td>
            <td>{{item.Correo}}</td>
            <td>••••••••</td>
            <td>{{item.Status}}</td>
            <td class="center">
                 <a class="waves-effect waves-light btn modal-trigger" href="#info"  @click="edit(item)"><i class="material-icons">edit</i></a>
                 <a class="waves-effect waves-light btn modal-trigger" href="#delete" @click="getIndex(item)"><i class="material-icons">delete</i></a>
            </td>
          </tr>
        </tbody>
  <div id="info" class="modal">
    <div class="modal-content">
      <span class="title">{{title}}</span>
    </div>
    

      <div class="row">
    <form class="col s12">

    <div class="input-field col s6">
          <input placeholder="" id="nombre" type="text" class="validate" v-model="Profesor.Nombre">
          <label for="nombre">Nombre</label>
        </div>
        <div class="input-field col s6">
                 <input  placeholder="" id="pat" type="text" class="validate" v-model="Profesor.ApellidoPaterno">
          <label for="pat">Apellido Paterno</label>
        </div>
        <div class="input-field col s6">
                  <input  placeholder="" id="mat" type="text" class="validate" v-model="Profesor.ApellidoMaterno">
          <label for="name">Apellido Materno</label>
        </div>
        <div class="input-field col s6">
                  <input   placeholder="" id="correo" type="text" class="validate" v-model="Profesor.Correo">
          <label for="correo">Correo</label>
        </div>
        <div class="input-field col s6">
        <i class="material-icons prefix" @click="visibility = !visibility" v-if="visibility">visibility</i>
        <i class="material-icons prefix" @click="visibility = !visibility" v-else>visibility_off</i>
        <input  placeholder="" id="contrasena" :type="password" class="validate" v-model="Profesor.Contrasena">
          <label for="contrasena">Contraseña</label>

        </div>
        <div class="input-field col s6">
        <input  placeholder="" id="status" type="text" class="validate" v-model="Profesor.Status">
          <label for="status">Status</label>
        </div>
        </form>
    </div>
    <div class="modal-footer">
      <a href="#!" class="modal-close waves-effect waves-green btn-flat" >Cancelar</a>
      <a href="#!" class="modal-close waves-effect waves-green btn-flat"  @click="acept">Agregar</a>
    </div>
  </div>

    <div id="delete" class="modal">
    <div class="modal-content">
      <span class="title">Eliminar Profesor</span>
    </div>
    <div class="modal-footer">
      <a href="#!" class="modal-close waves-effect waves-green btn-flat">Cancelar</a>
      <a href="#!" class="modal-close waves-effect waves-green btn-flat"  @click="deleteAlumn">Aceptar</a>

    </div>
  </div>
          

      </table>
</div>

`;

new Vue({
  data: {
    visibility: false,
    password: "password",
    flag: false,
    Profesors: [],
    Profesors_array: [
      {
        id: "1",
        Nombre: "Erasmo",
        ApellidoPaterno: "Martinez",
        ApellidoMaterno: "Benitez",
        Correo: "nestor@correo.com",
        Contrasena: "123456",
        Status: "Alta"
      }
    ],
    Profesor: {
      id: "",
      Nombre: "",
      ApellidoPaterno: "",
      ApellidoMaterno: "",
      Correo: "",
      Contrasena: "",
      Status: ""
    },
    reset: {
      id: "",
      Nombre: "",
      ApellidoPaterno: "",
      ApellidoMaterno: "",
      Correo: "",
      Contrasena: "",
      Status: ""
    }
  },
  computed: {
      title(){
          return this.flag ? "Nuevo Profesor" : "Editar Profesor"
      }
  },
  watch: {
    visibility() {
      this.password = this.visibility ? "text" : "password";
    }
  },
  methods: {
    acept() {
      if (this.flag) {
        this.Profesors.push(this.Profesor);
      } else {
        Object.assign(this.Profesors[this.index], this.Profesor);
      }
    },
    add() {
      this.flag = true;
      this.visibility = false;
      this.password = "password";
      this.Profesor = Object.assign({}, this.reset);
    },
    edit(item) {
      this.flag = false;
      this.visibility = false;
      this.password = "password";
      this.index = this.Profesors.indexOf(item);
      this.Profesor = Object.assign({}, item);
    },
    getIndex(item) {
      this.index = this.Profesors.indexOf(item);
    },
    deleteAlumn() {
      this.Profesors.splice(this.index, 1);
    }
  },
  created() {
    this.Profesors = this.Profesors_array;
  },
  template: template
}).$mount("#app");

document.addEventListener("DOMContentLoaded", function() {
  var elems = document.querySelectorAll(".modal");
  var instances = M.Modal.init(elems, {});
});
