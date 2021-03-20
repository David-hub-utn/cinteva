var template = `
<div>
  <div class="question">{{data.question}}</div>
  <form action="#">
    <p v-for="(item,index) in data.answers">
      <label>
        <input  v-model="option" :value="index" type="radio"/>
        <span>{{item.answer}}</span>
      </label>
    </p>
  </form>
  <button @click="next" class="waves-effect waves-light btn btn-general">Siguiente</button>
</div>
`;

Vue.component("question", {
  template: template,
  data() {
    return {
      length: 0,
      lastQuestions: {},
      count: 0,
      data: {},
 
      option: 0,
      correct: 0,
      results: {
        correct: 0,
        wrong: 0,
        average: 0,
        calif: 0
      }
    };
  },
  created() {
    fetch("length.json")
      .then(response => {
        return response.json();
      })
      .then(data => {
          console.log(data);
        this.length = data.length;
        this.getQuestion();
      })
      .catch(error => {
        alert(error);
      });
  },
  methods: {
    getQuestion() {
      return new Promise((resolve, reject) => {
        fetch("preguntas.json")
          .then(response => {
            return response.json();
          })
          .then(data => {
            let random = 0;
            do {
              random = Math.floor(Math.random() * this.length + 1);
            } while (this.lastQuestions[random]);
            this.lastQuestions[random] = random;
            this.data = data[random];
            this.count++;
          })
          .catch(error => {
            alert(error);
          });
      });
    },
    next() {
      if (this.option) {
        if (this.data.answers[this.option].istrue) {
          this.results.correct++;
        } else {
          this.results.wrong++;
        }
        if (this.count == 15) {
          this.results.average = (this.results.correct / this.count) * 15;
          this.results.calif =
            this.results.average >= 8
              ? parseInt(this.results.average.toFixed(0))
              : Math.floor(this.results.average);
          this.results.average = parseFloat(
            String(this.results.average).substr(0, 3)
          );
          eventBus.$emit("completed", this.results);
        } else {
          this.option = 0;
          this.getQuestion();
        }
      } else {
        alert("selecciona una opción");
      }
    }
  }
});
