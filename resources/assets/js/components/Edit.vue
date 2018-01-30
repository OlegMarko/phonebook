<template>
    <div class="modal" :class="editActive">
        <div class="modal-background"></div>
        <div class="modal-card">
            <header class="modal-card-head">
                <p class="modal-card-title">Update {{ phone.name }}'s Details</p>
                <button class="delete" aria-label="close" @click="closeModal"></button>
            </header>
            <section class="modal-card-body">
                <div class="field">
                    <label class="label">Name</label>
                    <div class="control">
                        <input class="input" :class="{'is-danger': errors.name}" type="text" placeholder="Name" v-model="phone.name">
                    </div>
                    <small class="has-text-danger" v-if="errors.name" v-for="er in errors.name">{{ er }}</small>
                </div>

                <div class="field">
                    <label class="label">Phone</label>
                    <div class="control">
                        <input class="input" :class="{'is-danger': errors.number}" type="number" placeholder="Phone" v-model="phone.number">
                    </div>
                    <small class="has-text-danger" v-if="errors.number" v-for="er in errors.number">{{ er }}</small>
                </div>

                <div class="field">
                    <label class="label">E-Mail</label>
                    <div class="control">
                        <input class="input" :class="{'is-danger': errors.email}" type="email" placeholder="E-Mail" v-model="phone.email">
                    </div>
                    <small class="has-text-danger" v-if="errors.email" v-for="er in errors.email">{{ er }}</small>
                </div>
            </section>
            <footer class="modal-card-foot">
                <button class="button is-success" @click="editPhone">Edit phone</button>
                <button class="button" @click="closeModal">Cancel</button>
            </footer>
        </div>
    </div>
</template>

<script>
    export default {
        props: ['editActive', 'phone'],
        data () {
            return {
                errors: {},
            }
        },
        methods: {
            closeModal () {
                this.$emit('closeModal');
            },
            editPhone () {
                axios.put('/phone/' + this.$props.phone.id, this.phone)
                    .then((response) => {
                        this.closeModal();
                    })
                    .catch((error) => this.errors = error.response.data.errors);
            }
        }
    }
</script>

<style></style>
