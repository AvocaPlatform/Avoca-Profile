var app = new Vue({
    el: '#AvocaProfile',

    data: {
        title: '',
        social: '',
        socialLink: '',
        title_arr: JSON.parse(title_arr_str),
        social_arr: JSON.parse(social_arr_str),
    },

    methods: {

        addTitle() {

            if (this.title) {

                this.title_arr.push(this.title);
                this.title = '';

                jQuery('#titleValue').val(JSON.stringify(this.title_arr));
            }
        },

        removeTitle(index) {
            this.title_arr.splice(index, 1);
            jQuery('#titleValue').val(JSON.stringify(this.title_arr));
        },

        addSocial() {

            if (this.social && this.socialLink) {

                this.social_arr.push({
                    social: this.social,
                    link: this.socialLink
                });

                this.social = '';
                this.socialLink = '';

                jQuery('#socialValue').val(JSON.stringify(this.social_arr));
            }
        },

        removeSocial(index) {
            this.social_arr.splice(index, 1);
            jQuery('#socialValue').val(JSON.stringify(this.social_arr));
        }
    }
});