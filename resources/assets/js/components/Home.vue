<template>
    <div>
        <nav class="panel column is-offset-2 is-8">
            <p class="panel-heading">
                VueJS Phone Book App
                <button class="button is-link is-outlined" @click="openAdd">
                    Add New Phone
                </button>
            </p>
            <div class="panel-block">
                <p class="control has-icons-left">
                    <input class="input is-small" type="text" placeholder="search">
                    <span class="icon is-small is-left">
                        <i class="fas fa-search"></i>
                    </span>
                </p>
            </div>
            <a class="panel-block">
                <span class="column is-9">
                    marksheet
                </span>

                <span class="panel-icon column is-1">
                  <i class="has-text-danger fa fa-trash"></i>
                </span>
                <span class="panel-icon column is-1">
                  <i class="has-text-info fa fa-edit"></i>
                </span>
                <span class="panel-icon column is-1">
                  <i class="has-text-primary fa fa-eye"></i>
                </span>
            </a>
        </nav>

        <add :openModal="addActive" @closeModal="closeModal"></add>
    </div>
</template>

<script>
    let Add = require('./Add');
    export default {
        data () {
            return {
                addActive: ''
            }
        },
        components: {
            Add
        },
        methods: {
            openAdd () {
                return this.addActive = 'is-active';
            },
            closeModal () {
                return this.addActive = '';
            }
        }
    }
</script>

<style></style>
