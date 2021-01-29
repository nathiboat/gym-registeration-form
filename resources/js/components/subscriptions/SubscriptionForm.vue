<template>
    <div>
        <h2>Your detail</h2>
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
                    type="submit" class="btn btn-dark" @click.prevent="saveUser"
                    v-model="submitButton"
                >
                    Submit
                </button>
            </form>
        </div>
    </div>
    </div>
</template>

<script>

import { mapMutations } from 'vuex'

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
        ...mapMutations({
            mutateUser: 'user/mutateUser'
        }),
        async getPlan() {
            try {
                const response = await axios.get('/api/plans/' + this.plan)

                this.plans = response.data
            } catch (error) {
                console.error(error);
            }
        },
        async saveUser() {

            this.mutateUser(this.form)

        },
    },
    async mounted() {
        this.getPlan()
    }
}
</script>
