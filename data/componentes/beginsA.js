var template = `
<div>
  <span class="title">
    BIENVENIDO AL QUIZ DE HISTORIA !!
  </span>
  <button class="waves-effect waves-light btn-large btn-general" @click="begin">Empezar</button>
</div>
`;

Vue.component("begin", {
  template: template,
  methods: {
    begin() {
      eventBus.$emit("content", "question");
    }
  }
});
