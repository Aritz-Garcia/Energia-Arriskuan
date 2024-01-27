import { createRouter, createWebHashHistory } from 'vue-router'

const router = createRouter({
  history: createWebHashHistory(),
  routes: [
    {
      path: '/',
      name: 'general',
      component: () => import('../../components/klasifikazioa/general.vue')
    },
    {
      path: '/proba1',
      name: 'proba1',
      component: () => import('../../components/klasifikazioa/proba1.vue')
    },
    {
        path: '/proba2',
        name: 'proba2',
        component: () => import('../../components/klasifikazioa/proba2.vue')
    },
    {
        path: '/proba3',
        name: 'proba3',
        component: () => import('../../components/klasifikazioa/proba3.vue')
    },
    {
        path: '/proba4',
        name: 'proba4',
        component: () => import('../../components/klasifikazioa/proba4.vue')
    }
  ]
})

export default router
