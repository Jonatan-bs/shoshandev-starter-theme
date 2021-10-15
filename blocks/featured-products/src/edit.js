import { __ } from '@wordpress/i18n';
import { useBlockProps } from '@wordpress/block-editor';
import ServerSideRender from '@wordpress/server-side-render'
import { Placeholder } from '@wordpress/components';

export default function Edit(props) {
	const { attributes, setAttributes } = props;
	
	return (
		<>
			<div { ...useBlockProps() } >
				<Placeholder label="Placeholder" style={{alignItems: "center", backgroundColor: "#e7e7e7", boxShadow: 'inset 0 0 0 1px #c2c2c2'}}>
				 	<p style={{ margin: "0 auto" }}>Seneste Produkter</p>
				</Placeholder>
				{/* <ServerSideRender block="sst/featured-products"  attributes={attributes}/> */}
			</div>
		</>
	);
}
