<template>
     <div>
           <nav>
        <div class="nav nav-tabs" id="nav-tab" role="tablist">
          <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Анкета</a>
          <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Маршруты</a>
        </div>
    </nav>
      <div class="tab-content" style="margin-top: 20px" id="nav-tabContent">
        <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 mb-4">
                        <div class="container">
                            <div class="card h-100 text-center">
                                <img src="img/polar-bear.png" class="card-img-top" alt="...">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8 mb-4">
                        <form>
                            <div class="form-group">
                                <label for="last_name">ФИО</label>
                                <input type="email" class="form-control" id="last_name" aria-describedby="emailHelp">
                              </div>
                            <div class="form-group">
                                <label for="pasport">Паспорт</label>
                                <div class="row">
                                    <div class="col">
                                      <input type="text" class="form-control" id="seria" placeholder="Серия">
                                    </div>
                                    <div class="col">
                                      <input type="text" class="form-control" id="number" placeholder="Номер">
                                    </div>
                                  </div>    
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Адрес</label>
                                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Email</label>
                                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                            </div>
                            <div class="form-group">
                              <label for="exampleInputPassword1">Password</label>
                              <input type="password" class="form-control" id="exampleInputPassword1">
                            </div>
                            <button type="submit" class="btn btn-primary">Сохранить изменения</button>
                          </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
            <table class="table table-hover">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Название пункта выдачи</th>
                    <th scope="col">Оборудование</th>
                    <th scope="col">Точка отправления</th>
                    <th scope="col">Точка назначения</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">1</th>
                    <td>Пункт 1</td>
                    <td>Самокат</td>
                    <td>Энгельса 1</td>
                    <td>Энгельса 48</td>
                  </tr>
                  <tr>
                    <th scope="row">2</th>
                    <td>Пункт 2</td>
                    <td>Велосипед</td>
                    <td>Троицкая 85</td>
                    <td>Московская 7</td>
                  </tr>
                  <tr>
                    <th scope="row">3</th>
                    <td>Пункт 3</td>
                    <td>Самокат</td>
                    <td>Пушкинская 47</td>
                    <td>Московская 12</td>
                  </tr>
                  <tr>
                    <th scope="row">4</th>
                    <td>Пункт 4</td>
                    <td>Ролики</td>
                    <td>26 Бакинских комиссаров 8</td>
                    <td>Неизвестная 45</td>
                  </tr>
                </tbody>
              </table>
        </div>
       </div>
    </div> 
</template>

<script>
    export default {
        name: "Profile"
    }
</script>

<style scoped>
</style>