import template from './swag-blog-category-list.html.twig';

const { Component } = Shopware;
const { Criteria } = Shopware.Data;

Component.register('swag-blog-category-list', {
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
        // console.log('swag-blog-category-list created');
        this.createComponent();
    },
    
    computed: {
        columns() {
            return this.getColumns();
        }
    },


    methods: {
        createComponent() {
            this.repository = this.repositoryFactory.create('blog_category');
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
                    routerLink: 'swag.blog.category.detail',
                    inlineEdit: 'string',
                    allowResize: true,
                    primary: true
                },                
            ];
        }
    }

});
