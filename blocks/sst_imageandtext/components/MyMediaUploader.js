import { MediaUpload, MediaUploadCheck} from '@wordpress/block-editor';
import { Button }  from '@wordpress/components';

const ALLOWED_MEDIA_TYPES = [ 'image' ];
 
function MyMediaUploader( { image , setAttributes} ) {
    const onSelect = ( image ) => {
		setAttributes( { image } );
	};	
    
    return (
		<MediaUploadCheck>
			<MediaUpload
				onSelect={ onSelect }
				allowedTypes={ ALLOWED_MEDIA_TYPES }
				value={ image?.id }
				render={ ( { open } ) => (
					<Button
						onClick={ open }
						className="button button-large"
                        style={{margin: "0 auto"}}
					>{ image?.id ? 'Edit Gallery' : 'Upload/Select Images' }</Button>
				) }
			/>
		</MediaUploadCheck>
	);
}

export default MyMediaUploader;