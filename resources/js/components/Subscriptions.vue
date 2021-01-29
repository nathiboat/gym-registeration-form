<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="row align-items-lg-center">

                    <div class="col text-center text-md-start">
                        <global-page-title />
                        <p class="lead mb-4">
                            Please fill in your detail.
                        </p>

                        <div class="row mb-2">
                            <div class="col">
                                <a href="/plans" class="btn btn-primary text-center">< Back</a>
                            </div>
                        </div>

                        <subscription-form :plan="plan"/>
                    </div>
                </div>
            </div>
        </div>
    </div>

</template>

<script>
    export default {
        props: {
            plan: {
                required: true,
                type: String
            }
        }
    }
</script>
