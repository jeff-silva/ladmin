<template>
    <div>
        <div class="d-flex">
            <div class="bg-dark text-white" style="min-width:200px; height:100vh; overflow:auto;">
                <ui-nav :items="pages" mode="vertical" text-color="#fff"></ui-nav>
            </div>
            <div class="flex-grow-1 p-2" style="height:100vh; overflow:auto;">
                <nuxt-child></nuxt-child>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    data() {
        return {
            pages: [],
        };
    },

    mounted() {
        this.$linksRoutes('/dev/').then(links => {
            this.pages.push({to:"/", label:"Home"});
            links.forEach(page => this.pages.push(page));
        });
    },
}
</script>