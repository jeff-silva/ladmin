// require('dotenv').config();

import Vue from 'vue';

import Swal from 'sweetalert2';
Vue.prototype.$swal = Swal;
Vue.prototype.$confirm = function(html) {
    return new Promise((resolve, reject) => {
        Swal.fire({
            title: '',
            html: html,
            icon: 'warning',
            showCancelButton: true,
            confirmButtonText: 'Yes, delete it!',
        })
        .then((result) => {
            if (result.isConfirmed) {
                resolve(result);
            }
        })
        .catch(err => {
            reject(err);
        });
    });
};

import Element from 'element-ui';
import locale from 'element-ui/lib/locale/lang/en';
Vue.use(Element, { locale });

// https://axios.nuxtjs.org/
export default function (nuxt) {
    nuxt.$axios.onRequest((config) => {
        config.proxy = true;
        return config;
    });
};


// https://validatejs.org/
import validate from 'validate.js';

Vue.prototype.$validator = function(rules) {
    return new (class {
        run = 0;
        error = {};
        errorReal = {};
        rules = {};
    
        constructor(rules) {
            validate.validators.presence.message = 'Campo obrigatório';
            validate.validators.email.message = 'E-mail inválido';
            validate.validators.equality.message = 'Não bate com a confirmação';
    
            this.rules = rules;
        }
        
        clear() {
            this.run = 0;
            this.error = {};
            this.errorReal = {};
        }
    
        validate(data, onlyField=null) {
            this.run++;

            for(let i in data) { if (! data[i]) delete data[i]; }
            let error = validate(data, this.rules) || {};

            this.error = Object.assign({}, error);
            this.errorReal = Object.assign({}, error);
    
            if (onlyField) {
                for(let i in this.error) {
                    if (i == onlyField) continue;
                    delete this.error[i];
                }
            }
        }
    
        valid() {
            if (this.run==0) return false;
            return Object.keys(this.errorReal).length==0;
        }
    
        invalid() {
            if (this.run==0) return true;
            return Object.keys(this.errorReal).length>0;
        }
    
        setError(errors) {
            this.clear();
            this.error = errors;
            this.errorReal = errors;
        }
    })(rules);
};


Vue.prototype.$log = function() {
    Array.prototype.slice.call(arguments).forEach(item => {
        console.log(item);
    });
};


let helpers = {
    linksRoutes: function(startsWith='/') {
        return new Promise((resolve, reject) => {
            let _promise = function(route, parent=false) {
                let path = ['/', (parent? parent.path: null), route.path].join('/').replace(/\/+/g, '/');
                if (!path.startsWith(startsWith)) return null;
    
                return new Promise((resolve, reject) => {
                    route.component().then(comp => {
                        let label = (typeof comp.head=='function')? (comp.head().title || path): path;
                        resolve({to:path, label});
                    });
                });
            };

            let promises = [];
            // console.log(JSON.stringify(this.$router.options.routes, 2, ' '));

            for(let i in this.$router.options.routes) {
                let route1 = this.$router.options.routes[i];
                promises.push(_promise(route1));

                for(let ii in route1.children) {
                    let route2 = route1.children[ii];
                    promises.push(_promise(route2, route1));

                    for(let iii in route2.children) {
                        let route3 = route2.children[iii];
                        promises.push(_promise(route3, route2));

                        for(let iiii in route3.children) {
                            let route4 = route3.children[iiii];
                            promises.push(_promise(route4, route3));
                        }
                    }
                }
            }
    
            Promise.all(promises.filter(value => value)).then(values => {
                resolve(values);
            });
        });
    },

    strContains: function(value, contains) {
        return (value || '').includes(contains);
    },

    timeout: function(params = {}) {
        params = {
            name: '',
            timeout: 0,
            interval: 0,
            callback() {},
            ...params
        };

        if (!params.name) throw 'Informe parâmetro "name"';

        if (window[`nuxt-timeout-${params.name}`]) {
            clearTimeout(window[`nuxt-timeout-${params.name}`]);
        }

        window[`nuxt-timeout-${params.name}`] = setTimeout(() => {
            params.callback();
        }, params.timeout);

        if (params.interval) {
            if (window[`nuxt-interval-${params.name}`]) {
                clearInterval(window[`nuxt-interval-${params.name}`]);
            }

            window[`nuxt-interval-${params.name}`] = setInterval(() => {
                params.callback();
            }, params.interval);
        }
    },
};

for(let name in helpers) {
    Vue.prototype['$'+name] = helpers[name];
    Vue.filter(name, helpers[name]);
}