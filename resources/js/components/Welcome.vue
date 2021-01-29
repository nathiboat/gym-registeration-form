<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="row align-items-lg-center">

                    <div class="col text-center text-md-start">
                        <global-page-title />
                        <p class="lead mb-4">
                            FIND A GYM NEAR YOU <br>
                            5 locations to choose from
                        </p>

                        <div class="d-flex flex-column flex-md-row text-center">
                            <location-card
                                v-for="location in locations"
                                :key="location.id"
                                :location="location"
                            />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>

export default {
    data () {
        return {
            locations: null
        }
    },

    methods: {
        async getLocations() {
            let response = await axios.get('/api/locations')

            this.locations = response.data
        },
    },
    mounted() {
        this.getLocations()
    }
}
</script>
