 import { InspectorControls, PlainText, __experimentalLinkControl as LinkControl } from '@wordpress/block-editor';
 import { PanelBody, RadioControl, CheckboxControl, TextControl}  from '@wordpress/components';

 function CustomInspectorControls(props) {
	const { attributes, setAttributes } = props;
	const { style, text, link, newWindow } = attributes;
    
    return (
		    <InspectorControls>

        </InspectorControls>
	);
}

export default CustomInspectorControls;