<template>
        <div class="card" style="width: 18rem; cursor:pointer; " @click="selectLocation">
            <div class="card-body d-flex flex-column justify-content-between" style="height: 150px;">
                <h5 class="card-title align-top">{{ location.name }}</h5>

                <button type="button" class="btn btn-dark align-bottom">Select Plan</button>
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

        }
    }
}
</script>
