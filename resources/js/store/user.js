import axios from 'axios'

export default {
    namespaced: true,

    state: {
        user: {},
        userConfirm: false
    },

    getters: {
        user (state) {
            return state.user
        },
        userConfirm (state) {
            return state.userConfirm
        }
    },

    mutations: {
        mutateUser (state, data) {
            state.user = data
        },
        mutateUserConfirm (state, data) {
            state.userConfirm = data
        }
    },

    actions: {

    }
}
