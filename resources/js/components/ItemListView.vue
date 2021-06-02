<template>
    <div>
        <div v-for="(item, index) in items" :key="index">
            <div v-for="(user, index) in users" :key="index">
            <list-item
                :item="item"
                  :user ="user"
                   />
        </div>
           </div>
    </div>
</template>

<script>
import ListItem from './ItemList.vue'
export default {
    props: ['items', 'users'],
    components: { 
        ListItem
    },
}
</script>
