<template>
    <div>
        <h2>Summary detail</h2>
        <div class="card" >
            <div class="card-body">
                <h5 class="card-title">Name:  {{ getUser.name }} {{ getUser.surname }} </h5>
                <p class="card-text">Plan </p>
            </div>
            <ul class="list-group list-group-flush">
                <li class="list-group-item">Email: {{ getUser.email }}</li>
                <li class="list-group-item">Address: {{ getUser.postcode }}</li>
                <li class="list-group-item">Phone: {{ getUser.phone }}</li>
                <li class="list-group-item">Age: {{ getUser.age }}</li>
                <li class="list-group-item">Newsletter : {{ getUser.newsletter }}</li>
                <li class="list-group-item">Accept terms & conditions? : {{ getUser.newsletter }}</li>
            </ul>
            <div class="card-body">
                <button
                    class="btn btn-dark"
                    @click.prevent="confirmData"
                >
                    Confirm
                </button>
            </div>
        </div>
    </div>
</template>

<script>
    import { mapGetters, mapMutations } from 'vuex'

    export default {
        data () {
            return {
                stripe: {},
                cardElement: {},
            }
        },
        computed:{
            ...mapGetters({
                getUser: 'user/user',
                getUserConfirm: 'user/userConfirm'
            })
        },
        methods: {
            ...mapMutations({
                mutateUserConfirm: 'user/mutateUserConfirm'
            }),

            confirmData () {
                this.mutateUserConfirm(true)
            }
        },




    }
</script>
