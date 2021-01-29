<template>

        <div class="card">
            <div class="card-body">
                <div class="mb-3 text-center">
                    <label>Card details</label>
                </div>
                <div class="form-group border border-gray round p-3">
                    <div id="card-element"></div>
                </div>
                <button
                    type="submit" class="btn btn-dark" @click.prevent="processPayment"
                    v-model="submitButton"
                >
                    Confirm payment
                </button>
            </div>
        </div>
</template>

<script>
    import {loadStripe} from "@stripe/stripe-js";
    import { mapGetters, mapMutations } from 'vuex'

    export default {
        data () {
            return {
                form: {}
            }
        },
        computed: {
          ...mapGetters({
              getUser: 'user/user',
              selectedPlan: 'plan/selectedPlan'
          })
        },
        methods: {
            ...mapMutations({
               mutateUser: 'user/mutateUser'
            }),
            async processPayment() {

                this.form = this.getUser
                this.form.plan = this.selectedPlan.slug

                this.paymentProcessing = true


                const { paymentMethod , error } = await this.stripe.createPaymentMethod(
                    'card', this.cardElement, {
                        billing_details: {
                            name: this.form.name + ' ' + this.form.surname,
                            email: this.form.email,
                            address: {
                                postal_code: this.form.postcode
                            }
                        }
                    }
                )


                if(error) {
                    this.paymentProcessing = false
                    alert(error)
                } else {
                    this.form.payment_method_id = paymentMethod.id

                    try {
                        await axios.post('/api/subscriptions', {form: this.form}).then(() =>{
                            window.location.href = '/thankyou'
                        })

                    } catch (error) {
                        console.error(error);
                    }
                }
            }
        },
        async mounted() {
            this.stripe = await loadStripe(process.env.MIX_STRIPE_KEY)

            const elements = this.stripe.elements()
            this.cardElement = elements.create('card')

            this.cardElement.mount('#card-element');
        }
    }
</script>
