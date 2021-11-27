<template>
    <div>
        <ui-field label="Links importantes" layout="vertical">
            <table class="table">
                <thead>
                    <tr>
                        <th>Descrição</th>
                        <th>URL</th>
                    </tr>
                </thead>
                <tbody>
                    <tr v-for="l in (settings['dashboard.links'] || [])">
                        <td class="p-1"><input type="text" class="form-control bg-transparent border-0" placeholder="label" v-model="l.label"></td>
                        <td class="p-1"><input type="text" class="form-control bg-transparent border-0" placeholder="url" v-model="l.url"></td>
                    </tr>
                </tbody>
            </table>

            <a href="javascript:;" class="btn btn-primary" @click="linkAdd()">Add link</a>
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
            title: "Dashboard",
        };
    },

    methods: {
        linkAdd() {
            if (!Array.isArray(this.settings['dashboard.links']))  {
                this.settings['dashboard.links'] = [];
            }
            
            this.settings['dashboard.links'].push({label:"", url:""});
            this.$forceUpdate();
        },
    },
}
</script>