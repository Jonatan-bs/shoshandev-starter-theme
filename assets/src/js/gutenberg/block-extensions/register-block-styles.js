/**
 * Register block styles
 */

import {__} from '@wordpress/i18n';

const coreButton = [
    {
        name: 'default',
        label: __('Default', 'sst'),
        isDefault: true,
    },
    {
        name: 'big',
        label: __('big', 'sst'),
    },
];

const coreButtonUnregister = [
    "fill",
    "outline"
];

const coreCover = [
    {
        name: 'default',
        label: __('Default', 'sst'),
        isDefault: true,
    },
    {
        name: 'highlighted-section',
        label: __('Highlighted Section', 'sst'),
    },
];

const register = () => {
    coreButton.forEach(layoutStyle => {
        wp.blocks.registerBlockStyle('core/button', layoutStyle)
    })
    coreCover.forEach(layoutStyle => {
        wp.blocks.registerBlockStyle('core/buttons', layoutStyle)
    })
}
const unregister = () => {
    coreButtonUnregister.forEach(layoutStyle => {
        wp.blocks.unregisterBlockStyle('core/button', layoutStyle)
    })
}

/**
 *  Register styles on dom ready.
 */
wp.domReady(()=>{
    unregister()
    register();
})

