<script setup>
import Layout from "../../Layouts/Layout.vue";
import {VFileInput, VContainer, VRow, VCol, VForm, VBtn, VImg} from "vuetify/components";
import {ref} from "vue";

const images = ref([]);
</script>

<template>
    <Layout>
        <div class="container">
            <v-container>
                <v-row>
                   <v-col md="4">
                       <v-card>
                           <v-card-title>
                               Uploading media
                           </v-card-title>
                           <v-card-item>
                               <v-file-input
                                   label="Image upload"
                                   accept="image/png, image/jpeg, image/bmp"
                               />
                           </v-card-item>
                           <v-card-actions>
                               <v-btn
                                   size="x-small"
                                   color="success"
                                   type="submit">
                                   Upload
                               </v-btn>
                           </v-card-actions>
                       </v-card>
                   </v-col>
                    <v-col md="8">
                        <v-container>
                            <v-card>
                                <v-card-title>

                                </v-card-title>
                                <v-card-items>

                                </v-card-items>
                            </v-card>
                            <v-row v-for="n in images.length/3" key="n">
                                <v-col v-for="k in 3" md="4" key="k">
                                    <v-card>
                                        <v-img src=""></v-img>
                                    </v-card>
                                </v-col>
                            </v-row>
                        </v-container>
                    </v-col>
                </v-row>
            </v-container>
        </div>
    </Layout>
</template>

<style scoped>
.container {
    max-width: 960px;
    width: 100%;
    padding: 40px;
    margin: 20px;
    border-radius: 20px;
    background-color: #f1f1f1;;
}
</style>
