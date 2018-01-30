<template>
    <div class="modal" :class="showModal">
        <div class="modal-background"></div>
        <div class="modal-card">
            <header class="modal-card-head">
                <p class="modal-card-title">{{ phone.name }}'s Details</p>
                <button class="delete" aria-label="close" @click="closeModal"></button>
            </header>
            <section class="modal-card-body">
                <div class="panel-block">
                    <label class="column is-2"><b>Name</b></label>{{ phone.name }}
                </div>

                <div class="panel-block">
                    <label class="column is-2"><b>Phone</b></label>{{ phone.number }}
                </div>

                <div class="panel-block">
                    <label class="column is-2"><b>E-Mail</b></label>{{ phone.email }}
                </div>
            </section>
            <footer class="modal-card-foot">
                <button class="button" @click="closeModal">Cancel</button>
            </footer>
        </div>
    </div>
</template>

<script>
    export default {
        props: ['showModal', 'phone'],
        data () {
            return {
            }
        },
        methods: {
            closeModal () {
                this.$emit('closeModal');
            },
        }
    }
</script>

<style></style>
