<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">

                <div class="row align-items-lg-center">

                    <div class="col text-center text-md-start">

                        <global-page-title />

                        <div class="row mb-2">
                            <div class="col">
                                <a href="/plans" class="btn btn-primary text-center">< Back</a>
                            </div>
                        </div>
                        <div class="row mb-2 mt-5">
                            <div class="col">
                                <h2>Plan detail</h2>
                                <div class="card">
                                    <div class="card-body">
                                        <p class="font-weight-bold fs-5">{{ selectedPlan.title }}</p>
                                        <p>£{{ selectedPlan.price }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div v-if="userConfirm" class="mt-5">
                            <subscription-payment/>
                        </div>
                        <div class="mt-5" v-else>
                            <subscription-form :plan="plan" v-if="Object.keys(user).length === 0"/>
                            <subscription-summary v-else />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</template>

<script>
    import { mapGetters, mapActions } from 'vuex'

    export default {
        props: {
            plan: {
                required: true,
                type: String
            }
        },
        computed:{
            ...mapGetters({
                user: 'user/user',
                userConfirm: 'user/userConfirm',
                selectedPlan: 'plan/selectedPlan'
            })
        },

        methods: {
            ...mapActions({
                getSelectedPlan: 'plan/getPlan'
            })
        },

        mounted() {
            this.getSelectedPlan(this.plan)
        }

    }
</script>
