(window.webpackJsonp=window.webpackJsonp||[]).push([[14,8],{545:function(t,e,o){"use strict";o.r(e);o(62);var n=o(547),r={props:{value:[Boolean,String],language:{default:"html"},theme:{default:"vs-dark"}},data:function(){return{props:JSON.parse(JSON.stringify(this.$props)),monaco:!1}},watch:{$props:{deep:!0,handler:function(t){this.$el.contains(document.activeElement)||(this.props=JSON.parse(JSON.stringify(t)),this.setValue(this.props.value))}}},methods:{monacoInit:function(){var t=this;setTimeout((function(){var e=t.$refs.monaco;e&&(t.monaco=n.a.create(e,{value:t.props.value,language:t.props.language,theme:t.props.theme,automaticLayout:!0}),t.monaco.getModel().onDidChangeContent((function(e){t.props.value=t.monaco.getModel().getValue(),t.emitValue()})),t.monaco.getModel().setValue(t.props.value))}),100)},emitValue:function(){this.$emit("value",this.props.value),this.$emit("input",this.props.value),this.$emit("change",this.props.value)},setValue:function(t){this.$el.contains(document.activeElement)||this.monaco.getModel().setValue(t)},getValue:function(){return this.props.value=this.monaco.getModel().getValue()}},mounted:function(){this.monacoInit()}},c=o(7),component=Object(c.a)(r,(function(){var t=this.$createElement;return(this._self._c||t)("div",{ref:"monaco",staticStyle:{width:"100%","min-height":"150px"}})}),[],!1,null,null,null);e.default=component.exports},548:function(t,e,o){"use strict";o.r(e);var n=function(t,e,o){if(!e.hasOwnProperty(o)){var n=Object.getOwnPropertyDescriptor(t,o);Object.defineProperty(e,o,n)}},r={components:{VRuntimeTemplate:{props:{template:String,parent:Object,templateProps:{type:Object,default:function(){return{}}}},render:function(t){if(this.template){var e=this.parent||this.$parent,o=e.$data;void 0===o&&(o={});var r=e.$props;void 0===r&&(r={});var a=e.$options;void 0===a&&(a={});var p=a.components;void 0===p&&(p={});var c=a.computed;void 0===c&&(c={});var i=a.methods;void 0===i&&(i={});var s=this.$data;void 0===s&&(s={});var l=this.$props;void 0===l&&(l={});var d=this.$options;void 0===d&&(d={});var v=d.methods;void 0===v&&(v={});var m=d.computed;void 0===m&&(m={});var u=d.components;void 0===u&&(u={});var h={$data:{},$props:{},$options:{},components:{},computed:{},methods:{}};Object.keys(o).forEach((function(t){void 0===s[t]&&(h.$data[t]=o[t])})),Object.keys(r).forEach((function(t){void 0===l[t]&&(h.$props[t]=r[t])})),Object.keys(i).forEach((function(t){void 0===v[t]&&(h.methods[t]=i[t])})),Object.keys(c).forEach((function(t){void 0===m[t]&&(h.computed[t]=c[t])})),Object.keys(p).forEach((function(t){void 0===u[t]&&(h.components[t]=p[t])}));var f=Object.keys(h.methods||{}),$=Object.keys(h.$data||{}),b=Object.keys(h.$props||{}),O=Object.keys(this.templateProps),y=$.concat(b).concat(f).concat(O),j=(k=e,w={},f.forEach((function(t){return n(k,w,t)})),w),E=function(t){var e={};return t.forEach((function(t){t&&Object.getOwnPropertyNames(t).forEach((function(o){return n(t,e,o)}))})),e}([h.$data,h.$props,j,this.templateProps]);return t({template:this.template||"<div></div>",props:y,computed:h.computed,components:h.components,provide:this.$parent._provided},{props:E})}var k,w}}},props:{value:{default:""}},mounted:function(){}},c=o(7),component=Object(c.a)(r,(function(){var t=this,e=t.$createElement,o=t._self._c||e;return o("div",{staticClass:"row g-0"},[o("div",{staticClass:"col-6"},[o("ui-editor-code",{staticStyle:{height:"100%","min-height":"50px!important"},attrs:{value:t.value}})],1),t._v(" "),o("div",{staticClass:"col-6 ps-2"},[o("v-runtime-template",{attrs:{template:"<div>"+t.value+"</div>"}})],1)])}),[],!1,null,null,null);e.default=component.exports;installComponents(component,{UiEditorCode:o(545).default})}}]);