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
        calif: 0,
      correctaz: "",
      correctaz2: [],
      incorrectaz: {}
        
      }
    };
  },
  created() {
    fetch("../data/tamano.json")
      .then(response => {
        return response.json();
      })
      .then(data => {
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
        fetch("../data/questions10-copia.json")
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
           this.results.correctaz=(this.data.question);
          //this.correctaz=this.data.question
          console.log("corectas"+this.results.correctaz)
        } else {
          this.results.wrong++;
          this.data.incorrectaz=this.data.question
          console.log("incorecta"+this.data.incorrectaz)
        }
        if (this.count == 10) {
          this.results.average = (this.results.correct / this.count) * 10;
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
