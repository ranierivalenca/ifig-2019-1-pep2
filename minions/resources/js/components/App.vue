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
      read() {
        window.axios.get('/api/minions').then(({ data }) => {
          // console.log(data)
          data.forEach(minion => {
            this.minions.push(new Minion(minion));
          });
        });
      },
      update(id, color) {
        window.axios.put(`/api/minions/${id}`, { color }).then(() => {
          // Once AJAX resolves we can update the Minion with the new color
          this.minions.find(minion => minion.id === id).color = color;
        });
      },
      create() {
        window.axios.get('/api/minions/create').then(({ data }) => {
          this.minions.push(new Minion(data));
        });
      },
      del(id) {
        window.axios.delete(`/api/minions/${id}`).then(() => {
          let index = this.minions.findIndex(minion => minion.id === id);
          this.minions.splice(index, 1);
        });
      }
    },
    components: {
      MinionComponent
    },
    created() {
      this.read();
    }
  }
</script>