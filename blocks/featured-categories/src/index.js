import { registerBlockType } from '@wordpress/blocks';
import { InnerBlocks, useBlockProps } from '@wordpress/block-editor';


const MY_TEMPLATE = [
	['core/group',  { className: 'featured-categories'}, [
		['core/group', {}, [
		   [ 'core/image' ],
		   [ 'core/paragraph', {align: "center"}],
		],],
		['core/group', {}, [
		   [ 'core/image' ],
		   [ 'core/paragraph', {align: "center"} ],
		],],
		['core/group', {}, [
		   [ 'core/image' ],
		   [ 'core/paragraph', {align: "center"} ],
		],],
		['core/group', {}, [
		   [ 'core/image' ],
		   [ 'core/paragraph', {align: "center"} ],
		],]
     ],],
];

registerBlockType( 'sst/featured-categories', {
	/**
	 * @see ./edit.js
	 */
	edit: () => {
        return (
            <div { ...useBlockProps() } >
				<InnerBlocks
					template={ MY_TEMPLATE }
					templateLock="all"
				/>
            </div>
        );
    },
	save: props => {
		return <InnerBlocks.Content />
	}
} );
