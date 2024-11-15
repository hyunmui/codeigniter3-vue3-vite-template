<script setup lang="ts">
import HelloWorld from "./components/HelloWorld.vue";
import TheWelcome from "./components/TheWelcome.vue";
import { setupCounter } from "core";

window.onload = () => {
  setupCounter(document.querySelector<HTMLButtonElement>("#counter")!);
};
</script>

<template>
  <header>
    <img
      alt="Vue logo"
      class="logo"
      src="./assets/logo.svg"
      width="125"
      height="125"
    />

    <div class="wrapper">
      <HelloWorld msg="You did it!" />

      <button type="button" id="counter">&nbsp;</button>
    </div>
  </header>

  <main>
    <TheWelcome />
  </main>
</template>

<style scoped>
header {
  line-height: 1.5;
}

.logo {
  display: block;
  margin: 0 auto 2rem;
}

#counter {
  margin-top: 30px;
  color: #fff;
  background-color: #41b883;
  border: 0;
  padding: 0.625rem;
  border-radius: 5px;
  font-size: 1.5rem;
  width: 50%;
}

#counter:hover {
  background-color: #42b883aa;
}

@media (min-width: 1024px) {
  header {
    display: flex;
    place-items: center;
    padding-right: calc(var(--section-gap) / 2);
  }

  .logo {
    margin: 0 2rem 0 0;
  }

  header .wrapper {
    display: flex;
    place-items: flex-start;
    flex-wrap: wrap;
  }
}
</style>
