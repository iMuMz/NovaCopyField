<template>
    <default-field :field="field" :errors="errors">
        <template slot="field">
            <!--<input
                :id="field.name"
                type="text"
                class="w-full form-control form-input form-input-bordered"
                :class="errorClasses"
                :placeholder="field.name"
                v-model="value"
            />-->
            <button type="button" class="btn btn-default btn-primary" v-on:click="copyFields">Copy</button>

        </template>
    </default-field>
</template>

<script>
import { FormField, HandlesValidationErrors } from 'laravel-nova'

export default {
    mixins: [FormField, HandlesValidationErrors],

    props: ['resourceName', 'resourceId', 'field'],

    methods: {

        copyFields() {

            for (let [key, value] of Object.entries(this.field.copyFromTo)) {
                //console.log(`${key}: ${value}`);
                document.getElementById(value).value = document.getElementById(key).value
            }

        },
        /*
         * Set the initial, internal value for the field.
         */
        setInitialValue() {
            this.value = this.field.value || ''
        },

        /**
         * Fill the given FormData object with the field's internal value.
         */
        fill(formData) {
            formData.append(this.field.attribute, this.value || '')
        },

        /**
         * Update the field's internal value.
         */
        handleChange(value) {
            this.value = value
        },
    },
}
</script>
