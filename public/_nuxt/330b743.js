(window.webpackJsonp=window.webpackJsonp||[]).push([[19],{669:function(t,e,n){"use strict";n.r(e);var l={middleware:"auth",layout:"admin",props:{settings:Object,settingsGetAll:Function,settingsSaveAll:Function},data:function(){return{propsSettings:JSON.parse(JSON.stringify(this.settings))}},head:function(){return{title:"Dashboard"}},methods:{linkAdd:function(){Array.isArray(this.settings["dashboard.links"])||(this.settings["dashboard.links"]=[]),this.settings["dashboard.links"].push({label:"",url:""}),this.$forceUpdate()}}},r=n(7),component=Object(r.a)(l,(function(){var t=this,e=t.$createElement,n=t._self._c||e;return n("div",[n("ui-field",{attrs:{label:"Links importantes",layout:"vertical"}},[n("table",{staticClass:"table"},[n("thead",[n("tr",[n("th",[t._v("Descrição")]),t._v(" "),n("th",[t._v("URL")])])]),t._v(" "),n("tbody",t._l(t.settings["dashboard.links"]||[],(function(e){return n("tr",[n("td",{staticClass:"p-1"},[n("input",{directives:[{name:"model",rawName:"v-model",value:e.label,expression:"l.label"}],staticClass:"form-control bg-transparent border-0",attrs:{type:"text",placeholder:"label"},domProps:{value:e.label},on:{input:function(n){n.target.composing||t.$set(e,"label",n.target.value)}}})]),t._v(" "),n("td",{staticClass:"p-1"},[n("input",{directives:[{name:"model",rawName:"v-model",value:e.url,expression:"l.url"}],staticClass:"form-control bg-transparent border-0",attrs:{type:"text",placeholder:"url"},domProps:{value:e.url},on:{input:function(n){n.target.composing||t.$set(e,"url",n.target.value)}}})])])})),0)]),t._v(" "),n("a",{staticClass:"btn btn-primary",attrs:{href:"javascript:;"},on:{click:function(e){return t.linkAdd()}}},[t._v("Add link")])])],1)}),[],!1,null,null,null);e.default=component.exports;installComponents(component,{UiField:n(204).default})}}]);