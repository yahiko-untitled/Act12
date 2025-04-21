<template>
  <div class="container">
    <h1>Frases Chuck Norris</h1>
    <JokeList :jokes="chuck" />
  </div>
</template>

<script>
import JokeList from '../components/JokeList.vue'

export default {
  components: {
    JokeList
  },
  data() {
    return {
      chuck: [
        { value: "Chuck Norris puede saltar en paracaídas al espacio exterior." },
        { value: "El principal producto de Chuck Norris es el dolor." },
        { value: "Chuck Norris no lee libros. Los mira fijamente hasta que obtiene la información que quiere." },
        { value: "El tiempo no espera a nadie. A menos que ese hombre sea Chuck Norris." },
        { value: "Si escribes Chuck Norris en Scrabble, ganas. Para siempre." }
      ]
    }
  }
}
</script>

<style scoped>
.container {
  max-width: 800px;
  margin: auto;
  text-align: center;
}
</style>
