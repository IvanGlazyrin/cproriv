<template>
    <div>
        <div class="btn-group">
        <button type="button" class="btn btn-secondary mb-2 dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Бронь
        </button>
      <form class="dropdown-menu p-4">
        <div class="form-group">
          <label for="date">Бронь на:</label>
          <input type="date" class="form-control" id="dt_bgn">
        </div>

        <div class="form-group">
          <label for="date">Бронь на:</label>
          <select name="rent_point" id="1">
              <option value="1">Парковка 1</option>
          </select>
        </div>
  
        <div class="form-group">
          <label>Стоимость поездки в час: 100р</label>
        </div>
        <button type="submit" class="btn btn-primary">Забронировать</button>
      </form>
    </div>
    <map-component></map-component>
    </div>
</template>

<script>
    export default {
        name: "Index"
    }
</script>

<style scoped>
</style>