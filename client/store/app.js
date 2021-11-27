export default {
    state: {
        settings: {},
    },

    actions: {
        settingsLoad({store}) {
            alert('/api/settings/get-all');
        },
    },
}