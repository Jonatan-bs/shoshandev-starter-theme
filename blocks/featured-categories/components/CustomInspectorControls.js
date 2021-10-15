 import { InspectorControls } from '@wordpress/block-editor';
 import { PanelBody, RangeControl, ToggleControl, SelectControl, TextControl}  from '@wordpress/components';

 function CustomInspectorControls(props) {
	const { attributes, setAttributes } = props;
	const { buttonText} = attributes;
    
    return (
		<InspectorControls>
            <PanelBody title="Button" initialOpen={true}>
                <TextControl
                    label="Text"
                    value={ buttonText }
                    onChange={ ( buttonText ) => setAttributes( { buttonText } ) }
                />
              </PanelBody>
        </InspectorControls>
	);
}

export default CustomInspectorControls;