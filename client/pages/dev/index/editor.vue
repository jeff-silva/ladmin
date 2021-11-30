<template>
    <div>
        <div class="row g-2">
            <div class="col-12 col-md-6">
                <ui-editor v-model="content" type="code" @change="storeValue($event)"></ui-editor>
            </div>

            <div class="col-12 col-md-6">
                <ui-editor v-model="content" type="html" @change="storeValue($event)"></ui-editor>
            </div>

            <div class="col-12 bg-dark text-success p-2" style="font-family:monospace;">
                content: {{ content }}
            </div>
        </div>
    </div>
</template>

<script>
export default {
    head() {
        return {
            title: "Editor",
        };
    },

    data() {
        return {
            content: (localStorage.getItem('dev-editor-content') || 'Hello <strong>World</strong>'),
        };
    },

    methods: {
        storeValue(value) {
            localStorage.setItem('dev-editor-content', value);
        },
    },
}
</script>