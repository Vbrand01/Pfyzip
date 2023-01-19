<script>
import Card from './components/Card.vue';
import Form from './components/Form.vue';
import Home from './components/Home.vue';
import Nav from './components/Nav.vue';

export default{
    name: "App",
    components: {
    Nav,
    Home,
    Card,
    Form
}
}
</script>

<template>
  <div>
    <Nav />
    <Home />
    <br>
    <Card />
    <Form />
  </div>
</template>

<style>

*{
  padding: 0;
  margin: 0;
  box-sizing: border-box;
  background-color: rgb(17, 17, 17);
  font-family: Inter, Avenir, Helvetica, Arial, sans-serif;
}

</style>
