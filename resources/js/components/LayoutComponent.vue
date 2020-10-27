<template>

    <v-app>
        <header-component></header-component>
        <navigator-component></navigator-component>


        <!-- Sizes your content based upon application components -->
        <v-main>
   
            <!-- Provides the application the proper gutter -->
            <v-container>
            <!-- If using vue-router -->
            <router-view></router-view>

            </v-container>
            
        </v-main>

        <v-footer padless>
            <v-col
            class="text-center"
            cols="12"
            >
            {{ new Date().getFullYear() }} — <strong>SQUAD<small>AID</small>+</strong>
            </v-col>
        </v-footer>

    </v-app>

</template>

<script>

</script>