<template>
    <div class="card" style="width: 18rem; cursor:pointer; ">
        <div class="card-body d-flex flex-column justify-content-between" style="height: 150px;">
            <h5 class="card-title align-top">{{ plan.title }}</h5>
            <h4 class="card-text"> £{{ plan.price }}</h4>
            <button
                type="button"
                class="btn btn-dark align-bottom"
                @click="selectPlan"
            >
                Select Plan
            </button>
        </div>
    </div>
</template>

<script>
    import { mapMutations } from 'vuex'
    export default {
        props: {
            plan: {
                required: true,
                type: Object
            }
        },


        methods: {
            ...mapMutations({
               mutateSelectedPlan: 'plan/mutateSelectedPlan'
            }),
            selectPlan () {

                this.mutateSelectedPlan(this.plan)
                window.location.href = '/subscriptions?plan=' + this.plan.slug
            }
        }
}
</script>
