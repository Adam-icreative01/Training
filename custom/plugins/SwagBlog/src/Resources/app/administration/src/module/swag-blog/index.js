import deDE from './snippet/de-DE.json';
import enGB from './snippet/en-GB.json';

const { Module } = Shopware;

Module.register('swag-blog', {
    type: 'plugin',
    name: 'blog',
    version: '1.0.0',
    title : 'swag-blog.general.mainMenuItemGeneral',
    description: 'swag-blog.general.descriptionTextModule',
    color: 'blue',
    icon: 'default-shopping-paper-bag-product',

    snippet : {
        'de-DE' : deDE,
        'en-GB' : enGB
    }, 

    // routes : {
    //     a: {
    //         name: 'swag_blog.index',
    //         path: 'swag_blog.index',
    //         component: 'swag-blog-index'
    //     }
    // },

    navigation : [{
        label : 'swag-blog.general.mainMenuItemGeneral',
        color: 'green',
        path: 'swag_blog.index',
        icon: 'default-shopping-paper-bag-product',
        parent: 'sw-catalogue',
        position: 100
    }]
});