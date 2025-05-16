// <plugin root>/src/Resources/app/administration/src/module/swag-blog/index.js
import deDE from '../../snippet/de-DE.json';
import enGB from '../../snippet/en-GB.json';
import './page/swag-blog-list';

const { Module } = Shopware;

Shopware.Module.register('swag-blog', {
    type: 'plugin',
    name: 'Blog',
    version: '1.0.0',
    title : 'swag-blog.general.mainMenuItemGeneral',
    description: 'swag-blog.general.descriptionTextModule',
    color: '#ff3d58',
    icon: 'default-shopping-paper-bag-product',

    snippets : {
        'de-DE' : deDE,
        'en-GB' : enGB
    }, 

    routes : {       
        list : {
            component : 'swag-blog-list',
            path: 'list'
        },        
    },

    navigation : [{
        label : 'swag-blog.general.mainMenuItemGeneral',
        color: '#ff3d58',
        path: 'swag.blog.list',
        icon: 'default-shopping-paper-bag-product',
        parent: 'sw-catalogue',
        position: 100
    }]
});