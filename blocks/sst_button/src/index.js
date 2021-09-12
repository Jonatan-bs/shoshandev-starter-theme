/**
 * Registers a new block provided a unique name and an object defining its behavior.
 *
 * @see https://developer.wordpress.org/block-editor/reference-guides/block-api/block-registration/
 */
import { registerBlockType } from '@wordpress/blocks';
import './style.scss';

/**
 * Internal dependencies
 */
import Edit from './edit';


// const MY_TEMPLATE = [
//     [ 'core/heading', { placeholder: 'Book Title' } ],
//     [ 'core/paragraph', { placeholder: 'Summary' } ],
// ];

/**
 * Every block starts by registering a new block type definition.
 *
 * @see https://developer.wordpress.org/block-editor/reference-guides/block-api/block-registration/
 */
registerBlockType( 'sst/button', {
	/**
	 * @see ./edit.js
	 */
	edit: Edit,

	/**
	 * @see ./save.js
	 */
	// save: props => <InnerBlocks.Content template={ MY_TEMPLATE } templateLock="all" />,
	save: () => null,
} );
