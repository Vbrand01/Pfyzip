<script>


export default {
  name: 'Form',
  data() {
    return {
      dados: []
    }
  },
  methods: {
    carregarDados() {
      axios.get('http://10.46.118.244/nft-vue/src/backend/conexao.php')
        .then(response => (this.dados = response.data))
    }
  },
  created() {
    this.carregarDados()
  }
}

// const server = "http://localhost/nft-vue/src/backend/conexao.php";

// let results = await axios.get(`${server}/users`);


// let results = await axios.get('http://localhost/nft-vue/src/backend/conexao.php');

// this.res = results.data;

// console.log(res)

</script>

<template>
  <div class="container">
    <div class="row">
      <div class="col-sm-6">
        <div class="row">
          <div class="col-sm-12">
            <form method="POST" action="">
              <div class="back">
                <div class="row">
                  <div class="col-sm-6 inputs pt-3">
                    <label for="nome">Insira seu nome</label>
                    <input v-for="dado in dados" :key="dado.id" style="color: rgb(255, 0, 68);" class="form-control" name="nome" id="nome"
                      :class="nome" type="text">
                      {{ dado.nome }}
                  </div>
                  <div class="col-sm-6 inputs pt-3">
                    <label for="sobrenome">Insira seu sobrenome</label>
                    <input style="color: rgb(255, 0, 68);" class="form-control" name="sobrenome" id="sobrenome"
                      :class="sobrenome" type="text">
                  </div>
                </div>
                <div class="row">
                  <div class="col-sm-6 inputs pt-3">
                    <label for="endereco">Insira o seu endereço</label>
                    <input style="color: rgb(255, 0, 68);" class="form-control" name="endereco" id="endereco"
                      :class="endereco" type="text">
                  </div>
                  <div class="col-sm-6 inputs pt-3">
                    <label for="cidade">Insira sua cidade</label>
                    <input style="color: rgb(255, 0, 68);" class="form-control" name="cidade" id="cidade"
                      :class="cidade" type="text">
                  </div>
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
  <br><br><br><br><br><br><br>
</template>

<style scoped>
.back {
  background-color: transparent;
  padding: 20px;
  border-radius: 80px;
}

.col-sm-12 {
  background: transparent;
  ;
}

.container {
  margin-top: 100px;
}

label {
  color: rgb(216, 216, 216);
}

input {
  background-color: rgb(3, 3, 3);
  border: none;
  border-radius: 10px;
  outline: none !important;
  background-size: cover;
}

input:focus,
input:active {
  background-color: black;
}

textarea:focus,
input:focus,
select:focus {
  box-shadow: 0 0 0 0;
  border: 0 none;
  outline: 0;
}

input:-webkit-autofill {
  -webkit-box-shadow: 0 0 0 50px rgb(255, 0, 68) inset;
}

input:-webkit-autofill {
  -webkit-text-fill-color: rgb(255, 255, 255) !important;
  font-size: 15px;
}
</style>