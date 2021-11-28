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

        <div>
            <div>Teste de personalidade MBTI</div>
            <div><a href="https://pt.wikipedia.org/wiki/Tipologia_de_Myers-Briggs">https://pt.wikipedia.org/wiki/Tipologia_de_Myers-Briggs</a></div>
            <div><a href="https://codepen.io/pulpexploder/pen/pNpdeq">https://codepen.io/pulpexploder/pen/pNpdeq</a></div>
            <div><a href="https://github.com/qathom/personality-test-vue/tree/master/src">https://github.com/qathom/personality-test-vue/tree/master/src</a></div>
            <div><a href="https://jsfiddle.net/samliew/5HUzW/">https://jsfiddle.net/samliew/5HUzW/</a></div>
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