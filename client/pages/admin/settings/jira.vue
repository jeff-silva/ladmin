<template>
    <div>
        <ui-field label="Domínio Jira" layout="horizontal">
            <input type="text" class="form-control" v-model="settings['jira.domain']" placeholder="https://seu-dominio.atlassian.net" />
        </ui-field>

        <ui-field label="E-mail Jira" layout="horizontal">
            <input type="text" class="form-control" v-model="settings['jira.email']" placeholder="email@host.com" />
        </ui-field>

        <ui-field label="Chave JIRA" layout="horizontal">
            <ui-password v-model="settings['jira.access_token']"></ui-password>
            <template #info>
                <a href="https://id.atlassian.com/manage-profile/security/api-tokens" target="_blank">Página de tokens Jira</a>
            </template>
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