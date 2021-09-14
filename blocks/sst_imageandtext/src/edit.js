import { __ } from '@wordpress/i18n';
import { useBlockProps,BlockControls, AlignmentToolbar, RichText} from '@wordpress/block-editor';
import './editor.scss';
import CustomInspectorControls from '../components/CustomInspectorControls';
import MyMediaUploader from '../components/MyMediaUploader';
import { Placeholder } from '@wordpress/components';
export default function Edit(props) {
	
	const { attributes, setAttributes } = props;
	const {image} = attributes;

	return (
		<>
			<div { ...useBlockProps() } >
				{image? (
					<p>ss</p>
				):<Placeholder
					label="Image And Text"
					instructions="Select an image"
					isColumnLayout //element is flex if this is not used
				>
					<MyMediaUploader image={image} setAttributes={setAttributes} />

				</Placeholder>}
				
			</div>
			<CustomInspectorControls attributes={attributes} setAttributes={setAttributes}/>
		</>
	);
}
