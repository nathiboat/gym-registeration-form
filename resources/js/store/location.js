import axios from 'axios'

export default {
    namespaced: true,

    state: {
        locations: {},
    },

    getters: {
        locations (state) {
            return state.locations
        }
    },

    mutations: {
        mutateLocations (state, data) {
            state.plans = data
        }
    },

    actions: {
        async getLocations ({ commit }, data) {

            try {
                let response = await axios.get('/api/locations')

                this.locations = response.data

                commit('mutateLocations', response.data)

            } catch (error) {
                console.error(error)
            }

        },

    }
}
