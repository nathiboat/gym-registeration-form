<template>
        <div class="card" style="width: 18rem; cursor:pointer; " @click="selectLocation">
            <div class="card-body d-flex flex-column justify-content-between" style="height: 150px;">
                <h5 class="card-title align-top">{{ location.name }}</h5>

                <button type="button" class="btn btn-dark align-bottom">Select Location</button>
            </div>
        </div>
</template>

<script>
export default {
    props: {
        location: {
            required: true,
            type: Object
        }
    },
    methods: {
        selectLocation () {
            window.location.href = '/plans?stripe_product_id=' + this.location.stripe_product_id
        }
    }
}
</script>
