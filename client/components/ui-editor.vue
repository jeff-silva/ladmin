<template>
    <div>
        <div class="ui-editor ui-editor-html" v-if="props.type=='code'">
            <div ref="monaco" style="min-height:300px;"></div>
        </div>

        <div class="ui-editor ui-editor-html" v-if="props.type=='html'" @keyup="setValue($event.target.innerHTML)">
            <div class="ui-editor-html-content" contenteditable="true" ref="html"></div>
        </div>
    </div>
</template>

<script>
import * as monaco from 'monaco-editor';

self.MonacoEnvironment = {
	getWorkerUrl: function (moduleId, label) {
		if (label === 'json') {
			return './json.worker.bundle.js';
		}
		if (label === 'css' || label === 'scss' || label === 'less') {
			return './css.worker.bundle.js';
		}
		if (label === 'html' || label === 'handlebars' || label === 'razor') {
			return './html.worker.bundle.js';
		}
		if (label === 'typescript' || label === 'javascript') {
			return './ts.worker.bundle.js';
		}
		return './editor.worker.bundle.js';
	}
};

export default {
    props: {
        value: [Boolean, String],
        type: {default: "html"}, // html|code
        language: {default: "html"},
        theme: {default: "vs-dark"},
    },

    watch: {
        $props: {deep:true, handler(value) {
            if (this.$el.contains(document.activeElement)) return;
            this.props = JSON.parse(JSON.stringify(value));
            this.monacoSetValue(this.props.value);
            this.editorSetValue(this.props.value);
        }},
    },

    data() {
        return {
            props: JSON.parse(JSON.stringify(this.$props)),
            monaco: false,
        };
    },

    methods: {
        setValue(value) {
            console.log(value);
            this.props.value = value;
            this.$emit('input', value);
            this.$emit('value', value);
            this.$emit('change', value);
        },

        editorInit() {},
        
        editorSetValue(value) {
            if (! this.$refs.html) return;
            this.$refs.html.innerHTML = value;
        },

        monacoInit() {
            setTimeout(() => {
                let target = this.$refs.monaco;
                if (! target) return;
                this.monaco = monaco.editor.create(target, {
                    value: this.props.value,
                    language: this.props.language,
                    theme: this.props.theme,
                });

                this.monaco.on('change', evt => {
                    console.log('aaa');
                    // this.props.value = this.monaco.getModel().getValue();
                    // this.emitValue();
                });
            }, 100);
        },

        monacoSetValue(value) {
            if (! this.monaco) return;
            this.monaco.getModel().setValue(value);
        },
    },

    mounted() {
        this.monacoInit();
        this.editorInit();
    },
}
</script>