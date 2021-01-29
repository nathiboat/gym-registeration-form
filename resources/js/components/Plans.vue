<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="row align-items-lg-center">

                    <div class="col text-center text-md-start">
                        <global-page-title />
                        <p class="lead mb-4">
                            Which plan is right for you?
                        </p>
                        <div class="row mb-2">
                            <div class="col">
                                <a href="/" class="btn btn-primary text-center">< Back</a>
                            </div>
                        </div>
                        <div class="d-flex flex-column flex-md-row text-center">
                            <plan-card
                                v-for="plan in plans"
                                :key="plan.id"
                                :plan="plan"
                            />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</template>

<script>

    import axios from 'axios'
    export default {
        props: {
            stripe_product_id: {
                required: true,
                type: String
            }
        },
        data () {
            return {
                plans: null
            }
        },

        methods: {
            async getPlans() {
                try {
                    const response = await axios.get('/api/plans', {
                        params: {
                            stripe_product_id: this.stripe_product_id
                        }
                    })

                    this.plans = response.data
                } catch (error) {
                    console.error(error);
                }
            },
        },
    }
</script>


