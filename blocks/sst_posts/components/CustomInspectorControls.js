 import { InspectorControls } from '@wordpress/block-editor';
 import { PanelBody, RangeControl, ToggleControl, SelectControl}  from '@wordpress/components';

 function CustomInspectorControls(props) {
	const { attributes, setAttributes } = props;
	const { cols, postsAmount, order, postType, postsPerLoad, loadmore} = attributes;
    
    return (
		<InspectorControls>
            <PanelBody title="Main Settings" initialOpen={true}>
                <RangeControl
                    label="Amount of posts"
                    value={ postsAmount }
                    onChange={ ( postsAmount ) => setAttributes( {postsAmount} ) }
                    min={ 1 }
                    max={ 16 }
                />
                <RangeControl
                    label="Columns"
                    value={ cols }
                    onChange={ ( cols ) => setAttributes( {cols} ) }
                    min={ 1 }
                    max={ 4 }
                />
                <SelectControl
                    label="Order"
                    value={ order }
                    options={ [
                        { label: 'Ascending', value: 'ASC' },
                        { label: 'Descending', value: 'DESC' },
                    ] }
                    onChange={ ( order ) => setAttributes( {order} ) }
                />
              </PanelBody>
              <PanelBody title="Load more button" initialOpen={false}>

                <ToggleControl
                    label="Load more button"
                    checked={ loadmore }
                    onChange={ ( loadmore ) => setAttributes( {loadmore} ) }

                />
                <RangeControl
                    label="Posts per load"
                    value={ postsPerLoad }
                    help={`Load ${postsPerLoad} new posts on click`}
                    onChange={ ( postsPerLoad ) => setAttributes( {postsPerLoad} ) }
                    min={ 1 }
                    max={ 16 }
                />

            </PanelBody>
        </InspectorControls>
	);
}

export default CustomInspectorControls;