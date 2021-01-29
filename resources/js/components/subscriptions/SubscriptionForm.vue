<template>
    <div class="card">
        <div class="card-body">
            <form>
                <div class="row">
                    <div class="col mb-3">

                        <input
                            type="text" class="form-control" id="name-input" placeholder="Name"
                            v-model="form.name"
                        >
                    </div>
                    <div class="col mb-3">
                        <input
                            type="text" class="form-control" id="surname-input" placeholder="Surname"
                            v-model="form.surname"
                        >
                    </div>
                </div>
                <div class="mb-3">
                    <input
                        type="email" class="form-control" id="email-input" placeholder="Email address"
                        v-model="form.email"
                    >
                </div>

                <div class="mb-3">
                    <input
                        type="text" class="form-control" id="phone-input" placeholder="Phone number"
                        v-model="form.phone"
                    >
                </div>

                <div class="mb-3">
                    <input
                        type="text" class="form-control" id="postcode-input" placeholder="Post code"
                        v-model="form.postcode"
                    >
                </div>

                <div class="mb-3">
                    <input
                        type="text" class="form-control" id="age-input" placeholder="Age"
                        v-model="form.age"
                    >
                </div>
                <div class="mb-3 text-center">
                    <label>Card details</label>
                </div>
                <div class="form-group border border-gray round p-3">

                    <div id="card-element"></div>
                </div>

                <div class="mb-3 form-check">
                    <input
                        type="checkbox" class="form-check-input" id="tc"
                        v-model="form.tc"
                    >
                    <label class="form-check-label" for="tc">
                        <a href="">Terms & Conditions</a>
                    </label>
                </div>
                <div class="mb-3 form-check">
                    <input
                        type="checkbox" class="form-check-input" id="newsletter"
                        v-model="form.newsletter"
                    >
                    <label class="form-check-label" for="newsletter">
                        Newsletter
                    </label>

                </div>

                <button
                    type="submit" class="btn btn-dark" @click.prevent="submitForm"
                    v-model="submitButton"
                >
                    Submit
                </button>
            </form>
        </div>
    </div>
</template>

<script>
import { loadStripe } from '@stripe/stripe-js'
import axios from "axios";

export default {
    props: {
        plan: {
            required: true,
            type: String
        }
    },
    data () {
        return {
            plans: null,
            submitButton: false,
            paymentProcessing: false,
            form: {
                name: '',
                surname: '',
                email: '',
                phone: '',
                postcode: '',
                age: '',
                tc: false,
                newsletter: false,
                payment_method_id: '',
                plan: ''
            },
            stripe: {},
            cardElement: {},
        }
    },

    methods: {
        async getPlan() {
            try {
                const response = await axios.get('/api/plans/' + this.plan)

                this.plans = response.data
            } catch (error) {
                console.error(error);
            }
        },
        async submitForm() {

            this.form.plan = this.plan
            this.paymentProcessing = true
            //process.env.MIX_STRIPE_SECRET

            // const { setupIntent, error } = await this.stripe.confirmCardSetup(
            //     process.env.MIX_STRIPE_SECRET, {
            //         payment_method: {
            //             card: this.cardElement,
            //             billing_details: {
            //                 name: this.form.name + ' ' + this.form.surname,
            //                 email: this.form.email,
            //                 address: {
            //                     postal_code: this.form.postcode
            //                 }
            //             }
            //         }
            //     }
            // )
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
                        //window.location.href = '/'
                    })

                } catch (error) {
                    console.error(error);
                }
            }


        },
    },
    async mounted() {
        this.stripe = await loadStripe(process.env.MIX_STRIPE_KEY)

        const elements = this.stripe.elements()
        this.cardElement = elements.create('card')

        this.cardElement.mount('#card-element');
        this.getPlan()
    }
}
</script>
