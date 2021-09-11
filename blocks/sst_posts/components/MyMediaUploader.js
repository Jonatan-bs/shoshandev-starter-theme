import { MediaUpload, MediaUploadCheck} from '@wordpress/block-editor';
import { Button }  from '@wordpress/components';

const ALLOWED_MEDIA_TYPES = [ 'image' ];
 
function MyMediaUploader( { mediaIDs , setAttributes} ) {
    const onSelect = ( items ) => {
		setAttributes( {
			images: items.map( item => {
				return {
					mediaID: parseInt( item.id, 10 ),
					mediaURL: item.url
				};
			} ),
		} );
	};	
    
    return (
		<MediaUploadCheck>
			<MediaUpload
				onSelect={ onSelect }
				allowedTypes={ ALLOWED_MEDIA_TYPES }
				value={ mediaIDs }
				render={ ( { open } ) => (
					<Button
						onClick={ open }
						className="button button-large"
                        style={{margin: "0 auto"}}
					>{ mediaIDs.length < 1 ? 'Upload/Select Images' : 'Edit Gallery' }</Button>
				) }
				gallery
				multiple
			/>
		</MediaUploadCheck>
	);
}

export default MyMediaUploader;