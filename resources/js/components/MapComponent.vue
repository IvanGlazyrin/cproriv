<template>
  <yandex-map 
    :settings="settings"
    :coords="coords"
    :zoom="10" 
    @click="onClick"
  >
    <ymap-marker 
      :coords="coords" 
      marker-id="123" 
      hint-content="some hint" 
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
      54.82896654088406,
      39.831893822753904,
    ],
  }),
  methods: {
    onClick(e) {
      this.coords = e.get('coords');
    },
  }, 
}
</script>
