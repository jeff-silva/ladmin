<template>
    <div>
        <div class="row">
            <div class="col-12 col-md-6">
                <div class="card">
                    <div class="card-header">Links</div>
                    <div class="card-body p-0">
                        <div class="list-group list-group-flush">
                            <div class="list-group-item" v-for="l in (settings['dashboard.links'] || [])">
                                <a :href="l.url" target="_blank">{{ l.label }}</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <pre>{{ settings }}</pre>
    </div>
</template>

<script>
export default {
    middleware: 'auth',
    layout: 'admin',

    data() {
        return {
            settings: false,
        };
    },

    methods: {
        settingsLoad() {
            this.$axios.get('/api/settings/get-all').then(resp => {
                this.settings = resp.data;
            });
        },
    },

    mounted() {
        this.settingsLoad();
    },
}
</script>