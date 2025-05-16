import deDE from '../../snippet/de-DE.json';
import enGB from '../../snippet/en-GB.json';
import './page/swag-blog-category-list'

// const { Module } = Shopware;

Shopware.Module.register('swag-blog-category', {
    type: 'plugin',
    name: 'Blog Category',
    version: '1.0.0',
    title : 'swag-blog-category.general.mainMenuItemGeneral',
    description: 'swag-blog-category.general.descriptionTextModule',
    color: '#ff3d58',
    icon: 'default-shopping-paper-bag-product',

    snippets : {
        'de-DE' : deDE,
        'en-GB' : enGB
    }, 

    routes : {       
        list : {
            component : 'swag-blog-category-list',
            path: 'list'
        },
    },

    navigation : [{
        label : 'swag-blog-category.general.mainMenuItemGeneral',
        color: '#ff3d58',
        path: 'swag.blog.category.list',
        icon: 'default-shopping-paper-bag-product',
        parent: 'sw-catalogue',
        position: 100
    }]
});