var template = `
<div class="app">
  <component class="z-depth-2 box" :is="componentName" :results="results"></component>
</div>
`;

Vue.component("app", {
  data() {
    return {
      componentName: "begin",
      results: {}
    };
  },
  template: template,
  mounted() {
    eventBus.$on("content", component => {
      this.componentName = component;
    });
    eventBus.$on("completed", data => {
      this.results = data;
      this.componentName = "completed";
    });
  }
});
