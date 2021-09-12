import { __ } from '@wordpress/i18n';
import { useBlockProps,BlockControls, AlignmentToolbar, RichText} from '@wordpress/block-editor';
import './editor.scss';
import CustomInspectorControls from '../components/CustomInspectorControls';

export default function Edit(props) {
	
	const { attributes, setAttributes } = props;
	const {style, alignment} = attributes;
	return (
		<>
			<div { ...useBlockProps() }  style={{"--alignment":alignment}}>
				<button className={`sst_button ${style && `style-${style}`}`}>
						<RichText
							value={ attributes.text } 
							allowedFormats={ [ 'core/bold', 'core/italic' ] } 
							onChange={ ( text ) => setAttributes( { text } ) } 
							placeholder={ __( 'Button text' ) } 
						/>
				</button>
				<BlockControls>
						<AlignmentToolbar
                            value={ alignment }
                            onChange={ (alignment)=> setAttributes({alignment}) }
                        />
				</BlockControls>
			</div>
			<CustomInspectorControls attributes={attributes} setAttributes={setAttributes}/>
		</>
	);
}
