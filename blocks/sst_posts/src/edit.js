import { __ } from '@wordpress/i18n';
import { useBlockProps, InnerBlocks } from '@wordpress/block-editor';
import './editor.scss';
import ServerSideRender from '@wordpress/server-side-render'
import apiFetch from '@wordpress/api-fetch';
import { useState, useEffect } from '@wordpress/element';
import dayjs from 'dayjs'

import MyMediaUploader from '../components/MyMediaUploader';
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
