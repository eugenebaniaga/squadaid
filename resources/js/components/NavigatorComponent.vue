<template>
      <v-navigation-drawer 
        permanent
      >

      <v-list
        dense
        nav
      >
        <v-list-item
          style="text-decoration:none;"
          v-for="item in items"
          :key="item.title"
          :to="item.link"
          link
        >
          <v-list-item-icon>
            <v-icon>{{ item.icon }}</v-icon>
          </v-list-item-icon>

          <v-list-item-content>
            <v-list-item-title>{{ item.title }}</v-list-item-title>
          </v-list-item-content>


        </v-list-item>
        
      </v-list>
      </v-navigation-drawer>
</template>

<script>
  export default {

    data () {
      return {
        items: [
          { title: 'Dashboard', icon: 'mdi-view-dashboard' , link:'/dashboard'},
          { title: 'Members', icon: 'mdi-account-box' , link:'/test'},
          { title: 'Schedules', icon: 'mdi-calendar' , link:'/schedules'},
        ],
        right: null,
      }
    },
  }
</script>