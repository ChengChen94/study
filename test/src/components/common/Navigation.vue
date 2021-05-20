<template>
    <div class="nav">
        <slot></slot>
    </div>
</template>

<script>
    export default {
        name: "Navigation"
    }
    new Vue({
        data:{

        },
        props:{
            type:Array,

        }
    })
</script>

<style scoped>
.nav{
    position: fixed;
    left:0px;
    top:0px;
}
.nav div{
    flex: 1;
}
</style>