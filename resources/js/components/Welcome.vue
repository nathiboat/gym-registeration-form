<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="row align-items-lg-center">

                    <div class="col text-center text-md-start">
                        <h1 class="mb-3">SIGN UP NOW & BE READY FOR WHEN WE REOPEN</h1>
                        <p class="lead mb-4">
                            FIND A GYM NEAR YOU <br>
                            5 locations to choose from
                        </p>

                        <div class="d-flex flex-column flex-md-row text-center">
                            <a href="/" class="btn btn-lg btn-bd-primary mb-3 me-md-3">Get started</a>
                            <a href="/" class="btn btn-lg btn-outline-secondary mb-3">Download</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import { loadStripe } from '@stripe/stripe-js'

export default {

    async mounted() {
        this.stripe = await loadStripe(process.env.MIX_STRIPE_KEY)
        let elements = this.stripe.elements();

        const skus = await this.stripe.skus.list({limit: 3});
        console.log(skus)

    }
}
</script>
