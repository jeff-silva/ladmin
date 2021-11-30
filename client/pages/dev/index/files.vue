<template>
    <div>
        <ui-upload v-model="upload" @change="$refs.file.refresh()"></ui-upload>
        <br><br>
        <ui-file v-model="files" ref="file"></ui-file>
        <br><br>
        <pre>{{ $data }}</pre>
    </div>
</template>

<script>
export default {
    head() {
        return {
            title: "Arquivos",
        };
    },

    data() {
        return {
            upload: '',
            files: [],
        };
    }
}
</script>