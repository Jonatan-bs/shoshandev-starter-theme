 import { InspectorControls } from '@wordpress/block-editor';
 import { PanelBody, RangeControl}  from '@wordpress/components';

 function CustomInspectorControls(props) {
	const { attributes, setAttributes } = props;
	const { } = attributes;
    
    return (
		<InspectorControls>
            {/* <PanelBody title="Settings" initialOpen={true}>
            </PanelBody> */}
        </InspectorControls>
	);
}

export default CustomInspectorControls;