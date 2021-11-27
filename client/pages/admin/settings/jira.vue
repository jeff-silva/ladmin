<template>
    <div>
        <ui-field label="Chave JIRA" layout="horizontal">
            <ui-password v-model="settings['jira.access_token']"></ui-password>
        </ui-field>
    </div>
</template>

<script>
export default {
    middleware: 'auth',
    layout: 'admin',

    props: {
        settings: Object,
        settingsGetAll: Function,
        settingsSaveAll: Function,
    },

    data() {
        return {
            propsSettings: JSON.parse(JSON.stringify(this.settings)),
        };
    },

    head() {
        return {
            title: "Jira",
        };
    },
}
</script>