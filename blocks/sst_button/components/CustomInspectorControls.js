 import { InspectorControls, PlainText, __experimentalLinkControl as LinkControl } from '@wordpress/block-editor';
 import { PanelBody, RadioControl, CheckboxControl, TextControl}  from '@wordpress/components';

 function CustomInspectorControls(props) {
	const { attributes, setAttributes } = props;
	const { style, text, link, newWindow } = attributes;
    
    return (
		    <InspectorControls>
              <PanelBody title="Link" initialOpen={true}>
              <LinkControl
                style={{display: 'none'}}
                searchInputPlaceholder="Search here..."
                value={ link }
                settings={[
                  {
                    id: 'opensInNewTab',
                    title: 'Open in new tab',
                  },
                ]}
                onChange={ ( link ) => { setAttributes( { link } )} }
                withCreateSuggestion={false}
              />
              </PanelBody>
            <PanelBody title="Style" initialOpen={true}>
                  <RadioControl
                  label="Button Style"
                  selected={ style }
                  options={ [
                      { label: 'Default', value: '' },
                      { label: 'Outline', value: 'outline' },
                  ] }
                  onChange={ ( style ) => setAttributes( {style} ) }
                />
            </PanelBody>
        </InspectorControls>
	);
}

export default CustomInspectorControls;