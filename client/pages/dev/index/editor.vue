<template>
    <div>
        <div class="row g-0">
            <div class="col-12 col-md-6">
                <ui-editor v-model="content" type="code"></ui-editor>
            </div>

            <div class="col-12 col-md-6">
                <ui-editor v-model="content" type="html"></ui-editor>
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
            content: 'Hello <strong>World</strong>',
        };
    },
}
</script>