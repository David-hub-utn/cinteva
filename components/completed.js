var template = `
<div >
  <span class="title">
    RESULTADOS
  </span>
  <div class="box-content">
    <div class="spacing">
      <span >Correctas:</span> 
      <span><b>{{results.correct}}</b></span>
    </div>
    <div class="spacing">
      <span >Incorrectas:</span>
      <span><b>{{results.wrong}}</b></span> 
    </div>
        <div class="spacing">
      <span >ncorrectas:</span>
      <span><b>{{results.correctaz2}}</b></span> 
    </div>
    <div class="spacing">
      <span>Promedio:</span>
      <span><b>{{results.average}}</b></span>
    </div>
    <div class="spacing">
      <span >Calificación:</span>
      <span v-if="results.calif < 6"><b class="color-red">{{results.calif}}</b></span>
      <span v-else><b>{{results.calif}}</b></span>
    </div>
  </div>
  <button class="waves-effect waves-light btn btn-general" @click="finish">Finalizar</button>
</div>
`;

Vue.component("completed", {
  template: template,
  props: {
    results: Object
  },
  methods:{
      finish(){
         window.location.href = "../registrate_continuar.html";

      }
  }
  
});
