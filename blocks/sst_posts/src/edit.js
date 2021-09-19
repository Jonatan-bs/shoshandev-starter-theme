import { __ } from '@wordpress/i18n';
import { useBlockProps } from '@wordpress/block-editor';
import ServerSideRender from '@wordpress/server-side-render'

import CustomInspectorControls from '../components/CustomInspectorControls';

export default function Edit(props) {
	
	const { attributes, setAttributes } = props;
	return (
		<>
			<div { ...useBlockProps() } >
				<ServerSideRender block="sst/posts" attributes={attributes}/>
			</div>
			<CustomInspectorControls attributes={attributes} setAttributes={setAttributes}/>
		</>
	);
}
