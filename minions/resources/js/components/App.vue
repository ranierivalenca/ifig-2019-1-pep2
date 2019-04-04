<template>
  <div id="app">
    <div class="heading">
      <h1>Minions</h1>
    </div>
    <minion-component
      v-for="minion in minions"
      v-bind="minion"
      :key="minion.id"
      @update="update"
      @delete="del"
    ></minion-component>
    <div>
      <button @click="create()">Add</button>
    </div>
  </div>
</template>
<script>
  function Minion({ id, color, name}) {
    this.id = id;
    this.color = color;
    this.name = name;
  }

  import MinionComponent from './MinionComponent.vue';

  export default {
    data() {
      return {
        minions: []
      }
    },
    methods: {
      create() {
        // To do
      },
      read() {
        window.axios.get('/api/cruds').then(({ data }) => {
          // console.log(data)
        });
      },
      update(id, color) {
        // To do
      },
      del(id) {
        // To do
      }
    },
    components: {
      MinionComponent
    }
  }
</script>