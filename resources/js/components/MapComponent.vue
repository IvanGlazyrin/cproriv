<template>
  <yandex-map 
    :settings="settings"
    :coords="coords"
    :zoom="10" 
    @click="onClick"
  >
    <ymap-marker 
      v-for="rentalPointcoord in rentalPointcoords"
      v-bind:key="rentalPointcoord.id+'rentalPoint'"
      v-bind:coords="[rentalPointcoord.latitude, rentalPointcoord.longitude]" 
      v-bind:marker-id="rentalPointcoord.id+'rentalPoint'" 
      v-bind:hint-content="rentalPointcoord.name" 
    />

    <ymap-marker 
      v-for="markCoord in markCoords"
      v-bind:key="markCoord.id+'mark'" 
      v-bind:coords="[markCoord.latitude, markCoord.longitude]" 
      v-bind:marker-id="markCoord.id+'mark'"  
      v-bind:hint-content="markCoord.name" 
    />
  </yandex-map>
</template>

<script>
import { yandexMap, ymapMarker } from 'vue-yandex-maps'

const settings = {
  apiKey: '84c46349-d4fc-4502-a6b4-20ab9fcb5f59',
  lang: 'ru_RU',
  coordorder: 'latlong',
  version: '2.1'
}

export default {
  components: { yandexMap, ymapMarker },   
    data: () => ({
    settings,
    coords: [
      66.0969527,
      76.6009385
    ],
    // получение координат проката
    rentalPointcoords: [],
    // получение координаты меток
    markCoords: [],
  }),
  mounted() {
    this.loadRentalPounts();
    this.loadMarks();
  },
  methods: {
    onClick(e) {
      this.coords = e.get('coords');
    },
    loadMarks() {
        axios.get('/api/mark').then(
        res => {
          this.markCoords = res.data;
        }
      )    
    },
    loadRentalPounts() {
      axios.get('/api/rental-point').then(
        res => {
          this.rentalPointcoords = res.data;
        }
      )
    }
  }, 
}
</script>
;