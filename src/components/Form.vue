<template>
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <div class="row">
                    <div class="col-sm-12">
                        <form method="POST" class="background" action="">
                            <div class="row">
                                <div class="col-sm-12">
                                    <div id="root">
                                        <table border="1" cellpadding="0" cellspacing="0" >
                                            <tr>
                                                <th width="162">Teste (1)</th>
                                                <th width="144">Teste (2)</th>
                                                <th width="124">Teste (3)</th>
                                                <th width="120">Teste (4)</th>
                                            </tr>
                                        </table>
                                    </div>
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-sm-3"></div>
            <div class="col-sm-3"></div>
        </div>
    </div>
</template>

<script>

export default{
    name: 'Form'
}

new Vue({
  el: '#root',
  data: {
    users: [],
    errorMessage: ""
  },

  methods: {

    getAllUsers: function() {

      var self = this;

      axios.get("http://localhost/nft-vue/src/backend/conexao.php")
        .then(function(response) {
          console.log(response);
          if (response.data.error) {
            self.errorMessage = response.date.message;
          } else {
            self.users = response.data.users;
          }
        });
    }
  },

  mounted: function() {
    this.getAllUsers();
    console.log("mounted");
  }

})

</script>

<style scoped>

.background{
    background-color: red !important;
}

.container{
    margin-top: 100px;
}


</style>