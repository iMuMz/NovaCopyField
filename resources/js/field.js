Nova.booting((Vue, router, store) => {
  Vue.component('index-nova-copy-field', require('./components/IndexField'))
  Vue.component('detail-nova-copy-field', require('./components/DetailField'))
  Vue.component('form-nova-copy-field', require('./components/FormField'))
})
