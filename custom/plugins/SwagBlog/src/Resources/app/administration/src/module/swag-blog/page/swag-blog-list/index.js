import template from './swag-blog-list.html.twig';

const { Component } = Shopware;
const { Criteria } = Shopware.Data;

Component.register('swag-blog-list', {
    template, 

    injected : [
        'repositoryFactory'
    ],

    data() {
        return {
            repository: null,
            blogs: null
        };
    },

    metaInfo() {
        return {
            title: this.$createTitle(),
        };
    },

    created() {
        console.log('swag-blog-list created');
        this.createComponent();
    },
    
    computed: {
        columns() {
            return this.getColumns();
        }
    },


    methods: {
        createComponent() {
            this.repository = this.repositoryFactory.create('blogs');
            this.repository.search(new Criteria(), Shopware.Context.api).then(response => {
                this.blogs = response;
            });
        },

        getColumns() {
            return [
                {
                    property: 'name',
                    // label: this.$tc('swag-blog.list.columnName'),
                    label: 'Name',
                    routerLink: 'swag.blog.detail',
                    inlineEdit: 'string',
                    allowResize: true,
                    primary: true
                },                
            ];
        }
    }

});
