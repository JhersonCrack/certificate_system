<template>
    <div class="pt-2 flex justify-end pr-10">
      <a :href="path">         
        <img class="h-16" :src="img" alt="">
      </a>
    </div>
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        },
        data(){
          return{
            img : require('./add.png'),
            path: '#'
          }
        }
    }
</script>
