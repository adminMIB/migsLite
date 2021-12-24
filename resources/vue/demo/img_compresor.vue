<template>
   <div>
      <form @submit.prevent="upload">
         <image-compressor :done="getFiles" :scale="scale" :quality="quality"></image-compressor>
         <button type="submit">Upload</button>
      </form>

      <input type="number" v-model="quality" />
      <div>Kompresed Size : {{compressed.size}}</div>
      <div>Original Size : {{original.size}}</div>

      <img alt :src="img" class="w-100" />
   </div>
</template>

<script>
import imageCompressor from "vue-image-compressor";

export default {
   data() {
      return {
         img: "",
         scale: 100,
         quality: 0,
         originalSize: true,
         original: {},
         compressed: ""
      };
   },
   components: { imageCompressor },
   methods: {
      upload() {
         console.log(this.$refs);
         this.quality = 50;
      },
      getFiles(obj) {
         console.log(obj);
         this.img = obj.compressed.blob;
         this.original = obj.original;
         this.compressed = obj.compressed;
      }
   }
};
</script>