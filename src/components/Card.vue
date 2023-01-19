<template>
    <div class="container">
        <div class="row">
            <div class="col-sm-4">
                <div class="cards">
                    <figure class="card pt-3">
                        <img src="../assets/icons/security.png" alt="">
                        <h3>Antivirus</h3>
                        <p>Proteção em tempo real contra malware e ameaças online.</p>
                    </figure>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="cards">
                    <figure class="card pt-3">
                        <img src="../assets/icons/recarregar.png" alt="">
                        <h3>Software Updater</h3>
                        <p>Mantém seus softwares e drivers atualizados.</p>
                    </figure>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="cards">
                    <figure class="card pt-3">
                        <img src="../assets/icons/pass.png" alt="">
                        <h3>Password Manager</h3>
                        <p>Cria e memoriza senhas à prova de hackers para cada conta.</p>
                    </figure>
                </div>
            </div>
        </div>
    </div>

</template>

<script>

export default {
    name: 'Card'
}

</script>

<style scoped>

.container{
    margin-top: 70px;
}

img{
    height: 80px;
    width: 80px;
    background: transparent;
}

.cards {
  perspective: 500px;
}


.card {
  width: 300px;
  height: 300px;
  background: #000000;
  border-radius: 8px;
  position: relative;
  transform-style: preserve-3d;
  will-change: transform;
  transition: transform .5s;
  display: flex;
  justify-content: center;
  align-items: center;
  padding: 20px;
}

.card:hover {
  transform: translateZ(10px) rotateX(20deg) rotateY(20deg);
}

h3{
    color: white;
    text-align: center;
    margin-top: 30px;
    background: transparent;
    font-size: 24px;
}


p{
    color: rgb(111, 111, 111);
    background: transparent;
    text-align: center;
}
/* 
p {
  color: #fff;
  position: absolute;
  top: 50%;
  right: 20px;
  transform: translateY(-50%);
  transition: transform .5s;
  font: 700 1.5rem monospace;
  text-shadow: -1px -1px 0 #000,  
    1px -1px 0 #000,
    -1px 1px 0 #000,
     1px 1px 0 #000;
} */

.card:hover p, h3 {
  transform: translateZ(50px);
}

@media (max-width: 800px){
    .card {
        width: 100%;
    }
    .container{
        margin-top: 20px;
    }
}

</style>