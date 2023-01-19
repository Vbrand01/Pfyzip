<template>
    <div class="container">
        <div class="row">
            <div class="col-xl-6 pt-5">
                <img class=" w-100" src="../assets/images/home3.png" alt="">
            </div>
            <div class="col-xl-6">
                <div class="row">
                    <div class="col-sm-12 justify">
                        <h1>Pfyzip Free Antivirus para Windows e Linux</h1>
                        <p>✔ Protege você contra vírus em seu PC e dispositivos Android e IOS</p>
                        <p>✔ Verifica todas as partes do seu sistema e dispositivo para encontrar e remover ameaças
                        </p>
                        <p>✔ O melhor antivírus - bloqueia spyware, adware, ransomware etc.</p>
                        <p>✔ Leve e rápido: não deixa o seu PC lento</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <button>Download gratuito</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>

export default {
    name: 'Home'
}

</script>

<style scoped>
h1 {
    margin-top: 200px;
    color: rgb(255, 255, 255);
    font-weight: 800;
    font-size: 45px;
    text-transform: uppercase;
}

p {
    color: rgb(188, 183, 184);
}

button {
    border: 1px solid rgb(255, 0, 68);
    width: 100%;
    height: 70px;
    border-radius: 8px;
    background-image: url(../assets/images/y.png);
    color: rgb(255, 0, 68);
}

button:hover {
    cursor: pointer;
    background-color: black;
}

@media (max-width: 800px) {
    h1 {
        text-align: center;
        margin-top: 0px;
        font-size: 20px;
        background-color: rgb(41, 41, 41);
        border-radius: 8px;
        padding: 20px;
    }

    p {
        font-size: 18px;
        color: rgb(152, 152, 152);
        padding: 10px;
    }
}
</style>