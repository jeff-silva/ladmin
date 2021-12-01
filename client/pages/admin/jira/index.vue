<template>
    <div>
        <el-select v-model="jiraParams.accountId" filterable @change="jiraIssuesLoad()">
            <el-option value="">Ninguém</el-option>
            <el-option value="" v-for="u in jiraUsers" :key="u.accountId" :value="u.accountId" :label="u.displayName">
                {{ u.displayName }}
            </el-option>
        </el-select>

        <pre>jiraParams: {{ jiraParams }}</pre>

        <table class="table table-sm" v-if="jiraResponse">
            <thead>
                <tr>
                    <th>Aaa</th>
                </tr>
            </thead>

            <tbody>
                <tr v-for="i in jiraResponse.issues">
                    <td>{{ i.fields.project.key }}</td>
                    <td>{{ i.fields.description }}</td>
                    <td>{{ i.fields.assignee.displayName }}</td>
                </tr>
            </tbody>
        </table>

        <pre>jiraUsers: {{ jiraUsers }}</pre>
    </div>
</template>

<script>
export default {
    middleware: 'auth',
    layout: 'admin',

    head() {
        return {
            title: "Jira",
        };
    },

    data() {
        return {
            jiraParams: {
                accountId: '',
                createdMin: '',
                createdMax: '',
            },
            jiraUsers: [],
            jiraResponse: false,
        };
    },

    methods: {
        jiraUsersLoad() {
            return this.$axios.get('/api/jira/users').then(resp => {
                this.jiraParams.accountId = resp.data[0].accountId;
                this.jiraUsers = resp.data;
            });
        },

        jiraIssuesLoad() {
            let params = this.jiraParams;
            this.$axios.get('/api/jira/issues', {params}).then(resp => {
                this.jiraResponse = resp.data;
            });
        },
    },

    mounted() {
        this.jiraUsersLoad().then(resp => {
            this.jiraIssuesLoad();
        });
    },
}
</script>