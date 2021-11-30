<template>
    <div>
        <div class="row">
            <div class="col-12 col-md-6">
                <div class="card">
                    <div class="card-header">Links</div>
                    <div class="card-body p-0">
                        <div class="list-group list-group-flush">
                            <div class="list-group-item" v-for="l in ($store.state.app.settings['dashboard.links'] || [])">
                                <a :href="l.url" target="_blank">{{ l.label }}</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-12 col-md-6">
                <div class="card">
                    <div class="card-header">Teste de personalidade MBTI</div>
                    <div class="card-body">
                        <ul>
                            <li><a target="_blank" href="https://pt.wikipedia.org/wiki/Tipologia_de_Myers-Briggs">https://pt.wikipedia.org/wiki/Tipologia_de_Myers-Briggs</a></li>
                            <li><a target="_blank" href="https://codepen.io/pulpexploder/pen/pNpdeq">https://codepen.io/pulpexploder/pen/pNpdeq</a></li>
                            <li><a target="_blank" href="https://github.com/qathom/personality-test-vue/tree/master/src">https://github.com/qathom/personality-test-vue/tree/master/src</a></li>
                            <li><a target="_blank" href="https://jsfiddle.net/samliew/5HUzW/">https://jsfiddle.net/samliew/5HUzW/</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <pre>{{ $store.state.env }}</pre>
    </div>
</template>

<script>
export default {
    middleware: 'auth',
    layout: 'admin',
}
</script>