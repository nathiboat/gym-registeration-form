import axios from 'axios'

export default {
    namespaced: true,

    state: {
        selectedPlan: {},
        plans: []
    },

    getters: {
        selectedPlan (state) {
            return state.selectedPlan
        },
        plans (state) {
            return state.plans
        }
    },

    mutations: {
        mutateSelectedPlan (state, data) {
            state.selectedPlan = data
        },
        mutatePlans (state, data) {
            state.plans = data
        }
    },

    actions: {
        async getPlans ({ commit }, data) {

            try {
                const response = await axios.get('/api/plans', {
                    params: {
                        stripe_product_id: data
                    }
                })

                commit('mutatePlans', response.data)

            } catch (error) {
                console.error(error)
            }

        },
        async getPlan ({ commit },data ) {
            try {
                const response = await axios.get('/api/plans/' + data)

                commit('mutateSelectedPlan', response.data[0])

            } catch (error) {
                console.error(error)
            }
        }
    }
}
