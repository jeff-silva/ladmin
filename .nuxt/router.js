import Vue from 'vue'
import Router from 'vue-router'
import { normalizeURL, decode } from 'ufo'
import { interopDefault } from './utils'
import scrollBehavior from './router.scrollBehavior.js'

const _7b95a9c4 = () => interopDefault(import('..\\client\\pages\\admin\\index.vue' /* webpackChunkName: "pages/admin/index" */))
const _65f3df7e = () => interopDefault(import('..\\client\\pages\\dev\\index.vue' /* webpackChunkName: "pages/dev/index" */))
const _482ca978 = () => interopDefault(import('..\\client\\pages\\dev\\index\\index.vue' /* webpackChunkName: "pages/dev/index/index" */))
const _3821f0a8 = () => interopDefault(import('..\\client\\pages\\dev\\index\\artisan.vue' /* webpackChunkName: "pages/dev/index/artisan" */))
const _4d6f7026 = () => interopDefault(import('..\\client\\pages\\dev\\index\\auth.vue' /* webpackChunkName: "pages/dev/index/auth" */))
const _1a9ee7eb = () => interopDefault(import('..\\client\\pages\\dev\\index\\editor.vue' /* webpackChunkName: "pages/dev/index/editor" */))
const _0468e4f0 = () => interopDefault(import('..\\client\\pages\\dev\\index\\endpoints.vue' /* webpackChunkName: "pages/dev/index/endpoints" */))
const _033eb95c = () => interopDefault(import('..\\client\\pages\\dev\\index\\example.vue' /* webpackChunkName: "pages/dev/index/example" */))
const _82bc3b2e = () => interopDefault(import('..\\client\\pages\\dev\\index\\files.vue' /* webpackChunkName: "pages/dev/index/files" */))
const _5e860995 = () => interopDefault(import('..\\client\\pages\\dev\\index\\nav.vue' /* webpackChunkName: "pages/dev/index/nav" */))
const _64573b54 = () => interopDefault(import('..\\client\\pages\\admin\\jira\\index.vue' /* webpackChunkName: "pages/admin/jira/index" */))
const _86f0b0be = () => interopDefault(import('..\\client\\pages\\admin\\settings.vue' /* webpackChunkName: "pages/admin/settings" */))
const _ae63f47e = () => interopDefault(import('..\\client\\pages\\admin\\settings\\index.vue' /* webpackChunkName: "pages/admin/settings/index" */))
const _9a38d9fa = () => interopDefault(import('..\\client\\pages\\admin\\settings\\dashboard.vue' /* webpackChunkName: "pages/admin/settings/dashboard" */))
const _5752b38b = () => interopDefault(import('..\\client\\pages\\admin\\settings\\email.vue' /* webpackChunkName: "pages/admin/settings/email" */))
const _e8f38634 = () => interopDefault(import('..\\client\\pages\\admin\\settings\\files.vue' /* webpackChunkName: "pages/admin/settings/files" */))
const _6bdac90f = () => interopDefault(import('..\\client\\pages\\admin\\settings\\jira.vue' /* webpackChunkName: "pages/admin/settings/jira" */))
const _4372d2a8 = () => interopDefault(import('..\\client\\pages\\admin\\settings\\user.vue' /* webpackChunkName: "pages/admin/settings/user" */))
const _bf617970 = () => interopDefault(import('..\\client\\pages\\admin\\users\\index.vue' /* webpackChunkName: "pages/admin/users/index" */))
const _583510a0 = () => interopDefault(import('..\\client\\pages\\admin\\users\\_id.vue' /* webpackChunkName: "pages/admin/users/_id" */))
const _e3fc45fe = () => interopDefault(import('..\\client\\pages\\index.vue' /* webpackChunkName: "pages/index" */))

const emptyFn = () => {}

Vue.use(Router)

export const routerOptions = {
  mode: 'history',
  base: '/',
  linkActiveClass: 'nuxt-link-active',
  linkExactActiveClass: 'nuxt-link-exact-active',
  scrollBehavior,

  routes: [{
    path: "/admin",
    component: _7b95a9c4,
    name: "admin"
  }, {
    path: "/dev",
    component: _65f3df7e,
    children: [{
      path: "",
      component: _482ca978,
      name: "dev-index"
    }, {
      path: "artisan",
      component: _3821f0a8,
      name: "dev-index-artisan"
    }, {
      path: "auth",
      component: _4d6f7026,
      name: "dev-index-auth"
    }, {
      path: "editor",
      component: _1a9ee7eb,
      name: "dev-index-editor"
    }, {
      path: "endpoints",
      component: _0468e4f0,
      name: "dev-index-endpoints"
    }, {
      path: "example",
      component: _033eb95c,
      name: "dev-index-example"
    }, {
      path: "files",
      component: _82bc3b2e,
      name: "dev-index-files"
    }, {
      path: "nav",
      component: _5e860995,
      name: "dev-index-nav"
    }]
  }, {
    path: "/admin/jira",
    component: _64573b54,
    name: "admin-jira"
  }, {
    path: "/admin/settings",
    component: _86f0b0be,
    children: [{
      path: "",
      component: _ae63f47e,
      name: "admin-settings"
    }, {
      path: "dashboard",
      component: _9a38d9fa,
      name: "admin-settings-dashboard"
    }, {
      path: "email",
      component: _5752b38b,
      name: "admin-settings-email"
    }, {
      path: "files",
      component: _e8f38634,
      name: "admin-settings-files"
    }, {
      path: "jira",
      component: _6bdac90f,
      name: "admin-settings-jira"
    }, {
      path: "user",
      component: _4372d2a8,
      name: "admin-settings-user"
    }]
  }, {
    path: "/admin/users",
    component: _bf617970,
    name: "admin-users"
  }, {
    path: "/admin/users/:id",
    component: _583510a0,
    name: "admin-users-id"
  }, {
    path: "/",
    component: _e3fc45fe,
    name: "index"
  }],

  fallback: false
}

export function createRouter (ssrContext, config) {
  const base = (config._app && config._app.basePath) || routerOptions.base
  const router = new Router({ ...routerOptions, base  })

  // TODO: remove in Nuxt 3
  const originalPush = router.push
  router.push = function push (location, onComplete = emptyFn, onAbort) {
    return originalPush.call(this, location, onComplete, onAbort)
  }

  const resolve = router.resolve.bind(router)
  router.resolve = (to, current, append) => {
    if (typeof to === 'string') {
      to = normalizeURL(to)
    }
    return resolve(to, current, append)
  }

  return router
}
