const template = `
<div class="content">
    <div v-if="length" style="width: 100%">
        <div v-for="item in length" v-show="item == question" v-bind:key="item" >
            <div class="title">Ingresar pregunta {{item}}</div>
            <div class="input-field">
                <input v-model="forms[item - 1].question"  type="text" >
                <label >Pregunta</label>
            </div>
            <div  class="input-field">
                <input v-model="forms[item - 1].response1"  type="text" >
                <label >Respuesta 1</label>
            </div>
            <div class="input-field">
                <input v-model="forms[item - 1].response2"  type="text" >
                <label >Respuesta 2</label>
            </div>
            <div class="input-field">
                <input  type="text" v-model="forms[item - 1].response3" >
                <label >Respuesta correcta</label>
            </div>
        </div>
        <div class="flex-between">
            <button class="btn" @click="reset">volver a seleccionar</button>
            <div>
                <button :class="'btn ' + (question == 1 ? 'disabled': '')" @click="question--">atras</button>
                <button class="btn"  v-if="question == length" @click="insert">Terminar</button>
                <button :class="'btn ' + validation()" @click="question++" v-else>siguiente</button>
            </div>
        </div>
    </div>
    <div v-else style="width: 100%">
        <div class="title">Dale click a "ACEPTAR" para crear tu entorno de trabajo</div>
        <select v-model="length" @change="generate"  class="browser-default" >
            <option value="0" selected>---Aquí puedes desplegar el botón de aceptar--</option> 

             <option :value="15">Aceptar</option>
  

        </select>
    </div>
  
    
</div>

`;

new Vue({
  data: {
    length: 0,
    question: 1,
    forms: []
  },
  methods: {
    reset() {
      this.length = 0;
      this.question = 1;
      this.forms = [];
    },
    generate() {
      for (let i = 0; i < this.length; i++) {
          var arreglo=
        this.forms.push({
          question: "",
          response1: "",
          response2: "",
          response3: ""
        });
      }
    },
    insert() {
        let formData = new FormData();
        formData.append("data", JSON.stringify(this.forms) );


       //fetch("componentes/recibe.php",{
       fetch("recibe.php",{
       method:"POST",
       body: formData
       
       })
      .then(response => {
        return response.text();
      })
        .then(data => {
        console.log(data);
         window.location.href = "https://cinteva.000webhostapp.com/data/quiz_de_pruebaz.html"; 
      })
     
      .catch(error => {
        alert(error);
      });
    },
    validation() {
      const inputs = this.forms[this.question - 1];
      if (
        !(
          inputs.question &&
          inputs.response1 &&
          inputs.response2 &&
          inputs.response3
        )
      ) {
        return "disabled";
      }
    }
  },
  template: template
}).$mount("#app");
